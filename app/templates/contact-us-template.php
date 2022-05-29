<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<head>
    <title><?php /** @var ContactUsDTO $dto */
        echo $dto->title; ?></title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT ?>/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT ?>/public/css/bootstrap.min.css">
</head>
<body>
<section class="header">
    <?php include APP_ROOT . "/templates/nav-menu-template.php"; ?>
    <div class="container-fluid center-vh">
        <div class="container card d-flex justify-content-center align-items-center">
            <?php FlashMessageManager::showFlashMessage($dto->pageId); ?>
            <div class="col-3 d-none"><img class="img-fluid" src="<?php echo URL_ROOT ?>/public/img/adminlog.png" alt=""></div>
            <div class="col-9 p-2"><h1 class="h2 text-center">Contact <small>MLA</small></h1>
            </div>
            <hr/>
            <form class="p-2 needs-validation" action="<?php echo URL_ROOT.'/contact' ?>" method="post" novalidate>
                <div class="form-group row">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" required class="form-control" id="exampleInputEmail1"
                           value="" name="email"
                           aria-describedby="emailHelp"
                           placeholder="Enter email">
                    <div class="invalid-feedback">
                        Please provide an email address
                    </div>
                    <small id="emailHelp" class="form-text text-muted">A valid email address will help us to reach
                        you</small>
                </div>
                <div class="form-group row">
                    <label for="subject">Subject</label>
                    <input type="text" required class="form-control" id="subject"
                           value="" placeholder="subject"
                           name="subject">
                    <div class="invalid-feedback">
                        Please provide a subject
                    </div>
                </div>
                <div class="form-group row">
                    <label for="message">Message</label>
                    <textarea type="text" required class="form-control" id="message" placeholder="Message" name="message"></textarea>
                    <div class="invalid-feedback">
                        Please enter your message
                    </div>
                </div>

                <div class="form-group row">
                    <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-envelope"></i> Send us a message</button>
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