<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Title</title>
		
		<link href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="/static/css/style.css" rel="stylesheet">
		
		<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdn.bootcss.com/popper.js/1.14.7/esm/popper-utils.js"></script>
		<script src="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/js/bootstrap.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col col-lg-11">sdfsdsfs</div>
			</div>
			<!-- 这是网页版文件提交格式（当然你也可以用ajax），你可以自己美化该界面 -->
			<form method="post" action="index.php" enctype="multipart/form-data">
				<input type="file" name="file[]"><br>
				<input type="file" name="file[]"><br>
				<input type="submit" name="submit" value="submit">
			</form>
			<script>
				var a=5;
				var b=6;
				if(a++ >= b){
					a++;
				}
				a++;
				console.log(a);
			</script>
		</div>
	</body>
</html>