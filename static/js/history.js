/**
 * 获取当前tab值(如果没有自动添加)
 * @param param
 * @param defaultValue
 * @returns {number|string}
 */
function getParam(param, defaultValue){
	let queryStr = window.location.search.toString();
	let reg = new RegExp('.*'+param+'=([^&\n?]*)&*.*', 'gi');
	let ret = reg.exec(queryStr);
	let value = defaultValue;
	if(ret!=null && ret[1]!=undefined){
		value = ret[1];
		value = decodeURIComponent(value);
	}else{
		setParam(param, defaultValue);
	}
	return value;
}

/**
 * 设置当前tab值
 * @param param
 * @param value
 */
function setParam(param, value){
	if(typeof(value)=='string'){
		value = value.trim();
		value = encodeURIComponent(value);
	}
	//window.location.href可以获取到整个完整的url(包括"#"号锚点)
	let curUrl = window.location.href.toString();
	//window.location.search用于获取url中的"?a=1&b=2&b=3……",但不包括#号及其后面的, substr(1)是去掉"?"号
	let queryStr = window.location.search.toString();
	
	//为了后面统一组装字符串
	let arr = [curUrl,''];
	//这样做是为了处理带#号的锚点
	let queryStrEmpty = true;
	if(queryStr!==''){
		queryStrEmpty = false;
		arr = curUrl.split(queryStr);
	}else if(curUrl.indexOf('#') > -1){
		arr = curUrl.split('#');
	}
	let reg = new RegExp('(.*)('+param+'=)([^&\n?]*)(&*)(.*)', 'gi');
	let ret = reg.exec(queryStr);
	//如果没有匹配到就添加该参数
	if(ret==null){
		let separater = '?';
		//如果第一个字符是"?"号，则把分隔符换成"&"
		if(queryStr.indexOf('?')===0){
			separater = '&';
		}
		queryStr = queryStr + separater + param + '=' + value;
	}else{
		//如果匹配到了就替换该参数的值
		queryStr = queryStr.replace(reg, '$1' + '$2' +value + '$4' + '$5' );
	}
	if(queryStrEmpty && curUrl.indexOf('#') > -1){
		//url中有#号(#号后面的肯定是锚点名，所以#号肯定在最后，把queryStr插入到#号之前，再把之前根据#号分割成的数组连起来)
		curUrl = arr.join(queryStr+'#');
	}else{
		curUrl = arr.join(queryStr);
	}
	window.history.replaceState('', '', curUrl);
}

/**
 * deleteImage
 * @param hash
 * @param obj
 * @param engine
 * @returns {boolean}
 */
function deleteImage(hash, obj, engine='Imgur'){
	if(!confirm('确定要从'+engine+'中删除吗？')){
		return false;
	}
	$(obj).parent().parent().find('.deleting-mask').show();
	$.ajax({
		type: 'get',
		url: './settings/dispatch.php',
		data: {
			class: 'HistoryController',
			func: 'deleteImage',
			hash: hash,
			engine: engine,
		},
		dataType: 'json',
		success: function (response){
			if(response.code == 0){
				$(obj).parent().parent().find('.deleting-text').html('从'+engine+'删除成功<br>正在从本地记录中删除…');
				setTimeout(function (){
					$(obj).parent().parent().find('.deleting-mask').hide();
					let id = $(obj).attr('local-history-id');
					deleteItems(id);
				}, 1000);
			}else{
				alert('删除失败');
			}
		},
		error: function (error){
			console.log(error.responseText);
			$(obj).parent().parent().find('.deleting-text').html(error.responseText);
		}
	});
}

//获取一页历史记录
function getHistoryList (page, keyword){
	setParam('keyword', keyword);
	$.ajax({
		type: 'get',
		url: './settings/dispatch.php',
		data: {
			class: 'HistoryController',
			func: 'get-list',
			page: page,
			keyword: keyword,
		},
		dataType: 'json',
		success: function (response){
			if(response.code == 0){
				var data = response.data;
				if(data.length == 0){
					var tr =
					`<tr class="no-history">
						<td colspan="8">未查询到相关的历史记录</td>
					</tr>`;
					$('.upload-history-list tbody').html(tr);
					//顶部分页
					$('.upload-history-list thead tr.pagination').empty();
					return false;
				}
				
				var tr = '';
				var pagination =
					`<td colspan="8">
						${response.pagination}
					</td>`;
				
				for(let i=0; i<data.length; i++){
					var url = data[i].url;
					var deleteLink = '';
					if(url.indexOf(',') > 0){
						var arr = url.split(',');
						url = arr[0];
						let lastSlashPos = arr[1].lastIndexOf('\/');
						let deleteHash = arr[1].substr(lastSlashPos+1);
						deleteLink = '<div>Delete Link: '+arr[1]+' <button onclick="return deleteImage(\''+deleteHash+'\', this, \'smms\')" local-history-id="'+ data[i].id +'">Delete</button></div>';
					}
					if(url.indexOf(';') > 0){
						var arr = url.split(';');
						url = arr[0];
						deleteLink = '<div>Delete Hash: '+arr[1]+' <button onclick="return deleteImage(\''+arr[1]+'\', this, \'Imgur\')" local-history-id="'+ data[i].id +'">Delete</button></div>';
					}
					//其中preview是nextcloud的，\=view是GoogleDrive的
					var pattern = /http[s]{0,1}.*?(?:\.jpg|\.jpeg|\.png|.gif|.webp|.bmp|.svg|\/preview|\=view)/;
					var img = pattern.test(url) ? '<img class="image" src="'+url+'"">' : '';
					
					var exclamationMark = '!';
					var markdownWithLink = '<span class="button copy-image-url copy-markdown-with-link" data-clipboard-text="[![' + data[i].filename + '](' + url + ')](' + url+ ')" title="点击复制带链接的markdown格式到剪贴板">带链接的markdown</span>';
					var bbcode = '[img]' + url + '[/img]';
					if(data[i].mime!=undefined && data[i].mime.substr(0,5)!=='image'){
						exclamationMark = '';
						markdownWithLink = '';
						bbcode = '[url='+url+']'+data[i].filename+'[/url]';
					}
					tr +=
					`<tr class="history">
						<td><input class="check-item" type="checkbox" value="${data[i].id}"></td>
						<td>${data[i].id}</td>
						<td>
							${img}
							<div class="origin-filename">${data[i].filename}</div>
						</td>
						<td class="img-url-td">
							<div class="deleting-mask">
								<div class="deleting-text">删除中...</div>
							</div>
							<a href="${url}" target="_blank">${url}</a>
							${deleteLink}
						</td>
						<td>${data[i].size}</td>
						<td>${data[i].mime}</td>
						<td>${data[i].created_at}</td>
						<td class="operations">
							<span class="button copy-image-url copy-url" data-clipboard-text='${url}' title="点击复制原始url到剪贴板">原始url</span>
							<span class="button copy-image-url copy-markdown" data-clipboard-text='${exclamationMark}[${data[i].filename}](${url})' title="点击复制markdown格式url到剪贴板">markdown</span><br>
							${markdownWithLink}
							<span class="button copy-image-url copy-markdown-with-link" data-clipboard-text='${bbcode}' title="点击复制BBC格式到剪贴板">BB Code</span>
							<span class="button remove-from-list" data-id="${data[i].id}" title="从历史记录中移除">移除</span>
						</td>
					</tr>`;
				}
				tr = tr +
				`<tr>
					<td><input type="checkbox" class="select-all"></td>
					<td colspan="6"></td>
					<td><span class="button delete-all">批量删除</span></td>
				</tr>
				<tr class="pagination">
					${pagination}
				</tr>`;
				$('.upload-history-list tbody').html(tr);
				//顶部分页
				$('.upload-history-list thead tr.pagination').html(pagination);
			}
		},
		error: function (error){
			console.log(error.responseText);
		}
	});
}

//删除一条或多条历史记录
function deleteItems(ids){
	$.ajax({
		type: 'post',
		url: './settings/dispatch.php?class=HistoryController&func=remove-items',
		data: {
			ids: ids,
		},
		dataType: 'json',
		success: function (response){
			if (response.code == 0){
				$('.check-item').each(function (){
					let curId = $(this).val();
					//删除单条记录
					if(!isNaN(ids)){
						if(curId == ids){
							let deleteTr = $(this).parents('tr');
							deleteTr.css('backgroundColor', '#faebd7');
							setTimeout(function (){
								deleteTr.remove();
							}, 500);
						}
					}else{
						//删除多条记录
						let idArr = ids.split(',');
						for(let item of idArr){
							if(item == curId){
								let deleteTr = $(this).parents('tr');
								deleteTr.css('backgroundColor', '#faebd7');
								setTimeout(function (){
									deleteTr.remove();
								}, 500);
							}
						}
					}
				});
			}else{
				alert(response.msg);
			}
		},
		error:function (xhr){
			console.log(xhr);
		}
	});
}

/*
	jQuery入口函数
 */
$(document).ready(function (){
	//================== 图片放大 开始 ======================
	//初始化图片放大插件
	var viewer = ImageViewer({
		zoomValue:100,
		maxZoom:500,
		snapView:true,
		refreshOnResize:true,
		zoomOnMouseWheel:true,
	});
	
	//点击放大图片
	$('.upload-history-list').on('click','.image', function (e){
		e.stopPropagation();
		var src = $(this).attr('src');
		viewer.show(src, src);
	});
	//================== 图片放大 结束 ======================
	
	//================== 复制url 开始 ======================
	//点击复制图片url
	var clipboard = new ClipboardJS('.copy-image-url');
	clipboard.on('success', function(e) {
		// console.info('Action:', e.action);
		// console.info('Text:', e.text);
		// console.info('Trigger:', e.trigger);
		e.clearSelection();
	});
	
	clipboard.on('error', function(e) {
		console.error('Action:', e.action);
		console.error('Trigger:', e.trigger);
	});
	//================== 复制url 结束 ======================
	
	//删除一条记录
	$('.upload-history-list').on('click', '.remove-from-list', function (){
		if(!confirm('移除后无法恢复，确定要移除吗?')){
			return false;
		}
		let id = $(this).data('id');
		deleteItems(id);
	});
	
	//进入页面时先获取一页
	let curpage = getParam('page', 1);
	let keyword = getParam('keyword', '');
	$('.search-box-input').val(keyword);
	getHistoryList(curpage, keyword);
	
	//点击上一页、下一页、首页、末页、跳转到第n页时，获取该页数据
	$('.upload-history-list').on('click', '.pagination .button', function (){
		if($(this).hasClass('forbidden')){
			return false;
		}
		var page = 1;
		var $this = $(this);
		if($this.hasClass('jump-to-page-button')){
			var pageCount = $(this).data('pagecount');
			page = $this.prev().val();
			if(page > pageCount){
				$('.jump-to-page').val(pageCount);
			}
		}else{
			page = $(this).data('page');
		}
		setParam('page', page);
		let keyword = $('.search-form .search-box-input').val();
		getHistoryList(page, keyword);
	});
	
	//跳转页码focus
	$('.upload-history-list').on('focus', '.jump-to-page', function (){
		$(this).attr('focus',1);
	});
	//跳转页码blur
	$('.upload-history-list').on('blur', '.jump-to-page', function (){
		$(this).attr('focus',0);
	});
	
	//监听放开按键事件(有放开说明一定按了这个按钮，因为只有先按下了才能放开)
	$(document).on('keyup', function (e){
		//回车键
		if(e.keyCode == 13){
			let page = $('.jump-to-page[focus="1"]').val();
			let keyword = $('.search-form .search-box-input').val();
			getHistoryList(page, keyword);
		}
		
		//左方向键
		if(e.keyCode == 37){
			let page = $('.jump-to-page').eq(0).val();
			let keyword = $('.search-form .search-box-input').val();
			if(page > 1){
				getHistoryList(page - 1, keyword);
			}
		}
		
		//右方向键
		if(e.keyCode == 39){
			let page = $('.jump-to-page').eq(0).val();
			page = parseInt(page);
			if(isNaN(page)){
				page = 1;
			}
			let pageCount = $('.jump-to-page').eq(0).next().data('pagecount');
			let keyword = $('.search-form .search-box-input').val();
			if(page < pageCount){
				getHistoryList(page + 1, keyword);
			}
		}
	});
	
	//点击查询按钮
	$('.search-box-btn').on('click', function (){
		let keyword = $(this).prev().val();
		$('.search-form').submit();
	});
	
	//提交搜索
	$('.search-form').on('submit', function (){
		let keyword = $('.search-form .search-box-input').val();
		getHistoryList(1, keyword);
		return false;
	});
	
	//全选
	$('.upload-history-list').on('change', '.select-all', function (){
		if($(this).prop('checked')){
			//选中所有行
			$('.check-item').prop('checked', true);
			//把另一个全选按钮也选中
			$('.select-all').prop('checked', true);
		}else{
			//取消选中所有行
			$('.check-item').prop('checked', false);
			//把另一个全选按钮也取消选中
			$('.select-all').prop('checked', false);
		}
	});
	
	//选择某一个(注意要处理当全部选中时，要把全选的复选框也选中，当减掉一个时，要把全选复选框取消选中)
	$('.upload-history-list').on('change', '.check-item', function (){
		if(!$(this).prop('checked')){
			$('.select-all').prop('checked', false);
		}else{
			var allChecked = true;
			$('.check-item').each(function (){
				allChecked  = allChecked && $(this).prop('checked');
			});
			$('.select-all').prop('checked', allChecked);
		}
	});
	
	//批量删除
	$('.upload-history-list').on('click', '.delete-all', function (){
		let ids = [];
		//循环获取要删除的id
		$('.check-item').each(function (){
			if($(this).prop('checked')){
				ids.push($(this).val());
			}
		});
		if(ids.length > 0) {
			if(!confirm('确定要删除选择的记录吗？')){
				return false;
			}
		}else{
			alert('请先选择要删除的历史记录');
			return false;
		}
		deleteItems(ids.join(','));
		$('.select-all').prop('checked', false);
	});
	
	//点击返回按钮
	$('.go-back').on('click', function (){
		setParam('history', 0);
		window.location.reload();
		return false;
	});
});