<?php

use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class Admin extends Controller
{
    /**
     * @throws UnknownProperties
     */

    public function index()
    {
        Helpers::redirect('admin','dashboard');
    }

    public function login()
    {
        $dto = new LoginDTO(...$_POST);
        $dto->url = URLs::ADMIN_LOGIN;
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
        $this->view('admin/login', $dto->toArray());
    }

    public function dashboard()
    {
        $dto = new AdminDashboardDTO(...$_POST);
        if (UserAccountManager::hasUserLoggedIn()){
            $currentUser = UserAccountManager::getCurrentUser();
            if (UserAccountManager::isUserAnAdmin($currentUser?->getUsername())){
                $this->view('admin/dashboard', $dto->toArray());
            } else {
                // You are not allowed to view this page.
                FlashMessageManager::setFlash(PageId::HOME, FlashMessageType::WARNING, 'You are not allowed to view this page!');
                Helpers::redirect('home','index');
            }
        } else {
            Helpers::redirect('admin', 'login');
        }
    }



    public function contact()
    {
        $data = [
            'title' => 'Admin Contact',
            'pageId' => PageId::ADMIN_CONTACT
        ];
        $this->view('admin/contact', $data);
    }

}