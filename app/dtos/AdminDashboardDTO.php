<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Query\Expr\Join;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class AdminDashboardDTO extends PageDTO
{
    /**
     * @throws UnknownProperties
     */
    public function __construct(
        public User $currentUser = new User(),
        public string $title = 'Admin Dashboard',
        public PageId $pageId = PageId::ADMIN_DASHBOARD,
        public string $url = '',
        public UserModelProperties $userModelProperties = new UserModelProperties(),
        /**
         * @var mixed|object|null
         */
        public Employee $employeeProfile = new Employee,
        /**
         * @var Collection|ArrayCollection|Employee[]
         */
        public $employees  = new ArrayCollection(),
        /**
         * @var Collection|ArrayCollection|Department[]
         */
        public $departments = new ArrayCollection(),

        public Collection | array | ArrayCollection $employeeLeaves = new ArrayCollection()
    )
    {
        parent::__construct();
        $this->currentUser = UserAccountManager::getCurrentUser();
        $this->employees = EmployeeRepository::instance()->getActiveEmployees();
        $this->employeeProfile = EmployeeRepository::instance()->findOneBy(['user' => $this->currentUser->getId()]);
        $this->departments = DepartmentRepository::instance()->findBy([],['name'=>'ASC']);
        $this->employeeLeaves = EmployeeLeaveRepository::instance()->findAll();
    }
}