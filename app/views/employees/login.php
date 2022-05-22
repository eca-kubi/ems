<?php
// Employee::Login
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

try {
    /** @var array $data */
    $dto = new EmployeeLoginDTO($data);
} catch (UnknownProperties $e) {
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $dto->title; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT ?>/public/css/style.css">
</head>
<body>
<header>
    <div class="main">
        <div class="logo">
            <img src="<?php echo URL_ROOT ?>/public/img/logo.png" alt="">
        </div>
        <!---->
        <?php include APP_ROOT. "/templates/nav-menu-template.php"; ?>
        <!---->
    </div>
    <div class="wrapper">
        <div class="first">
            <div class="alogo">
                <img src="<?php echo URL_ROOT ?>/public/img/adminlog.png" height="422" alt="">
                <h3 align="center">Welcome to <br><small>MLA EMS</small></h3>
            </div>
        </div>
        <form action="<?php echo URL_ROOT ?>/employee/login" method="post">
            <div class="container">
                <input id="email" type="text" name="enter your email" placeholder="Enter your mail">
                <input id="password" type="password" name="enter your password" placeholder="Password" autocomplete="">
                <button type="submit">Log In</button>
            </div>
        </form>
    </div>
</header>
</body>
</html>
