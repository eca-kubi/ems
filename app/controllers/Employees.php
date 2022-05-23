<?php

class Employees extends Controller
{
    public function login()
    {
        $dto = new EmployeeLoginDTO(...$_POST);
        $dto->url = URLs::EMPLOYEE_LOGIN;
        if (Helpers::getRequestMethod() == 'POST') {
            if (UserAccountManager::isUserAnAdmin($dto->username)) {
                if(UserAccountManager::authenticate($dto->username, $dto->password)){
                    UserAccountManager::saveLoginSession($dto->username);
                    Helpers::redirect(controller: 'admin', method: 'dashboard', params: '');
                } else {
                    FlashMessageManager::setFlash($dto->pageId, FlashMessageType::DANGER, 'Your username or password is incorrect. Try again!');
                }
            } else {
                FlashMessageManager::setFlash($dto->pageId, FlashMessageType::DANGER, 'You are not permitted to use this resource.');
            }
        }
        $this->view('employees/login', $dto->toArray());
    }
}