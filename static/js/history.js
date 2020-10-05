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
	
	//===========进入页面时先获取一页===========
	let curpage = getParam('page', 1);
	let keyword = getParam('keyword', '');
	$('.search-box-input').val(keyword);
	getHistoryList(curpage, keyword);
	
	//======点击上一页、下一页、首页、末页、跳转到第n页时，获取该页数据======
	$('.upload-history-list').on('click', '.pagination .button', function (){
		if($(this).hasClass('forbidden')){
			return false;
		}
		
		let $this = $(this);
		let page = $this.data('page');
		let pageNew = page;
		//如果点击的是跳转按钮，则判断一下输入的页码是否不合理
		if($this.hasClass('jump-to-page-button')){
			let pageCount = $this.data('pagecount');
			pageNew = page = parseInt($this.prev().val());
			if(page = undefined || page < 1){
				pageNew = 1;
			}
			if(page > pageCount){
				pageNew = pageCount;
			}
			if(pageNew != page){
				//纠正page值后，重新设置回去
				$('.jump-to-page').val(pageCount);
			}
		}
		//把改变后的页码写入url中
		setParam('page', pageNew);
		let keyword = $('.search-form .search-box-input').val();
		getHistoryList(pageNew, keyword);
	});
	
	//跳转页码focus状态
	let focus = false;
	$('.upload-history-list').on('focus', '.jump-to-page', function (){
		focus = true;
	});
	//跳转页码blur
	$('.upload-history-list').on('blur', '.jump-to-page', function (){
		focus = false;
	});
	
	//监听放开按键事件(有放开说明一定按了这个按钮，因为只有先按下了才能放开)
	$(document).on('keyup', function (e){
		//回车键
		if(e.keyCode == 13 && focus){
			let page = $('.jump-to-page').val();
			let keyword = $('.search-form .search-box-input').val();
			setParam('page', page);
			getHistoryList(page, keyword);
		}
		
		//左方向键
		if(e.keyCode == 37){
			let page = $('.jump-to-page').val();
			let keyword = $('.search-form .search-box-input').val();
			if(page > 1){
				setParam('page', page);
				getHistoryList(page - 1, keyword);
			}
		}
		
		//右方向键
		if(e.keyCode == 39){
			let page = $('.jump-to-page').val();
			page = parseInt(page);
			if(isNaN(page)){
				page = 1;
			}
			let pageCount = $('.jump-to-page').next().data('pagecount');
			let keyword = $('.search-form .search-box-input').val();
			if(page < pageCount){
				setParam('page', page);
				getHistoryList(page + 1, keyword);
			}
		}
	});
	
	//提交查询
	// 不管点击了查询按钮还是按了回车，都会触发search-form的submit事件，所以
	// 只需要监听submit事件而不用单独监听查询按钮的点击事件和监听是否按了回车
	$('.search-form').on('submit', function (){
		let keyword = $('.search-form .search-box-input').val();
		//搜索一定从第一页开始
		setParam('page', 1);
		setParam('keyword', keyword);
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
	
	//浏览器点击返回/前进按钮时，会从历史记录数组里pop(出栈)最后一条历史记录(这些历史记录需要我们用js手动push进去，每次点击了什么按钮，只要改变了url，就push进去，这样方便点返回按钮的时候，可以pop出来，然后通过监听popstate事件拿到那个url，再从url中拿到参数，进而根据这些参数，用js去显示对应页面，比如返回到第几页)
	$(window).on('popstate', function (){
		let history = getParam('history', 0);
		let lastHistory = getParam('history', 0, lastQueryStr);
		
		// 历史记录由php识别history=1加载，如果它变化了，则需要刷新页面，php才能重新决定是否显示history页面
		// 并且由于本js文件是history.js，只会用在history页码，所以不需要考虑非history页面参数的变化
		// 因为如果非history页码参数发生了变化，那history一定从1变0了，在history页面其它参数是不会变化的
		if(history != lastHistory){
			window.location.reload();
		}
		
		if(history == 1){
			let page = getParam('page', 0);
			let lastPage = getParam('page', 0, lastQueryStr);
			let keyword = getParam('keyword', 0);
			let lastKeyword = getParam('keyword', 0, lastQueryStr);
			
			//页码有变化，重新获取该页
			if(page != lastPage){
				$('.jump-to-page').val(page);
				//把lastQueryStr更新为当前的queryStr(即点了后退或前进键之后的)
				lastQueryStr = window.location.search.toString();
				getHistoryList(page, keyword);
			}
			
			//查询关键词有变化，重新查询
			//(并且页码不从1开始，因为可能就是从第3页返回第2页，你也不能强制从第1页开始)
			if(keyword != lastKeyword){
				//关键词有变化，设置新关键词
				$('.search-form .search-box-input').val(keyword);
				//把lastQueryStr更新为当前的queryStr(即点了后退或前进键之后的)
				lastQueryStr = window.location.search.toString();
				getHistoryList(page, keyword);
			}
		}
	});
});