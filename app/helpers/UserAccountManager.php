<?php

use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class UserAccountManager
{
    /**
     */
    public static function authenticate(string $username, string $password): bool{

        $user =  UserRepository::instance()->findOneBy(['email' => trim($username)]);
        if ($user) {
            return password_verify($password, $user->getPasswordHash());
        }
        return false;
    }

    public function createUserAccount()
    {

    }


    public static function isUserAnAdmin(string $username): bool
    {
        $userType = UserRepository::instance()->findOneBy(['email' => $username])?->getUserType();
        return $userType == UserType::ADMIN->value;
    }

    public static function hasUserLoggedIn(): bool
    {
        return SessionManager::getInstance()->get('userHasLoggedIn');
    }

    public static function saveLoginSession(string $username): void
    {
        $session = SessionManager::getInstance();
        $session->set('userHasLoggedIn', true);
        $session->set('username', $username);
    }

    public static function getCurrentUser(): ?User
    {
        return UserRepository::instance()->findOneBy(['username' => SessionManager::getInstance()->get('username')]);
    }


}