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
		<script src="/static/js/history.js"></script>
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
			.container .upload-history-list .filename {
				width: 15%;
			}
			.container .upload-history-list .image {
				width: 100px;
			}
			.container .upload-history-list .file-url {
				width: 30%;
			}
			.container .upload-history-list .file-size {
				width: 8%;
			}
			.container .upload-history-list .file-mime {
				width: 15%;
			}
			.container .upload-history-list .file-upload-time {
				width: 12%;
			}
			
			.container .upload-history-list .operations {
				width: 15%;
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
			.container .upload-history-list .remove-from-list,
			.container .upload-history-list .delete-all {
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
			.img-url-td {
				position: relative;
			}
			.deleting-mask {
				display: none;
				width: 100%;
				height: 100%;
				background: rgba(0, 0, 0, 0.8);
				position: absolute;
				top: 0;
				left: 0;
			}
			.deleting-text {
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				color: #e6d9d9;
				/*background: #4E82A8;*/
			}
		</style>
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