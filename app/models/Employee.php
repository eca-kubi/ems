<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\OneToOne;
#[Entity(repositoryClass: 'EmployeeRepository')]
class Employee
{
    #[ID]
    #[Column(name: 'id',type: Types::INTEGER)]
    #[GeneratedValue]
    private $id;

    #[Column(name: 'created_by',type: Types::DATE_IMMUTABLE)]
    private $createdBy;

    #[Column(name: 'date_created',type: Types::DATE_IMMUTABLE)]
    private $dateCreated;

    #[Column(name: 'born',type: Types::DATE_IMMUTABLE)]
    private $born;

    #[Column(name: 'gender', type: Types::STRING, length: 20)]
    private $gender;

    #[Column(name: 'nationality', type: Types::STRING, length: 50)]
    private $nationality;

    #[Column(name: 'address', type: Types::STRING, length: 50)]
    private $address;

    #[Column(name: 'marital_status', type: Types::STRING, length: 25)]
    private $maritalStatus;

    #[OneToOne(inversedBy: 'employee', targetEntity: 'User')]
    #[JoinColumn(name: 'user_id',referencedColumnName: 'id', unique: true)]
    private $user;

    #[OneToMany(mappedBy: 'employee',targetEntity: 'Education')]
    private $educations;

    #[OneToMany(mappedBy: 'employee',targetEntity: 'EmergencyContact')]
    private $emergencyContacts;

    #[ManyToOne(targetEntity: 'Department',inversedBy: 'employees')]
    #[JoinColumn('department_id','id')]
    private $department;

    #[OneToMany(mappedBy: 'employee',targetEntity: 'EmployeeLeave')]
    private $employeeLeaves;

    public function __construct()
    {
        $this->educations = new ArrayCollection();
        $this->emergencyContacts = new ArrayCollection();
        $this->employeeLeaves = new ArrayCollection();
    }

}