<?php

use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class UserAccountManager
{
    /**
     */
    public static function authenticate(string $email, string $password): bool{

        $user =  UserRepository::instance()->findOneBy(['email' => trim($email)]);
        if ($user) {
            return password_verify($password, $user->getPasswordHash());
        }
        return false;
    }

    public function createUserAccount()
    {

    }


    public static function isUserAnAdmin(string $email): bool
    {
        $userType = UserRepository::instance()->findOneBy(['email' => $email])?->getUserType();
        return $userType == UserType::ADMIN->value;
    }

    public static function hasUserLoggedIn(): bool | null
    {
        return SessionManager::getInstance()->get('userHasLoggedIn');
    }

    public static function saveLoginSession(string $email): void
    {
        $session = SessionManager::getInstance();
        $session->set('userHasLoggedIn', true);
        $session->set('email', $email);
    }

    public static function getCurrentUser(): ?User
    {
        return UserRepository::instance()->findOneBy(['email' => SessionManager::getInstance()->get('email')]);
    }


}