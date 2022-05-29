<?php
// Admin::dashboard

/** @var array $data */

use Carbon\Carbon;
use Carbon\CarbonImmutable;

$dto = new AdminDashboardDTO(...$data);
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<head>
    <title><?php
        echo $dto->title; ?></title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT ?>/public/css/dataTables.bs.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT ?>/public/css/responsive-boostrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT ?>/public/css/buttons.bs.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT ?>/public/css/adminlte.min.css">

</head>
<body>

<div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo URL_ROOT ?>" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo URLs::CONTACT ?>" class="nav-link">Contact</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">

            <li class="nav-item d-none">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block" style="display: none;">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                   aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <li class=" d-none nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
                    <a href="#" class="dropdown-item">

                        <div class="media">
                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">

                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>

                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">

                        <div class="media">
                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>

                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">

                        <div class="media">
                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>

                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> <?php echo count($dto->employeeLeaves) ?> leave requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>

            <li class="dropdown user user-menu p-2">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src=""
                         class="user-image img-size-32 img-fluid img-circle d-inline-block"
                         avatar="<?php echo $dto->currentUser->getFullName() ?>">
                    <span class="hidden-xs text-capitalize d-none">Eric Clinton Appiah-Kubi</span>
                </a>
                <ul class="dropdown-menu m-0 p-1 dropdown-menu-right" style="min-width: 19rem">
                    <li class="user-header d-none"></li>
                    <li class="user-body-">
                        <div class="col p-2">
                            <img src=""
                                 class="user-image img-size-32 img-fluid img-circle d-inline-block"
                                 avatar="<?php echo $dto->currentUser->getFullName() ?>">
                            <p class="text-bold mb-1">
                                <?php echo $dto->currentUser->getFullName() ?> </p>
                            <p class="text-bold mb-1 text-sm">
                                <?php echo $dto->employeeProfile->getPosition() ?> </p>
                            <p class="text-nowrap text-muted d-none">
                                Member since ...
                            </p>
                        </div>
                    </li>
                    <li class="row px-2">
                        <div class="pull-left col">
                            <a href="<?php echo URL_ROOT ?>/employees/profile/<?php echo $dto->currentUser->getId() ?>"
                               class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                            <a href="<?php echo URL_ROOT ?>/employees/logout" class="btn btn-default btn-flat">Sign
                                out</a>
                        </div>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>

            <li class="nav-item d-none">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>


    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <a href="<?php echo URL_ROOT ?>" class="brand-link">
            <img src="<?php echo URL_ROOT ?>/public/img/logo.png" alt="" class="bg-white brand-image elevation-3">
            <span class="brand-text font-weight-light">EMS</span>
        </a>

        <div class="sidebar">

            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="" class="img-circle elevation-2" alt=""
                         avatar="<?php echo $dto->currentUser->getFirstName() . ' ' . $dto->currentUser->getLastName() ?>">
                </div>
                <div class="info">
                    <a href="#"
                       class="d-block text-capitalize"><?php echo $dto->currentUser->getFirstName() . ' ' . $dto->currentUser->getLastName() ?></a>
                </div>
            </div>

            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                           aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
                <div class="sidebar-search-results">
                    <div class="list-group"><a href="#" class="list-group-item">
                            <div class="search-title"><strong class="text-light"></strong>N<strong
                                        class="text-light"></strong>o<strong class="text-light"></strong> <strong
                                        class="text-light"></strong>e<strong class="text-light"></strong>l<strong
                                        class="text-light"></strong>e<strong class="text-light"></strong>m<strong
                                        class="text-light"></strong>e<strong class="text-light"></strong>n<strong
                                        class="text-light"></strong>t<strong class="text-light"></strong> <strong
                                        class="text-light"></strong>f<strong class="text-light"></strong>o<strong
                                        class="text-light"></strong>u<strong class="text-light"></strong>n<strong
                                        class="text-light"></strong>d<strong class="text-light"></strong>!<strong
                                        class="text-light"></strong></div>
                            <div class="search-path"></div>
                        </a></div>
                </div>
            </div>

            <nav class="invisible mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">

                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="./index.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./index2.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./index3.html" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v3</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Widgets
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Layout Options
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">6</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/layout/top-nav.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Top Navigation</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Top Navigation + Sidebar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/boxed.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Boxed</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Fixed Sidebar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Fixed Sidebar <small>+ Custom Area</small></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Fixed Navbar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/fixed-footer.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Fixed Footer</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Collapsed Sidebar</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Charts
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/charts/chartjs.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>ChartJS</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/charts/flot.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Flot</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/charts/inline.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Inline</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/charts/uplot.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>uPlot</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tree"></i>
                            <p>
                                UI Elements
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/UI/general.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>General</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/UI/icons.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Icons</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/UI/buttons.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Buttons</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/UI/sliders.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sliders</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/UI/modals.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Modals &amp; Alerts</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/UI/navbar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Navbar &amp; Tabs</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/UI/timeline.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Timeline</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/UI/ribbons.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ribbons</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Forms
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/forms/general.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>General Elements</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/advanced.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Advanced Elements</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/editors.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Editors</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/validation.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Validation</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Tables
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/tables/simple.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Simple Tables</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/tables/data.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>DataTables</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/tables/jsgrid.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>jsGrid</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header">EXAMPLES</li>
                    <li class="nav-item">
                        <a href="pages/calendar.html" class="nav-link">
                            <i class="nav-icon fas fa-calendar-alt"></i>
                            <p>
                                Calendar
                                <span class="badge badge-info right">2</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/gallery.html" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Gallery
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/kanban.html" class="nav-link">
                            <i class="nav-icon fas fa-columns"></i>
                            <p>
                                Kanban Board
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-envelope"></i>
                            <p>
                                Mailbox
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/mailbox/mailbox.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Inbox</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/mailbox/compose.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Compose</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/mailbox/read-mail.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Read</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Pages
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/examples/invoice.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Invoice</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/profile.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Profile</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/e-commerce.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>E-commerce</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/projects.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Projects</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/project-add.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Project Add</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/project-edit.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Project Edit</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/project-detail.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Project Detail</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/contacts.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Contacts</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/faq.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>FAQ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/contact-us.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Contact us</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-plus-square"></i>
                            <p>
                                Extras
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Login &amp; Register v1
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="pages/examples/login.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Login v1</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/examples/register.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Register v1</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/examples/forgot-password.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Forgot Password v1</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/examples/recover-password.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Recover Password v1</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Login &amp; Register v2
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="pages/examples/login-v2.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Login v2</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/examples/register-v2.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Register v2</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/examples/forgot-password-v2.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Forgot Password v2</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/examples/recover-password-v2.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Recover Password v2</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/lockscreen.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Lockscreen</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Legacy User Menu</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/language-menu.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Language Menu</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/404.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Error 404</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/500.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Error 500</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/pace.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Pace</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/blank.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Blank Page</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="starter.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Starter Page</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-search"></i>
                            <p>
                                Search
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/search/simple.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Simple Search</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/search/enhanced.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Enhanced</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header">MISCELLANEOUS</li>
                    <li class="nav-item">
                        <a href="iframe.html" class="nav-link">
                            <i class="nav-icon fas fa-ellipsis-h"></i>
                            <p>Tabbed IFrame Plugin</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://adminlte.io/docs/3.1/" class="nav-link">
                            <i class="nav-icon fas fa-file"></i>
                            <p>Documentation</p>
                        </a>
                    </li>
                    <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>Level 1</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                                Level 1
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Level 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Level 2
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>Level 3</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>Level 3</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>Level 3</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Level 2</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>Level 1</p>
                        </a>
                    </li>
                    <li class="nav-header">LABELS</li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-circle text-danger"></i>
                            <p class="text">Important</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p>Warning</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-circle text-info"></i>
                            <p>Informational</p>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>

    </aside>

    <div class="content-wrapper" style="min-height: 1302.12px;">

        <div class="content-header">
            <div class="container-fluid">
                <row class="mb-4">
                    <?php FlashMessageManager::showFlashMessage($dto->pageId); ?>
                </row>
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Admin Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo URL_ROOT ?>">Home</a></li>
                            <li class="breadcrumb-item active">Admin Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Employees</h3>
                            </div>

                            <div class="card-body">
                                <table id="employees" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Department</th>
                                        <th>Position</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    /**
                                     * @var Employee $employee
                                     */
                                    foreach ($dto->employees as $employee) { ?>
                                        <tr>
                                            <td><?php echo $employee->getUser()->getFullName() ?></td>
                                            <td><?php echo $employee->getUser()->getEmail() ?></td>
                                            <td><?php echo $employee->getUser()->getPhone() ?></td>
                                            <td><?php echo $employee->getDepartment()->getName() ?></td>
                                            <td><?php echo $employee->getPosition() ?></td>
                                            <td>
                                                <input data-field-name="id"
                                                       data-field-value="<?php echo $employee->getId() ?>"
                                                       type="hidden"></input>
                                                <input data-field-name="email"
                                                       data-field-value="<?php echo $employee->getUser()->getEmail() ?>"
                                                       type="hidden"></input>
                                                <input data-field-name="firstName"
                                                       data-field-value="<?php echo $employee->getUser()->getFirstName() ?>"
                                                       type="hidden"></input>
                                                <input data-field-name="born"
                                                       data-field-value="<?php echo $employee->getBorn()->format('Y-m-d') ?>"
                                                       type="hidden"></input>
                                                <input data-field-name="nationality"
                                                       data-field-value="<?php echo $employee->getNationality() ?>"
                                                       type="hidden"></input>
                                                <input data-field-name="lastName"
                                                       data-field-value="<?php echo $employee->getUser()->getLastName() ?>"
                                                       type="hidden"></input>
                                                <input data-field-name="department"
                                                       data-field-value="<?php echo $employee->getDepartment()->getId() ?>"
                                                       type="hidden"></input>
                                                <input data-field-name="position"
                                                       data-field-value="<?php echo $employee->getPosition() ?>"
                                                       type="hidden"></input>
                                                <input data-field-name="telephone"
                                                       data-field-value="<?php echo $employee->getUser()->getTelephone() ?>"
                                                       type="hidden"></input>
                                                <input data-field-name="gender"
                                                       data-selected="<?php echo $employee->getGender() ?>"
                                                       data-field-value="<?php echo $employee->getGender() ?>"
                                                       type="hidden"></input>
                                                <input data-field-name="userType"
                                                       data-selected="<?php echo $employee->getUser()->getUserType() ?>"
                                                       data-field-value="<?php echo $employee->getUser()->getUserType() ?>"
                                                       type="hidden"
                                                       data-checked="<?php echo $employee->getUser()->getUserType() == UserType::ADMIN->value ? 'checked' : '' ?>"></input>
                                                <button data-toggle="modal"
                                                        data-id="<?php echo $employee->getUser()->getId() ?>"
                                                        data-target="#editEmployeeModal" class="btn btn-sm btn-primary"
                                                        title="Edit"><i class="fa fa-edit"></i></button>
                                                <button data-toggle="modal"
                                                        data-id="<?php echo $employee->getUser()->getId() ?>"
                                                        data-target="#deleteEmployeeModal" class="btn btn-sm btn-danger"
                                                        title="Disable account"><i class="fa fa-ban"></i></button>
                                            </td>
                                        </tr>
                                    <?php }
                                    ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Department</th>
                                        <th>Position</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Leave Requests</h3>
                            </div>

                            <div class="card-body">
                                <table id="employeeLeaves" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Employee</th>
                                        <th>Start of Leave</th>
                                        <th>End of Leave</th>
                                        <th>Submission Date</th>
                                        <th>Purpose</th>
                                        <th>Leave Status</th>
                                        <th>Response Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    /**
                                     * @var EmployeeLeave $employeeLeave
                                     */
                                    foreach ($dto->employeeLeaves as $employeeLeave) { ?>
                                        <tr>
                                            <td><?php echo $employeeLeave->getEmployee()->getUser()->getFullName() ?></td>
                                            <td><?php echo $employeeLeave->getStartOfLeave()?->format('Y-m-d') ?></td>
                                            <td><?php echo $employeeLeave->getEndOfLeave()?->format('Y-m-d') ?></td>
                                            <td><?php echo $employeeLeave->getSubmissionDate()?->format('Y-m-d') ?></td>
                                            <td><?php echo $employeeLeave->getLeavePurpose() ?></td>
                                            <td><?php echo $employeeLeave->getLeaveStatus() ?></td>
                                            <td><?php echo $employeeLeave->getResponseDate()?->format('Y-m-d') ?></td>
                                            <td>
                                                <input data-field-name="id"
                                                       data-field-value="<?php echo $employeeLeave->getId() ?>"
                                                       type="hidden">
                                                <input data-field-name="startOfLeave"
                                                       data-field-value="<?php echo $employeeLeave->getStartOfLeave()?->format('Y-m-d') ?>"
                                                       type="hidden">
                                                <input data-field-name="endOfLeave"
                                                       data-field-value="<?php echo $employeeLeave->getEndOfLeave()?->format('Y-m-d') ?>"
                                                       type="hidden">
                                                <input data-field-name="leavePurpose"
                                                       data-field-value="<?php echo $employeeLeave->getLeavePurpose() ?>"
                                                       type="hidden">
                                                <input data-field-name="submissionDate"
                                                       data-field-value="<?php echo $employeeLeave->getSubmissionDate()?->format('Y-m-d') ?>"
                                                       type="hidden">
                                                <input data-field-name="responseDate"
                                                       data-field-value="<?php echo $employeeLeave->getResponseDate()?->format('Y-m-d') ?>"
                                                       type="hidden">
                                                <input data-field-name="leaveStatus"
                                                       data-field-value="<?php echo $employeeLeave->getLeaveStatus() ?>"
                                                       type="hidden">
                                                <button data-toggle="modal" data-target="#editEmployeeLeaveModal"
                                                        class="btn btn-sm btn-primary" title="Edit"><i
                                                            class="fa fa-user-cog"></i></button>
                                                <button data-toggle="modal" data-target="#deleteEmployeeLeaveModal"
                                                        class="d-none btn btn-sm btn-danger" title="Delete"><i
                                                            class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    <?php }
                                    ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Employee</th>
                                        <th>Start of Leave</th>
                                        <th>End of Leave</th>
                                        <th>Submission Date</th>
                                        <th>Purpose</th>
                                        <th>Leave Status</th>
                                        <th>Response Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>


    <aside class="control-sidebar control-sidebar-dark" style="display: none;">

        <div class="p-3 control-sidebar-content" style=""><h5>Customize AdminLTE</h5>
            <hr class="mb-2">
            <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Dark Mode</span></div>
            <h6>Header Options</h6>
            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div>
            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Dropdown Legacy Offset</span></div>
            <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>No border</span></div>
            <h6>Sidebar Options</h6>
            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Collapsed</span></div>
            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div>
            <div class="mb-1"><input type="checkbox" value="1" checked="checked" class="mr-1"><span>Sidebar Mini</span>
            </div>
            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini MD</span></div>
            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini XS</span></div>
            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Flat Style</span></div>
            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Legacy Style</span></div>
            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Compact</span></div>
            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Indent</span></div>
            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Hide on Collapse</span>
            </div>
            <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Disable Hover/Focus Auto-Expand</span>
            </div>
            <h6>Footer Options</h6>
            <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div>
            <h6>Small Text Options</h6>
            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Body</span></div>
            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Navbar</span></div>
            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Brand</span></div>
            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Nav</span></div>
            <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Footer</span></div>
            <h6>Navbar Variants</h6>
            <div class="d-flex"><select class="custom-select mb-3 text-light border-0 bg-white">
                    <option class="bg-primary">Primary</option>
                    <option class="bg-secondary">Secondary</option>
                    <option class="bg-info">Info</option>
                    <option class="bg-success">Success</option>
                    <option class="bg-danger">Danger</option>
                    <option class="bg-indigo">Indigo</option>
                    <option class="bg-purple">Purple</option>
                    <option class="bg-pink">Pink</option>
                    <option class="bg-navy">Navy</option>
                    <option class="bg-lightblue">Lightblue</option>
                    <option class="bg-teal">Teal</option>
                    <option class="bg-cyan">Cyan</option>
                    <option class="bg-dark">Dark</option>
                    <option class="bg-gray-dark">Gray dark</option>
                    <option class="bg-gray">Gray</option>
                    <option class="bg-light">Light</option>
                    <option class="bg-warning">Warning</option>
                    <option class="bg-white">White</option>
                    <option class="bg-orange">Orange</option>
                </select></div>
            <h6>Accent Color Variants</h6>
            <div class="d-flex"></div>
            <select class="custom-select mb-3 border-0">
                <option>None Selected</option>
                <option class="bg-primary">Primary</option>
                <option class="bg-warning">Warning</option>
                <option class="bg-info">Info</option>
                <option class="bg-danger">Danger</option>
                <option class="bg-success">Success</option>
                <option class="bg-indigo">Indigo</option>
                <option class="bg-lightblue">Lightblue</option>
                <option class="bg-navy">Navy</option>
                <option class="bg-purple">Purple</option>
                <option class="bg-fuchsia">Fuchsia</option>
                <option class="bg-pink">Pink</option>
                <option class="bg-maroon">Maroon</option>
                <option class="bg-orange">Orange</option>
                <option class="bg-lime">Lime</option>
                <option class="bg-teal">Teal</option>
                <option class="bg-olive">Olive</option>
            </select><h6>Dark Sidebar Variants</h6>
            <div class="d-flex"></div>
            <select class="custom-select mb-3 text-light border-0 bg-primary">
                <option>None Selected</option>
                <option class="bg-primary">Primary</option>
                <option class="bg-warning">Warning</option>
                <option class="bg-info">Info</option>
                <option class="bg-danger">Danger</option>
                <option class="bg-success">Success</option>
                <option class="bg-indigo">Indigo</option>
                <option class="bg-lightblue">Lightblue</option>
                <option class="bg-navy">Navy</option>
                <option class="bg-purple">Purple</option>
                <option class="bg-fuchsia">Fuchsia</option>
                <option class="bg-pink">Pink</option>
                <option class="bg-maroon">Maroon</option>
                <option class="bg-orange">Orange</option>
                <option class="bg-lime">Lime</option>
                <option class="bg-teal">Teal</option>
                <option class="bg-olive">Olive</option>
            </select><h6>Light Sidebar Variants</h6>
            <div class="d-flex"></div>
            <select class="custom-select mb-3 border-0">
                <option>None Selected</option>
                <option class="bg-primary">Primary</option>
                <option class="bg-warning">Warning</option>
                <option class="bg-info">Info</option>
                <option class="bg-danger">Danger</option>
                <option class="bg-success">Success</option>
                <option class="bg-indigo">Indigo</option>
                <option class="bg-lightblue">Lightblue</option>
                <option class="bg-navy">Navy</option>
                <option class="bg-purple">Purple</option>
                <option class="bg-fuchsia">Fuchsia</option>
                <option class="bg-pink">Pink</option>
                <option class="bg-maroon">Maroon</option>
                <option class="bg-orange">Orange</option>
                <option class="bg-lime">Lime</option>
                <option class="bg-teal">Teal</option>
                <option class="bg-olive">Olive</option>
            </select><h6>Brand Logo Variants</h6>
            <div class="d-flex"></div>
            <select class="custom-select mb-3 border-0">
                <option>None Selected</option>
                <option class="bg-primary">Primary</option>
                <option class="bg-secondary">Secondary</option>
                <option class="bg-info">Info</option>
                <option class="bg-success">Success</option>
                <option class="bg-danger">Danger</option>
                <option class="bg-indigo">Indigo</option>
                <option class="bg-purple">Purple</option>
                <option class="bg-pink">Pink</option>
                <option class="bg-navy">Navy</option>
                <option class="bg-lightblue">Lightblue</option>
                <option class="bg-teal">Teal</option>
                <option class="bg-cyan">Cyan</option>
                <option class="bg-dark">Dark</option>
                <option class="bg-gray-dark">Gray dark</option>
                <option class="bg-gray">Gray</option>
                <option class="bg-light">Light</option>
                <option class="bg-warning">Warning</option>
                <option class="bg-white">White</option>
                <option class="bg-orange">Orange</option>
                <a href="#">clear</a></select></div>
    </aside>


    <footer class="main-footer">
        <strong>Copyright © 2014-2021 <a href="<?php echo URL_ROOT ?>"><?php echo SITE_NAME ?></a></strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0
        </div>
    </footer>
    <div id="sidebar-overlay"></div>
    <!-- Create Employee Modal -->
    <div class="modal fade" id="addEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle3">Add Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" id="addEmployeeForm" method="post"
                          action="<?php echo URL_ROOT . '/admin/createEmployee' ?>" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationServer01">First name</label>
                                <input type="text" class="form-control" id="validationServer01" name="firstName"
                                       placeholder="First name" value="" required>
                                <div class="invalid-feedback">
                                    Please provide your last name
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationServer02">Last name</label>
                                <input type="text" class="form-control" id="validationServer02" name="lastName"
                                       placeholder="Last name" value="" required>
                                <div class="invalid-feedback">
                                    Please provide your first name
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationServerUsername">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                    </div>
                                    <input type="email" class="form-control" name="email"
                                           id="validationServerUsername" placeholder="Email"
                                           aria-describedby="inputGroupPrepend3" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid email.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationServerPassword">Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend3"><i
                                                    class="fa fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" name="password"
                                           id="validationServerPassword" placeholder="Password"
                                           aria-describedby="inputGroupPrepend3" required>
                                    <div class="invalid-feedback">
                                        Please create a password.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationServerDept">Department</label>
                                <select class="form-control" id="validationServerDept" name="department" required>
                                    <option value="" selected disabled></option>
                                    <?php
                                    /**
                                     * @var Department $d
                                     */
                                    foreach ($dto->departments as $d) { ?>
                                        <option value="<?php echo $d->getId() ?>"><?php echo $d->getName() ?></option>
                                    <?php } ?>
                                </select>
                                <div class="invalid-feedback">
                                    Please select your department.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationServerPos">Position</label>
                                <input type="text" class="form-control" name="position" id="validationServerPos"
                                       placeholder="Position"
                                       required>
                                <div class="invalid-feedback">
                                    Please provide your position.
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationServerNationality">Nationality</label>
                                <input type="text" class="form-control" name="nationality"
                                       id="validationServerNationality"
                                       placeholder="Nationality" required>
                                <div class="invalid-feedback">
                                    Please provide your nationality.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationServerDob">Date of Birth</label>
                                <input type="date" class="form-control" name="born"
                                       min="<?php echo CarbonImmutable::now()->subYears(90)->firstOfYear()->format('Y-m-d') ?>"
                                       max="<?php echo CarbonImmutable::now()->subYears(17)->lastOfYear()->format('Y-m-d') ?>"
                                       id="validationServerDob"
                                       placeholder="Date of Birth" required>
                                <div class="invalid-feedback">
                                    Please provide a valid date.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="telephone">Phone</label>
                                <input type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control"
                                       name="telephone" id="telephone"
                                       placeholder="0547468603" required>
                                <div class="invalid-feedback">
                                    Please provide a valid 10-digit phone number. Eg. 0547468603
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="gender">Gender</label>
                                <select type="text" class="form-control" name="gender" id="gender" required>
                                    <option value="" selected disabled></option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide your gender.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label class="form-check-label font-weight-bold" for="userType">
                                    User type
                                </label>
                                <select class="form-control" name="userType" id="userType">
                                    <option value="" disabled selected></option>
                                    <option value="admin">Admin</option>
                                    <option value="non-admin">Non-Admin</option>
                                </select>
                                <div class="invalid-feedback">

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" form="addEmployeeForm" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Employee Modal -->
    <div class="modal fade" id="editEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle2">Edit Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" method="post" id="editEmployeeForm"
                          action="<?php echo URL_ROOT . '/admin/editemployee' ?>" novalidate>
                        <input type="hidden" name="id" value="">
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationServer012">First name</label>
                                <input type="text" class="form-control" id="validationServer012" name="firstName"
                                       placeholder="First name" value="" required>
                                <div class="invalid-feedback">
                                    Please provide your last name
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationServer022">Last name</label>
                                <input type="text" class="form-control" id="validationServer022" name="lastName"
                                       placeholder="Last name" value="" required>
                                <div class="invalid-feedback">
                                    Please provide your first name
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <!--<div class="col-md-6 mb-3">
                                <label for="validationServerEmail2">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend32">@</span>
                                    </div>
                                    <input type="email" class="form-control" name="email"
                                           id="validationServerEmail2" placeholder="Email"
                                           aria-describedby="inputGroupPrepend3" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid email.
                                    </div>
                                </div>
                            </div>-->
                            <div class="col-md-6 mb-3">
                                <label for="validationServerDept2">Department</label>
                                <select class="form-control" id="validationServerDept2" name="department" required>
                                    <?php
                                    /**
                                     * @var Department $d
                                     */
                                    foreach ($dto->departments as $d) { ?>
                                        <option value="<?php echo $d->getId() ?>"
                                            <?php echo $dto->employeeProfile->getDepartment()->getId() == $d->getId() ?
                                                'selected' : '' ?>><?php echo $d->getName() ?></option>
                                    <?php } ?>
                                </select>

                                <div class="invalid-feedback">
                                    Please provide your department.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationServerPos2">Position</label>
                                <input type="text" name="position" class="form-control" id="validationServerPos2"
                                       placeholder="Position"
                                       required>
                                <div class="invalid-feedback">
                                    Please provide your position.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationServer052">Nationality</label>
                                <input type="text" name="nationality" class="form-control" id="validationServer052"
                                       placeholder="Nationality" required>
                                <div class="invalid-feedback">
                                    Please provide your nationality.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="telephone2">Phone</label>
                                <input type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control"
                                       name="telephone" id="telephone2"
                                       placeholder="0547468603" required>
                                <div class="invalid-feedback">
                                    Please provide a valid 10-digit phone number. Eg. 0547468603
                                </div>
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="col-md-6 mb-3">
                                <label for="gender2">Gender</label>
                                <select type="text" class="form-control" name="gender" id="gender2" required>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide your gender.
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="validationServerDob2">Date of Birth</label>
                                <input type="date" class="form-control" name="born"
                                       min="<?php echo CarbonImmutable::now()->subYears(90)->firstOfYear()->format('Y-m-d') ?>"
                                       max="<?php echo CarbonImmutable::now()->subYears(17)->lastOfYear()->format('Y-m-d') ?>"
                                       id="validationServerDob2"
                                       placeholder="Date of Birth" required>
                                <div class="invalid-feedback">
                                    Please provide a valid date.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="col-md-12 mb-3">
                                <label class="form-check-label font-weight-bold" for="userType2">
                                    User type
                                </label>
                                <select class="form-control" name="userType" id="userType2">
                                    <option value="" disabled selected></option>
                                    <option value="admin">Admin</option>
                                    <option value="non-admin">Non-Admin</option>
                                </select>
                                <div class="invalid-feedback">

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" form="editEmployeeForm" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="deleteEmployeeModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Disable Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="deleteEmployeeForm" method="post" action="<?php echo URL_ROOT . '/admin/disableaccount' ?>">
                        <p>Are you sure?</p>
                        <input type="hidden" value="" name="id">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" form="deleteEmployeeForm" class="btn btn-primary">Disable Account</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Employee Leave Modal -->
    <div class="modal fade" id="editEmployeeLeaveModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Approve Leave</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" method="post" id="editEmployeeLeaveForm"
                          action="<?php echo URL_ROOT . '/admin/approveLeave' ?>" novalidate>
                        <input type="hidden" name="id" value="">

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="startOfLeave">Start of Leave</label>
                                <input disabled type="date" class="form-control" id="startOfLeave" name="startOfLeave"
                                       placeholder="Start of Leave" value="" required>
                                <div class="invalid-feedback">
                                    Please provide leave start date
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="endOfLeave">End of Leave</label>
                                <input disabled readonly type="date" class="form-control" id="endOfLeave" name="endOfLeave"
                                       placeholder="End of Leave" value="" required>
                                <div class="invalid-feedback">
                                    Please provide leave end date
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="leavePurpose">Purpose</label>
                                <textarea disabled  readonly class="form-control" type="text" id="leavePurpose" name="leavePurpose" required></textarea>
                                <div class="invalid-feedback">
                                    Please provide the purpose of leave.
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="leaveStatus">Approval</label>
                                <select type="date" class="form-control" id="leaveStatus" name="leaveStatus" required>
                                    <option value="<?php echo LeaveStatus::APPROVED ?>">Approve</option>
                                    <option value="<?php echo LeaveStatus::REJECTED ?>">Reject</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide approval
                                </div>
                            </div>
                            <!--<div class="col-md-12 mb-3">
                                <label for="adminComment">Comment</label>
                                <textarea type="date" class="form-control" id="adminComment" name="adminComment" placeholder="Comment"></textarea>
                                <div class="invalid-feedback">
                                    Please comment
                                </div>
                            </div>-->
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" form="editEmployeeLeaveForm" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="<?php echo URL_ROOT ?>/public/js/jquery.min.js"></script>
<script src="<?php echo URL_ROOT ?>/public/js/bootstrap.bundle-2.min.js"></script>
<script src="<?php echo URL_ROOT ?>/public/js/jquery.dataTables.min.js"></script>
<script src="<?php echo URL_ROOT ?>/public/js/dataTables.bs.min.js"></script>
<script src="<?php echo URL_ROOT ?>/public/js/dataTables.responsive.min.js"></script>
<script src="<?php echo URL_ROOT ?>/public/js/responsive.bs.min.js"></script>
<script src="<?php echo URL_ROOT ?>/public/js/dataTables.buttons.min.js"></script>
<script src="<?php echo URL_ROOT ?>/public/js/buttons.bs.min.js"></script>
<script src="<?php echo URL_ROOT ?>/public/js/jszip.min.js"></script>
<script src="<?php echo URL_ROOT ?>/public/js/pdfmake.min.js"></script>
<script src="<?php echo URL_ROOT ?>/public/js/vfs_fonts.min.js"></script>
<script src="<?php echo URL_ROOT ?>/public/js/buttons.html5.min.js"></script>
<script src="<?php echo URL_ROOT ?>/public/js/buttons.print.min.js"></script>
<script src="<?php echo URL_ROOT ?>/public/js/buttons.colVis.min.js"></script>

<script src="<?php echo URL_ROOT ?>/public/js/adminlte.min.js"></script>
<script src="<?php echo URL_ROOT ?>/public/js/avatar.js"></script>
<script src="<?php echo URL_ROOT ?>/public/js/demo.js"></script>
<script src="<?php echo URL_ROOT ?>/public/js/custom.js"></script>

<script>
    (function () {
        'use strict';
        $("#employees").DataTable({
            "language": {
                "infoEmpty": "",
                "emptyTable": "No data available to show"
            },
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "buttons": [{extend: "copy"}, {extend: "csv"}, {extend: "excel"}, {extend: "pdf"}, {extend: "print"}, {extend: "colvis"},
                {
                    action: addEmployee,
                    text: "Add Employee"
                }
            ]
        }).buttons().container().appendTo('#employees_wrapper .col-md-6:eq(0)');

        $("#employeeLeaves").DataTable({
            "language": {
                "infoEmpty": "",
                "emptyTable": "No data available to show"
            },
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "buttons": [{extend: "copy"}, {extend: "csv"}, {extend: "excel"}, {extend: "pdf"}, {extend: "print"}, {extend: "colvis"}]
        }).buttons().container().appendTo('#employeeLeaves_wrapper .col-md-6:eq(0)');

        $("#editEmployeeModal").on('show.bs.modal', function (e) {
            let cols = $(e.relatedTarget).siblings('input');
            cols.each(function () {
                let col = $(this)
                let fieldName = col.data('fieldName')
                let fieldValue = col.data('fieldValue')
                let selectedOption = col.data('selected');
                let field = $("#editEmployeeForm").find(`[name=${fieldName}]`);
                field.val(fieldValue);
                if (col.data('checked'))
                    field.prop('checked', true)
                if (selectedOption) {
                    field.find(`option[value=${selectedOption}]`).prop('selected', true)
                }
                //updateFormFields(col.data('fieldName'), col.data('fieldValue'), '#editEmployeeForm')
            })
        })

        $("#editEmployeeLeaveModal").on('show.bs.modal', function (e) {
            let cols = $(e.relatedTarget).siblings('input');
            cols.each(function () {
                let col = $(this)
                let fieldName = col.data('fieldName')
                let fieldValue = col.data('fieldValue')
                let selectedOption = col.data('selected');
                let field = $("#editEmployeeLeaveForm").find(`[name=${fieldName}]`);
                field.val(fieldValue);
            })
        })

        $("#deleteEmployeeModal").on('show.bs.modal', function (e) {
            let id = $(e.relatedTarget).siblings('input[data-field-name=id]').data('fieldValue');
            $("#deleteEmployeeForm").find("input[name=id]").val(id);
        })

    })();

    function updateFormFields(fieldName, fieldValue, formId) {
        let field = $(formId).find(`[name=${fieldName}]`);
        field.val(fieldValue);
        if (field.data('checked')) {
        }
    }

    function editEmployee(e, f) {
        console.log(e, f)
    }

    function addEmployee() {
        // add a new employee record
        $("#addEmployeeModal").modal('show');

    }

</script>
</body>
</html>
