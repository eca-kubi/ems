<?php

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

#[\Doctrine\ORM\Mapping\Table(name: 'employee_leave')]
#[Entity(repositoryClass: 'EmployeeLeaveRepository')]
class EmployeeLeave
{
    #[Id]
    #[Column(name: 'id', type: Types::INTEGER)]
    #[GeneratedValue]
    private $id;

    #[Column(name: 'submission_date',type: Types::DATETIME_IMMUTABLE, options: ['default' => 'CURRENT_TIMESTAMP'])]
    private $submissionDate;

    #[Column(name: 'response_date',type: Types::DATETIME_IMMUTABLE,nullable: true)]
    private $responseDate;

    #[Column(name: 'start_of_leave',type: Types::DATETIME_IMMUTABLE, options: ['default' => 'CURRENT_TIMESTAMP'])]
    private $startOfLeave;

    #[Column(name: 'end_of_leave',type: Types::DATETIME_IMMUTABLE, options: ['default' => 'CURRENT_TIMESTAMP'])]
    private $endofLeave;

    #[Column(name: 'leave_purpose',type: Types::STRING, length: 255,nullable: true)]
    private $leavePurpose;

    #[Column('leave_status', type: Types::STRING, length: 100)]
    private $leaveStatus = 'pending';

    #[ManyToOne(targetEntity: 'Employee')]
    #[JoinColumn(name: 'employee_id', referencedColumnName: 'id')]
    private $employee;

    public function __construct()
    {
        $this->submissionDate = new DateTimeImmutable();
    }
    /**
     * @return mixed
     */
    public function getEmployee() : Employee
    {
        return $this->employee;
    }

    /**
     * @return mixed
     */
    public function getStartOfLeave(): DateTimeImmutable
    {
        return $this->startOfLeave;
    }

    /**
     * @return mixed
     */
    public function getLeaveStatus() : string
    {
        return $this->leaveStatus;
    }

    /**
     * @return mixed
     */
    public function getEndOfLeave() : DateTimeImmutable
    {
        return $this->endofLeave;
    }

    /**
     * @return mixed
     */
    public function getLeavePurpose() : string | null
    {
        return $this->leavePurpose;
    }

    /**
     * @return mixed
     */
    public function getResponseDate() : DateTimeImmutable | null
    {
        return $this->responseDate;
    }

    /**
     * @return mixed
     */
    public function getSubmissionDate() : DateTimeImmutable | null
    {
        return $this->submissionDate;
    }

    /**
     * @return mixed
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param mixed $endofLeave
     */
    public function setEndofLeave($endofLeave): void
    {
        $this->endofLeave = $endofLeave;
    }

    /**
     * @param mixed $leavePurpose
     */
    public function setLeavePurpose($leavePurpose): void
    {
        $this->leavePurpose = $leavePurpose;
    }

    /**
     * @param mixed $responseDate
     */
    public function setResponseDate($responseDate): void
    {
        $this->responseDate = $responseDate;
    }

    /**
     * @param mixed $submissionDate
     */
    public function setSubmissionDate($submissionDate): void
    {
        $this->submissionDate = $submissionDate;
    }

    /**
     * @param mixed $leaveStatus
     */
    public function setLeaveStatus($leaveStatus): void
    {
        $this->leaveStatus = $leaveStatus;
    }

    /**
     * @param mixed $startOfLeave
     */
    public function setStartOfLeave($startOfLeave): void
    {
        $this->startOfLeave = $startOfLeave;
    }

    /**
     * @param Employee $employee
     */
    public function setEmployee(Employee $employee): void
    {
        $this->employee = $employee;
    }
}