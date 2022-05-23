<?php
enum PageId: string
{
    case HOME = 'home';
    case ADMIN_LOGIN = 'admin_login';
    case ADMIN_CONTACT = 'admin_contact';
    case EMPLOYEE_LOGIN = 'employee_login';
    case CONTACT = 'contact';
    case ERRORS = 'errors';
    case ADMIN_DASHBOARD = 'admin_dashboard';
    case ANNOUNCEMENTS = 'announcements';
    case LEAVE_REQUESTS = 'leave_requests';
    case LOGOUT = 'logout';
    case EDIT_EMPLOYEE_DETAILS = 'edit_employee_details';
    case ADD_EMPLOYEE  = 'add_employee';
}