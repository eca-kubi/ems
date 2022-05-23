<?php
/** @var PageDTO $dto */
?>
<div class="container font-weight-bold bg-secondary fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#"><img class="bimg-fluid" src="<?php echo URL_ROOT ?>/public/img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="<?php echo $dto->pageId->value == PageIdsDTO::HOME ? 'active' : ''; ?> nav-item">
                    <a class="nav-link"
                            href="<?php echo URL_ROOT ?>"><i class="fad fa-home-alt"></i> Home</a></li>
                <li class="<?php echo $dto->pageId->value == PageIdsDTO::CONTACT ? 'active' : ''; ?> nav-item"><a class="nav-link"
                            href="<?php echo URL_ROOT ?>/contact"><i class="fad fa-phone-alt"></i> Contact</a></li>
                <li class="<?php echo $dto->pageId->value == PageIdsDTO::ADMIN_DASHBOARD ? 'active' : ''; ?> nav-item"><a class="nav-link"
                            href="<?php echo URLs::ADMIN_DASHBOARD ?>"><i class="fad fa-chart-pie-alt"></i> Admin Dashboard</a></li>
                <li class="<?php echo $dto->pageId->value == PageIdsDTO::LOGOUT ? 'active' : ''; ?> nav-item"><i class="fa fa-logout"></i><a class="nav-link"
                            href="<?php echo URL_ROOT ?>/logout"> Logout</a></li>

                <!--<li><i class="fad fa-chart-pie-alt"></i><a href="#">Dashboard</a></li>
                <li><i class="fas fa-layer-plus"></i><a href="#">Add Employee</a></li>
                <li><i class="fad fa-user-edit"></i><a href="#">Edit Employee Details</a></li>
                <li class="active"><i class="fad fa-street-view"></i><a href="#">Leave Requests</a></li>
                <li><i class="fad fa-bullhorn"></i><a href="#">Announcements</a></li>
                <li><i class="fad fa-sign-out"></i><a href="#">Logout</a></li>-->
            </ul>
        </div>
    </nav>
</div>
