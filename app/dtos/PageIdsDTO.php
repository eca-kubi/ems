<?php

use Spatie\DataTransferObject\DataTransferObject;

class PageIdsDTO extends DataTransferObject
{
    const HOME = 'home';
    const ADMIN_LOGIN = 'admin_login';
    const ADMIN_CONTACT = 'admin_contact';
    const EMPLOYEE_LOGIN = 'employee_login';
    const CONTACT = 'contact';
    const ERRORS = 'errors';
    const ADMIN_DASHBOARD = 'admin_dashboard';
    const ANNOUNCEMENTS = 'announcements';
    const LEAVE_REQUESTS = 'leave_requests';
    const LOGOUT = 'logout';
    const EDIT_EMPLOYEE_DETAILS = 'edit_employee_details';
    const ADD_EMPLOYEE  = 'add_employee';
}