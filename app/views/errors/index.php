<?php
// Error::index
/** @var array $data */
$dto = new ErrorsDTO(...$data);
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<head>
    <title><?php
        echo $dto->title; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT ?>/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT ?>/public/css/bootstrap.min.css">
</head>
<body>
<section class="header">
    <?php include APP_ROOT . "/templates/nav-menu-template.php"; ?>
    <div class="container-fluid center-vh-t-50" style="top: 30%">
        <div class="header-error container card jumbotron d-flex justify-content-center align-items-center"
             style="height: 69vh; background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo URL_ROOT. '/public/img/'.$dto->title . '.jpg' ?>)">
            <div class="h1 text-white">
                <?php echo $dto->message ?>
            </div>
            <div class="d-flex m-3 pt-3">
                <a class="mr-3 btn btn-lg btn-info"  href="<?php echo $dto::ADMIN_LOGIN_URL  ?>">ADMIN LOGIN</a>
                <a class="mr-3 btn btn-lg btn-success" href="<?php echo $dto::EMPLOYEE_LOGIN_URL ?>">EMPLOYEE LOGIN</a>
            </div>
        </div>
    </div>

</section>
<script src="<?php echo URL_ROOT ?>/public/js/jquery-3.3.1.slim.min.js"></script>
<script src="<?php echo URL_ROOT ?>/public/js/popper.min.js"></script>
<script src="<?php echo URL_ROOT ?>/public/js/bootstrap.bundle.min.js"></script>
</body>
</html>