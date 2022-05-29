<?php
// Home::index
/** @var array $data */
$dto = new HomeDTO(...$data);
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<head>
    <title><?php
        echo $dto->title; ?></title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT ?>/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT ?>/public/css/bootstrap.min.css">
</head>
<body>
<section class="header">
    <?php include APP_ROOT . "/templates/nav-menu-template.php"; ?>
    <div class="container-fluid center-vh-t-50" style="top: 22%">
        <div class=" container card jumbotron d-flex justify-content-center align-items-center"
             style="height: 69vh; background-size: cover; background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo URL_ROOT. '/public/img/'.$dto->pageId->value . '-banner.jpg' ?>)">
          <?php FlashMessageManager::showFlashMessage(PageId::HOME); ?>
            <div class="h1 text-white font-weight-bold">
                <?php echo SITE_NAME ?>
            </div>
            <div class="d-flex m-3 pt-3">
                <a class="mr-3 btn btn-lg btn-info"  href="<?php echo URLs::ADMIN_LOGIN  ?>">ADMIN LOGIN</a>
                <a class="mr-3 btn btn-lg btn-success" href="<?php echo URLs::EMPLOYEE_LOGIN ?>">EMPLOYEE LOGIN</a>
            </div>
        </div>
    </div>

</section>
<script src="<?php echo URL_ROOT ?>/public/js/jquery-3.3.1.slim.min.js"></script>
<script src="<?php echo URL_ROOT ?>/public/js/popper.min.js"></script>
<script src="<?php echo URL_ROOT ?>/public/js/bootstrap.bundle.min.js"></script>
</body>
</html>