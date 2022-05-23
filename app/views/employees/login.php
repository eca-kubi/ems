<?php
// Employee::Login
/** @var array $data */
$dto = new LoginDTO(...$data);
$dto->pageId = PageId::EMPLOYEE_LOGIN;
include APP_ROOT . "/templates/login-page-template.php";



