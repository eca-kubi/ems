<?php
// Error::index
/** @var array $data */

use Spatie\DataTransferObject\Exceptions\UnknownProperties;

try {
    $dto = new ErrorsDTO($data);
} catch (UnknownProperties $e) {
}
?>
<!Doctype html>
<html>
<head>
	<title> <?php echo $dto->title ?> </title>
	<link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT ?>/public/css/style.css">
</head>
<body>
	<header>
		<div class="main">
			<div class="logo">
				<img src="<?php echo URL_ROOT ?>/public/img/logo.png" alt="">
			</div>
			<ul>
                <!---->
                <?php include APP_ROOT. "/templates/nav-menu-template.php"; ?>
                <!---->
			</ul>
			</div>
		
			<div class="title">
			<h1> <?php echo $dto->message; ?> </h1>
			</div>

			<div class="button">
				<a href="<?php echo URL_ROOT ?>/admin/login" class="btn">ADMIN LOGIN</a>
				<a href="<?php echo URL_ROOT ?>/employee/login" class="btn">EMPLOYEE LOGIN</a>
			</div>
			</header>
</body>

</html>