<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\TransactionRequiredException;

#[Entity(repositoryClass: 'EmployeeRepository')]
class Employee
{
    #[ID]
    #[Column(name: 'id', type: Types::INTEGER)]
    #[GeneratedValue]
    private $id;

    #[Column(name: 'born', type: Types::DATE_IMMUTABLE)]
    private $born;

    #[Column(name: 'gender', type: Types::STRING, length: 20,nullable: true)]
    private $gender;

    #[Column(name: 'nationality', type: Types::STRING, length: 50)]
    private $nationality;

    #[OneToOne(targetEntity: 'User', cascade: ["persist"])]
    #[JoinColumn(name: 'user_id', referencedColumnName: 'id', unique: true)]
    private $user;

    #[Column(name: 'position', type: Types::STRING)]
    private $position;

    #[ManyToOne(targetEntity: 'Department')]
    #[JoinColumn('department_id', 'id')]
    private $department;

    #[OneToMany(mappedBy: 'employee', targetEntity: 'EmployeeLeave')]
    private $employeeLeaves;



    public function __construct()
    {
        $this->employeeLeaves = new ArrayCollection();
    }

    public function getUser(): User
    {
        return $this->user;
    }


    public function getDepartment(): Department
    {
        return $this->department;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getBorn(): DateTimeImmutable
    {
        return $this->born;
    }

    public function addEmployeeLeave(EmployeeLeave $leave): void
    {
        $this->employeeLeaves[] = $leave;
    }

    /**
     * @param mixed void
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getNationality() : string
    {
        return $this->nationality;
    }

    /**
     * @return mixed
     */
    public function getPosition() : string
    {
        return $this->position;
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

    public function setBorn($born)
    {
        $this->born = $born;
    }

    public function setDepartment(Department $department)
    {
        $this->department = $department;
    }

    public function getEmployeeLeaves() : \Doctrine\Common\Collections\Collection
    {
        return $this->employeeLeaves;
    }
}