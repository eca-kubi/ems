<?php

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;

#[Entity(repositoryClass: 'EmergencyContactRepository')]
class EmergencyContact
{
    #[Id]
    #[GeneratedValue]
    #[Column(name: 'id', type: Types::INTEGER)]
    private $id;

    #[Column(name: 'first_name', type: Types::STRING, length: 25)]
    private $firstName;

    #[Column(name: 'last_name', type: Types::STRING, length: 25)]
    private $lastName;

    #[Column(name: 'relationship', type: Types::STRING, length: 25)]
    private $relationship;

    #[Column(name: 'email', type: Types::STRING, length: 200)]
    private $email;

    #[Column(name: 'phone',type: Types::STRING, length: 15)]
    private $phone;

    #[\Doctrine\ORM\Mapping\ManyToOne(targetEntity: 'Employee',inversedBy: 'emergencyContacts')]
    #[JoinColumn(name: 'employee_id', referencedColumnName: 'id',nullable: false)]
    private $employee;

}