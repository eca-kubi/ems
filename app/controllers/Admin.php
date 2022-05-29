<?php

use JetBrains\PhpStorm\NoReturn;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class Admin extends Controller
{
    /**
     * @throws UnknownProperties
     */

    public function index(): void
    {
        Helpers::redirect('admin', 'dashboard');
    }

    public function login()
    {

        $dto = new LoginDTO(...$_POST);
        $dto->url = URLs::ADMIN_LOGIN;
        if (Helpers::getRequestMethod() == 'POST') {
            if (!GetEntityManager()->getRepository('User')->findOneBy(['email' => $dto->email])) {
                FlashMessageManager::setFlash($dto->pageId, FlashMessageType::DANGER, "We don't have this email address registered.");
            } elseif (UserRepository::instance()->findBy(['email' => $dto->email, 'active' => 0])) {
                FlashMessageManager::setFlash($dto->pageId, FlashMessageType::DANGER, "Your account has been disabled");
            } elseif (UserAccountManager::isUserAnAdmin($dto->email)) {
                if (UserAccountManager::authenticate($dto->email, $dto->password)) {
                    UserAccountManager::saveLoginSession($dto->email);
                    Helpers::redirect(controller: 'admin', method: 'dashboard', params: '');
                } else {
                    FlashMessageManager::setFlash($dto->pageId, FlashMessageType::DANGER, 'Your email or password is incorrect.');
                }
            } else {
                FlashMessageManager::setFlash($dto->pageId, FlashMessageType::DANGER, 'You are not permitted to use this resource.');
            }
        } elseif (UserAccountManager::hasUserLoggedIn()) {
            Helpers::redirect('admin', 'dashboard');
        }
        $this->view('admin/login', $dto->toArray());
    }

    public function dashboard()
    {
        if (UserAccountManager::hasUserLoggedIn()) {
            $dto = new AdminDashboardDTO(...$_POST);
            /* Updated in the constructor
             * $dto->currentUser = UserAccountManager::getCurrentUser();
            $dto->employees = EmployeeRepository::instance()->getActiveEmployees();
            $dto->employeeProfile = EmployeeRepository::instance()->find($dto->currentUser->getId());
            $dto->departments = DepartmentRepository::instance()->findAll();*/
            if (UserAccountManager::isUserAnAdmin($dto->currentUser->getEmail())) {
                $this->view('admin/dashboard', $dto->toArray());
            } else {
                // You are not allowed to view this page.
                FlashMessageManager::setFlash(PageId::HOME, FlashMessageType::DANGER, 'You are not allowed to access the admin page!');
                Helpers::redirect('home', 'index');
            }
        } else {
            Helpers::redirect('admin', 'login');
        }
    }

    #[NoReturn] public function editEmployee()
    {
        if (Helpers::getRequestMethod() == 'POST' && !empty($_POST)) {
            $dto = new EmployeeProfileDTO(...$_POST);
            if (EmployeeRepository::instance()->updateEmployeeById($dto->id, $dto->toArray())) {
                FlashMessageManager::setFlash(PageId::ADMIN_DASHBOARD, FlashMessageType::SUCCESS, 'Employee info updated successfully');
            } else {
                FlashMessageManager::setFlash(PageId::ADMIN_DASHBOARD, FlashMessageType::DANGER, 'Employee info update failed');
            }
        }
        Helpers::redirect('admin', 'dashboard');
    }

    public function disableAccount()
    {
        if (Helpers::getRequestMethod() == 'POST' && !empty($_POST)) {
            if(EmployeeRepository::instance()->disableAccount($_POST['id'])){
                FlashMessageManager::setFlash(PageId::ADMIN_DASHBOARD, FlashMessageType::SUCCESS, 'Employee account disabled successfully!');
            } else {
                FlashMessageManager::setFlash(PageId::ADMIN_DASHBOARD, FlashMessageType::DANGER, 'Failed to disable employee account!');
            }
        }
        Helpers::redirect('admin', 'dashboard');
    }

    public function approveLeave()
    {
        if (UserAccountManager::hasUserLoggedIn() && UserAccountManager::isUserAnAdmin(UserAccountManager::getCurrentUser()->getEmail()) ) {
            $dto = new LeaveFormDTO(...$_POST);
            $empL = EmployeeLeaveRepository::instance()->find($dto->id);
            $empL->setLeaveStatus($dto->leaveStatus);
            $empL->setResponseDate($dto->responseDate);
            GetEntityManager()->flush();
            FlashMessageManager::setFlash(PageId::ADMIN_DASHBOARD, FlashMessageType::SUCCESS, 'Leave approval completed successfully!');
        }
        Helpers::redirect('admin', 'dashboard');
    }

    public function createEmployee()
    {
        $data = [];
        if (Helpers::getRequestMethod() == 'POST' && !empty($_POST)) {
            $data['passwordHash'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
            unset($_POST['password']);
            try {
                $data = array_merge($data, (new EmployeeProfileDTO(...$_POST))->toArray());
            } catch (UserAlreadyExistsException $e) {
                FlashMessageManager::setFlash(PageId::ADMIN_DASHBOARD, FlashMessageType::DANGER, $e->getMessage());
                Helpers::redirect('admin', 'dashboard');
            }
            if (EmployeeRepository::instance()->createEmployee($data)) {
                FlashMessageManager::setFlash(PageId::ADMIN_DASHBOARD, FlashMessageType::SUCCESS, 'Employee created successfully');
            } else {
                FlashMessageManager::setFlash(PageId::ADMIN_DASHBOARD, FlashMessageType::DANGER, 'Failed to add new employee record');
            }
        }
        Helpers::redirect('admin', 'dashboard');
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