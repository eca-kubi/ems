<?php
// Home::Index
declare(strict_types=1);

/** @var array $data */

use Spatie\DataTransferObject\Exceptions\UnknownProperties;

try {
    $dto = new HomeDTO($data);
} catch (UnknownProperties $e) {
    die('DTO error @ Home::index');
}
?>

<!Doctype html>
<html>
<head>
    <title> <?php
        echo $dto->title; ?> </title>
    <link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT ?>/public/css/style.css">
</head>
<body>
<header>
    <div class="main">
        <div class="logo">
            <img src="<?php echo URL_ROOT ?>/public/img/logo.png">
        </div>
        <!--Nav Menu-->
        <?php include APP_ROOT . "/templates/nav-menu-template.php"?>
        <!--Nav Menu-->
    </div>
    <div class="title">
        <h1><?php echo SITE_NAME; ?></h1>
    </div>

    <div class="button">
        <a href="<?php echo URL_ROOT ?>/admin/login" class="btn">ADMIN LOGIN</a>
        <a href="<?php echo URL_ROOT ?>/employee/login" class="btn">EMPLOYEE LOGIN</a>
    </div>
</header>
</body>

</html>