<?php

class UserAccountManager
{
    public function login($email, $password){
        // password, email
        // ask user repository find the user with this email address
        $user = UserRepository::findByEmail(['email', $email]);
        if($user->password == $password) {
            // Authenticate successfully
            FlashMessageManager::setFlash(PageId::ADMIN_LOGIN, FlashMessageType::SUCCESS, 'Login successfully!');
        } else {
            FlashMessageManager::setFlash(PageId::ADMIN_LOGIN, FlashMessageType::DANGER, 'Login failed!');
        }
    }

    public function createUserAccount()
    {

    }

    public function disableUserAccount(){}

    public static function isUserAnAdmin($criteria = ['email' =>'ecakubi@ems.com'])
    {
        $user = UserRepository::findByEmail($criteria);
        if($user->type == UserType::ADMIN){
            return true;
        } else {
            return false;
        }
    }

}