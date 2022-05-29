<?php

use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\OptimisticLockException;
use JetBrains\PhpStorm\NoReturn;

class Employees extends Controller
{
    public function login()
    {
        $dto = new EmployeeLoginDTO(...$_POST);
        $dto->url = URLs::EMPLOYEE_LOGIN;
        if (Helpers::getRequestMethod() == 'POST') {
            if (UserAccountManager::authenticate($dto->email, $dto->password)) {
                UserAccountManager::saveLoginSession($dto->email);
                Helpers::redirect(controller: 'employees', method: 'dashboard', params: '');
            } else {
                FlashMessageManager::setFlash($dto->pageId, FlashMessageType::DANGER, 'Your email or password is incorrect.');
            }
        }
        $this->view('employees/login', $dto->toArray());
    }

    public function dashboard()
    {
        if (UserAccountManager::hasUserLoggedIn()) {
            $dto = new EmployeeDashboardDTO(...[]);
            if (Helpers::getRequestMethod() == 'POST' && !empty($_POST)) {
                $dto = new EmployeeDashboardDTO(...$_POST);
            }
            $this->view('employees/dashboard', $dto->toArray());
        } else {
            Helpers::redirect('employees', 'login');
        }
    }

    /**
     * @throws OptimisticLockException
     * @throws ORMException
     * @throws Exception
     */
    #[NoReturn] public function newLeave()
    {
        if (UserAccountManager::hasUserLoggedIn()) {
            if (Helpers::getRequestMethod() == 'POST' && !empty($_POST)) {
                $dto = new LeaveFormDTO(...$_POST);
                $employee = EmployeeRepository::instance()->findOneBy(['user' => UserAccountManager::getCurrentUser()->getId()]);
                $empL = new EmployeeLeave();
                $empL->setEndofLeave($dto->endOfLeave);
                $empL->setStartOfLeave($dto->startOfLeave);
                $empL->setLeaveStatus($dto->leaveStatus);
                $empL->setLeavePurpose($dto->leavePurpose);
                $empL->setEmployee($employee);
                GetEntityManager()->persist($empL);
                GetEntityManager()->flush();
                FlashMessageManager::setFlash(PageId::EMPLOYEE_DASHBOARD, FlashMessageType::SUCCESS, 'Leave request created successfully!');
            }
        }
        Helpers::redirect('employees', 'dashboard');
    }

    #[NoReturn] public function editLeave()
    {
        if (UserAccountManager::hasUserLoggedIn()) {
            if (Helpers::getRequestMethod() == 'POST' && !empty($_POST)) {
                $dto = new LeaveFormDTO(...$_POST);
                $empL = EmployeeLeaveRepository::instance()->find($dto->id);
                $empL->setEndofLeave($dto->endOfLeave);
                $empL->setStartOfLeave($dto->startOfLeave);
                $empL->setLeavePurpose($dto->leavePurpose);
                GetEntityManager()->flush();
                FlashMessageManager::setFlash(PageId::EMPLOYEE_DASHBOARD, FlashMessageType::SUCCESS, 'Leave request updated successfully!');
            }
        }
        Helpers::redirect('employees', 'dashboard');
    }

    public function cancelLeave()
    {
        if (UserAccountManager::hasUserLoggedIn()) {
            if (Helpers::getRequestMethod() == 'POST' && !empty($_POST)) {
                //$dto = new LeaveFormDTO(...$_POST);
                $empL = EmployeeLeaveRepository::instance()->find($_POST['id']);
                GetEntityManager()->remove($empL);
                GetEntityManager()->flush();
                FlashMessageManager::setFlash(PageId::EMPLOYEE_DASHBOARD, FlashMessageType::SUCCESS, 'Leave request has been successfully cancelled!');
            }
        }
        Helpers::redirect('employees', 'dashboard');
    }

    public function logout()
    {
        SessionManager::getInstance()->destroy();
        Helpers::redirect('home', 'index');
    }
}