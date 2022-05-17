<?php
?>
<!Doctype html>
<html>
<head>
	<title> <?php echo $data['title'] ?> </title>
	<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/public/css/style.css">
</head>
<body>
	<header>
		<div class="main">
			<div class="logo">
				<img src="<?php echo URLROOT ?>/public/img/logo.png">
			</div>
			<ul>
			<li class="active"><a href="#">Home</a></li>
			<li><a href="alogin.html">Admin Login</a></li>
			<li><a href="#">Employee Login</a></li>
			<li><a href="#">Contact</a></li>
			</ul>
			</div>
		
			<div class="title">
			<h1> <?php echo $data['message'] ?> </h1>
			</div>

			<div class="button">
				<a href="#" class="btn">ADMIN LOGIN</a>
				<a href="#" class="btn">EMPLOYEE LOGIN</a>
			</div>
			</header>
</body>

</html>