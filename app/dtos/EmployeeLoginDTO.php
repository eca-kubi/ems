<?php

class EmployeeLoginDTO extends PageDTO
{
    public string $title = 'Employee Login';
    public PageId $pageId = PageId::EMPLOYEE_LOGIN;
    public string $url = '';
    public string $email = '';
    public string $password = '';

}