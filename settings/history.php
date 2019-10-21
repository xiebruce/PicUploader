<?php
	// echo '这是历史记录';
?>
<html>
	<head>
		<title>上传历史记录</title>
		<meta name="referrer" content="no-referrer" />
		<script src="/static/js/clipboard.js"></script>
		<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
		<link href="/static/ImageViewer/imageviewer.css" rel="stylesheet">
		<script src="/static/ImageViewer/imageviewer.min.js"></script>
		<script src="/static/js/clipboard.js"></script>
		<style>
			html,body{
				margin: 0;
				padding: 0;
				height: 100%;
			}
			
			.container {
				clear: both;
				height: 100%;
				position: relative;
			}
			.container .upload-history-list {
				width: 95%;
				margin: 0 auto 100px auto;
				padding: 0 10px;
				/*min-height: 100px;*/
				border: 1px solid #cccccc;
				border-collapse: collapse;
			}
			.container .upload-history-list th,td {
				border: 1px solid #cccccc;
				padding: 4px 4px;
				text-align: center;
			}
			.container .upload-history-list .file-id {
				width: 5%;
			}
			.container .upload-history-list .image {
				width: 50px;
			}
			.container .upload-history-list .button {
				padding: 2px 6px;
				margin: 5px 0;
				display: inline-block;
				font-size: 16px;
				border-radius: 4px;
				cursor: pointer;
				background: #4182cc;
				color: #ffffff;
				height: 24px;
				line-height: 24px;
			}
			.container .upload-history-list .pagination .button {
				margin: 5px 2px;
			}
			.container .upload-history-list .button:hover {
				color: #ffffff;
				background: #ff9e4a;
			}
			.container .upload-history-list .remove-from-list {
				background: #e14337;
			}
			.container .upload-history-list .no-history{
				height: 100px;
			}
			.container .upload-history-list tr:hover {
				background: rgba(246, 248, 250, 0.95);
			}
			.pagination .jump-to-page, .search-form .search-box-input {
				width: 50px;
				height: 28px;
				line-height: 28px;
				padding: 2px;
				text-align: center;
				font-size: 14px;
			}
			.search-form {
				margin-block-end: 0;
			}
			.search-form .search-box-input {
				width: 300px;
				text-align: left;
			}
			.container .upload-history-list .pagination .cur {
				background: #ff4c00;
			}
			.container .upload-history-list .pagination .forbidden {
				background: #9a9a9a;
				cursor: not-allowed;
			}
			.container .return{
				width: 95%;
				margin: 0 auto;
				height: 50px;
				line-height: 50px;
			}
			.upload-history-list .file-upload-time {
				width: 11%;
			}
			
			.upload-history-list .operations {
				width: 12%;
			}
		</style>
		<script>
			function deleteFromImgur(hash, obj){
				if(!confirm('确定要从Imgur中删除吗？')){
					return false;
				}
				$.ajax({
					type: 'get',
					url: './settings/dispatch.php',
					data: {
						class: 'HistoryController',
						func: 'deleteFromImgur',
						hash: hash,
					},
					dataType: 'json',
					success: function (response){
						if(response.code == 0){
							$(obj).parent().html('从Imgur中删除成功，请点击右侧“移除”按钮从本地记录中移除该记录');
						}else{
							alert('删除失败');
						}
					},
					error: function (error){
						console.log(error);
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
								var tr = `<tr class="no-history">
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
									deleteLink = '<div>Delete Link: '+arr[1]+' <a href="'+arr[1]+'" target="_blank" onclick="return confirm(\'确定要从sm.ms中删除该图片吗? 删除后请手动移除本条记录\')">Delete</a></div>';
								}
								if(url.indexOf(';') > 0){
									var arr = url.split(';');
									url = arr[0];
									deleteLink = '<div>Delete Hash: '+arr[1]+' <button onclick="return deleteFromImgur(\''+arr[1]+'\', this)">Delete</button></div>';
								}
								var pattern = /http[s]{0,1}.*?\.jpg|\.jpeg|\.png|.gif|.webp|.bmp|.svg|\/preview/;
								var img = pattern.test(url) ? '<img class="image" src="'+url+'"">' : '';
								
								var exclamationMark = '!';
								var markdownWithLink = '<span class="button copy-image-url copy-markdown-with-link" data-clipboard-text="[![' + data[i].filename + '](' + url + ')](' + url+ ')" title="点击复制带链接的markdown格式到剪贴板">带链接的markdown</span>';
								var bbcode = '[img]' + url + '[/img]';
								if(data[i].mime!=undefined && data[i].mime.substr(0,5)!=='image'){
									exclamationMark = '';
									markdownWithLink = '';
									bbcode = '[url='+url+']'+data[i].filename+'[/url]';
								}
								tr += `<tr class="history">
											<td><input class="check-item" type="checkbox" value="${data[i].id}"></td>
											<td>${data[i].id}</td>
											<td>
												${img}
												<div class="filename">${data[i].filename}</div>
											</td>
											<td>
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
							tr = tr + `<tr>
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
						console.log(error);
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
				getHistoryList(1, '');
				
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
					let href = window.location.href;
					window.location.href = href.replace(/&history=1/, '');
					return false;
				});
			});
		</script>
	</head>
	<body>
		<div class="container">
			<div class="return">
				<a href="" class="go-back">返回</a>
			</div>
			<table class="upload-history-list">
				<thead>
					<tr class="pagination">
						<td colspan="8"><!-- ajax填充 --></td>
					</tr>
					<tr class="search-box">
						<td colspan="8">
							<form class="search-form">
								<input type="text" class="search-box-input" placeholder="请输入原始文件名/url/时间">
								<span class="button search-box-btn">查询</span>
							</form>
						</td>
					</tr>
					<tr>
						<th><input type="checkbox" class="select-all"></th>
						<th class="file-id">ID</th>
						<th class="filename">原始文件名/图片</th>
						<th class="file-url">url</th>
						<th class="file-size">大小</th>
						<th class="file-mime">mime</th>
						<th class="file-upload-time">上传时间</th>
						<th class="file-operation">操作</th>
					</tr>
				</thead>
				<tbody>
					<tr class="no-history">
						<td colspan="8">暂无上传历史记录</td>
					</tr>
					<!--<tr>
						<td>12323432</td>
						<td>
							<img class="image" src="/static/watermark/watermark.png">
							<div class="filename">screenshot.jpeg</div>
						</td>
						<td>http://img.qhjack.cn/2019/04/28/b5764a1304dc4b5d8f7b952b313fa224.jpg</td>
						<td>250k</td>
						<td>2019-04-29 12:32:32</td>
						<td class="operations">
							<span class="button copy-url">原始url</span>
							<span class="button copy-markdown">markdown</span><br>
							<span class="button copy-markdown-with-link">带链接的markdown</span>
							<span class="button copy-markdown-with-link">BB Code</span>
							<span class="button remove-from-list" title="从历史记录中移除">移除</span>
						</td>
					</tr>
					<tr>
						<td>12323432</td>
						<td>
							<img class="image" src="/static/watermark/watermark.png">
							<div class="filename">screenshot.jpeg</div>
						</td>
						<td>http://img.qhjack.cn/2019/04/28/b5764a1304dc4b5d8f7b952b313fa224.jpg</td>
						<td>250k</td>
						<td>2019-04-29 12:32:32</td>
						<td class="operations">
							<span class="button copy-url">原始url</span>
							<span class="button copy-markdown">markdown</span><br>
							<span class="button copy-markdown-with-link">带链接的markdown</span>
							<span class="button copy-markdown-with-link">BB Code</span>
							<span class="button remove-from-list" title="从历史记录中移除">移除</span>
						</td>
					</tr>
					<tr class="pagination">
						<td colspan="8">
							<span class="">共100页</span>
							<span class="button first cur">首页</span>
							<span class="button prev">上一页</span>
							<span class="button next forbidden">下一页</span>
							<span class="button last">末页</span>
							<input type="number" class="jump-to-page">
							<span class="button last">跳转</span>
						</td>
					</tr>-->
				</tbody>
			</table>
		</div>
	</body>
</html>