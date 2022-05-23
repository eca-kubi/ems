<?php
/** @var PageDTO $dto */
?>
<div class="container font-weight-bold fixed-top bg-secondary">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#"><img class="img-fluid" src="<?php echo URL_ROOT ?>/public/img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="<?php echo $dto->pageId->value == PageIdsDTO::HOME ? 'active' : ''; ?> nav-item"><a class="nav-link"
                            href="<?php echo URL_ROOT ?>"><i class="fad fa-home-alt"></i> Home</a></li>
                <li class="<?php echo $dto->pageId->value == PageIdsDTO::CONTACT ? 'active' : ''; ?> nav-item"><a class="nav-link"
                            href="<?php echo URL_ROOT ?>/contact"><i class="fad fa-phone-alt"></i> Contact</a></li>
                <li class="<?php echo $dto->pageId->value == PageIdsDTO::ADMIN_LOGIN ? 'active' : ''; ?> nav-item"><a class="nav-link"
                            href="<?php echo URL_ROOT ?>/admin/login"><i class="fad fa-chart-pie-alt"></i> Admin Login</a></li>
                <li class="<?php echo $dto->pageId->value == PageIdsDTO::EMPLOYEE_LOGIN ? 'active' : ''; ?> nav-item"><a class="nav-link"
                            href="<?php echo URL_ROOT ?>/employees/login"><i class="fad fa-login"></i> Employee Login</a></li>
            </ul>
        </div>
    </nav>
</div>
