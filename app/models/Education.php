<?php

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;

#[Entity(repositoryClass: 'EducationRepository')]
class Education
{
    #[Id]
    #[GeneratedValue]
    #[Column(name: 'id', type: Types::INTEGER)]
    private $id;

    #[Column(name: 'institution', type: Types::STRING, length: 255)]
    private $institution;

    #[Column(name: 'qualification', type: Types::STRING, length: 255)]
    private $qualification;

    #[Column(name: 'graduation_date', type: Types::DATE_IMMUTABLE)]
    private $graduationDate;

    #[Column(name: 'achievements', type: Types::STRING, length: 255)]
    private $achievements;

    #[\Doctrine\ORM\Mapping\ManyToOne(targetEntity: 'Employee', inversedBy: 'educations')]
    #[JoinColumn(name: 'employee_id', referencedColumnName: 'id', nullable: false)]
    private $employee;

}