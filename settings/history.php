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
			.pagination .jump-to-page {
				width: 50px;
				height: 28px;
				line-height: 28px;
				padding: 2px;
				text-align: center;
				font-size: 14px;
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
		</style>
		<script>
			//获取一页历史记录
			function getHistoryList (page){
				$.ajax({
					type: 'get',
					url: './settings/dispatch.php',
					data: {
						class: 'HistoryController',
						func: 'get-list',
						page: page,
					},
					dataType: 'json',
					success: function (response){
						if(response.code == 0){
							var data = response.data;
							if(data.length == 0){
								return false;
							}
							var pagination =
								`<tr class="pagination">
									<td colspan="6">
										${response.pagination}
									</td>
								</tr>`;
							var tr = '';
							
							for(let i=0; i<data.length; i++){
								var pattern = /http[s]{0,1}.*?\.jpg|\.jpeg|\.png|.gif|.webp|.bmp|\/preview/;
								var img = pattern.test(data[i].url) ? '<img class="image" src="'+data[i].url+'"">' : '';
								tr += `<tr class="history">
											<td>${data[i].id}</td>
											<td>
											${img}
											<div class="filename">${data[i].filename}</div>
											</td>
											<td>${data[i].url}</td>
											<td>${data[i].size}</td>
											<td>${data[i].created_at}</td>
											<td class="operations">
											<span class="button copy-image-url copy-url" data-clipboard-text='${data[i].url}' title="点击复制原始url到剪贴板">原始url</span>
											<span class="button copy-image-url copy-markdown" data-clipboard-text='![${data[i].filename}](${data[i].url})' title="点击复制markdown格式url到剪贴板">markdown</span><br>
											<span class="button copy-image-url copy-markdown-with-link" data-clipboard-text='[![${data[i].filename}](${data[i].url})](${data[i].url})' title="点击复制带链接的markdown格式到剪贴板">带链接的markdown</span>
											<span class="button copy-image-url copy-markdown-with-link" data-clipboard-text='[img]${data[i].url}[/img]' title="点击复制BBC格式到剪贴板">BB Code</span>
											<span class="button remove-from-list" data-id="${data[i].id}" title="从历史记录中移除">移除</span>
										</td>
									</tr>`;
							}
							tr = pagination + tr + pagination;
							$('.upload-history-list tbody').html(tr);
						}
					},
					error: function (error){
						console.log(error);
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
					var id = $(this).data('id');
					var $this = $(this);
					$.ajax({
						type: 'get',
						url: './settings/dispatch.php',
						data: {
							class: 'HistoryController',
							func: 'remove-item',
							id: id,
						},
						dataType: 'json',
						success: function (response){
							console.log(response.data);
							if (response.code == 0){
								$this.parents('tr').hide();
							}else{
								alert(response.msg);
							}
						}
					});
					$(this).parents('tr').hide();
				});
				
				//进入页面时先获取一页
				getHistoryList(1);
				
				//点击上一页、下一页、首页、末页、跳转到第n页时，获取该页数据
				$('.upload-history-list').on('click', '.pagination .button', function (){
					if($(this).hasClass('forbidden')){
						return false;
					}
					var page = 1;
					if($(this).hasClass('jump-to-page-button')){
						page = $('.jump-to-page').val();
						var pageCount = $(this).data('pageCount');
						if(page > pageCount){
							$('.jump-to-page').val(pageCount);
						}
					}else{
						page = $(this).data('page');
					}
					getHistoryList(page);
				});
			});
		</script>
	</head>
	<body>
		<div class="container">
			<div class="return">
				<a href="/">返回</a>
			</div>
			<table class="upload-history-list">
				<thead>
					<th class="file-id">ID</th>
					<th class="filename">原始文件名/图片</th>
					<th class="file-url">url</th>
					<th class="file-size">大小</th>
					<th class="file-upload-time">上传时间</th>
					<th class="file-operation">操作</th>
				</thead>
				<tbody>
					<tr class="no-history">
						<td colspan="6">暂无上传历史记录</td>
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
						<td colspan="6">
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