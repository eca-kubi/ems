<?php
// Admin::Login
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

try {
    /** @var array $data */
    $dto = new AdminLoginDTO(...$data);
} catch (UnknownProperties $e) {
}
?>

<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<head>
    <title><?php echo $dto->title; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT ?>/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT ?>/public/css/bootstrap.min.css">
</head>
<body>
<section class="header">
    <?php include APP_ROOT . "/templates/nav-menu-template.php"; ?>

    <div class="container-fluid welcome-banner">
        <div class="container card d-flex justify-content-center align-items-center">
            <?php FlashMessageManager::showFlashMessage(PageId::ADMIN_LOGIN);
            ?>
            <div class="col-3"><img class="img-fluid" src="<?php echo URL_ROOT ?>/public/img/adminlog.png" alt=""></div>
            <div class="col-9"><h1 class="h2 text-center">Welcome to <small>MLA EMS</small></h1></div>
            <hr>
            <form class="p-2 needs-validation" action="<?php echo URL_ROOT ?>/admin/login" method="post" novalidate>
                <div class="form-group row">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter email">
                    <div class="invalid-feedback">
                        A valid email address should be firstname.lastname@ems.com
                    </div>
                    <small id="emailHelp" class="form-text text-muted">Enter your company email address</small>
                </div>
                <div class="form-group row">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" required class="form-control" id="exampleInputPassword1" placeholder="Password">
                    <div class="invalid-feedback">
                        A password is required to login
                    </div>
                </div>
                <div class="form-check d-none">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember sign in</label>
                </div>
                <div class="form-group row">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
<script src="<?php echo URL_ROOT ?>/public/js/jquery-3.3.1.slim.min.js"></script>
<script src="<?php echo URL_ROOT ?>/public/js/popper.min.js"></script>
<script src="<?php echo URL_ROOT ?>/public/js/bootstrap.bundle.min.js"></script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</body>
</html>
