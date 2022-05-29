<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Query\Expr\Join;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class EmployeeDashboardDTO extends PageDTO
{
    /**
     * @throws UnknownProperties
     */
    public function __construct(
        public User | null                $currentUser = new User(),
        public string              $title = 'Dashboard',
        public PageId              $pageId = PageId::EMPLOYEE_DASHBOARD,
        public string              $url = '',
        public UserModelProperties $userModelProperties = new UserModelProperties(),
        /**
         * @var mixed|object|null
         */
        public Employee            $employeeProfile = new Employee,

        /**
         * @var Collection|ArrayCollection|EmployeeLeave[]|array
         */
        public Collection     $employeeLeaveRequests = new ArrayCollection()
    )
    {
        parent::__construct();
        $this->currentUser = UserAccountManager::getCurrentUser();
        $this->employeeProfile = EmployeeRepository::instance()->findOneBy(['user' => $this->currentUser->getId()]);
        //$this->employeeLeaveRequests = EmployeeLeaveRepository::instance()->findBy(['employee' => $this->employeeProfile->getId()]);
        $this->employeeLeaveRequests = $this->employeeProfile->getEmployeeLeaves();
    }
}