<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<head>
    <title><?php /** @var LoginDTO $dto */
        echo $dto->title; ?></title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT ?>/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT ?>/public/css/bootstrap.min.css">
</head>
<body>
<section class="header">
    <?php include APP_ROOT . "/templates/nav-menu-template.php"; ?>
    <div class="container-fluid center-vh">
        <div class="container card d-flex justify-content-center align-items-center">
            <?php /** @var LoginDTO $dto */
            FlashMessageManager::showFlashMessage($dto->pageId);
            ?>
            <div class="col-3"><img class="img-fluid" src="<?php echo URL_ROOT ?>/public/img/<?php echo $dto->pageId == PageId::ADMIN_LOGIN?'adminlog.png' : 'employee.png' ?>" alt=""></div>
            <div class="col-9"><h1 class="h2 text-center">Welcome to <small>MLA EMS <?php echo ($dto->pageId == PageId::ADMIN_LOGIN)? '- ADMIN' : '- EMPLOYEE' ?></small></h1></div>
            <hr/>
            <form class="p-2 needs-validation" action="<?php echo $dto->url ?>" method="post" novalidate>
                <div class="form-group row">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" required class="form-control" id="exampleInputEmail1"
                           value="<?php echo $dto::DUMMY_USER ?>" name="<?php echo $dto::EMAIL ?>"
                           aria-describedby="emailHelp"
                           placeholder="Enter email">
                    <div class="invalid-feedback">
                        A valid email address should be firstname.lastname@ems.com
                    </div>
                    <small id="emailHelp" class="form-text text-muted">Enter your company email address</small>
                </div>
                <div class="form-group row">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" required class="form-control" id="exampleInputPassword1"
                           value="<?php echo $dto::DUMMY_PASSWORD ?>" placeholder="Password"
                           name="<?php echo $dto::PASSWORD ?>">
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
<script src="<?php echo URL_ROOT ?>/public/js/custom.js"></script>

</body>
</html>