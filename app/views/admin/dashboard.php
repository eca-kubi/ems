<?php
// Admin::dashboard
/** @var array $data */
$dto = new AdminDashboardDTO(...$data);
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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
</head>
<body>
<section class="">
    <?php include APP_ROOT . "/templates/nav-menu-admin-template.php"; ?>
    <div class="container-fluid " >

    </div>

</section>
<script src="<?php echo URL_ROOT ?>/public/js/jquery-3.3.1.slim.min.js"></script>
<script src="<?php echo URL_ROOT ?>/public/js/popper.min.js"></script>
<script src="<?php echo URL_ROOT ?>/public/js/bootstrap.bundle.min.js"></script>
</body>
</html>
