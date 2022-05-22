<?php

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

#[Entity(repositoryClass: 'EmployeeLeaveRepository')]
class EmployeeLeave
{
    #[Id]
    #[Column(name: 'id', type: Types::INTEGER)]
    #[GeneratedValue]
    private $id;

    #[Column(name: 'submission_date',type: Types::DATE_IMMUTABLE)]
    private $submissionDate;

    #[Column(name: 'response_date',type: Types::DATE_IMMUTABLE)]
    private $responseDate;

    #[Column(name: 'start_of_leave',type: Types::DATE_IMMUTABLE)]
    private $startOfLeave;

    #[Column(name: 'leave_purpose',type: Types::STRING, length: 255)]
    private $leavePurpose;

    #[Column('leave_status', type: Types::STRING, length: 100)]
    private $leaveStatus;

    #[ManyToOne(targetEntity: 'Employee',inversedBy: 'employeeLeaves')]
    #[JoinColumn(name: 'employee_id', referencedColumnName: 'id')]
    private $employee;

}