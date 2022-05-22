<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\OneToOne;

#[Entity(repositoryClass: 'UserRepository')]
class User
{
    #[ID]
    #[Column(name: 'id',type: Types::INTEGER)]
    #[GeneratedValue]
    private $id;

    #[Column(name: 'first_name', type: Types::STRING, length: 25)]
    private $firstName;

    #[Column(name: 'last_name', type: Types::STRING, length: 50)]
    private $lastName;

    #[Column(name: 'username', type: Types::STRING, length: 15)]
    private $username;

    #[Column(name: 'password_hash', type: Types::STRING, length: 200 )]
    private $passwordHash;

    // This would indicate the type of user whether admin or normal user
    #[Column(name: 'user_type', type: Types::STRING, length: 50)]
    private $userType;

    #[Column(name: 'profile_picture', type: Types::BLOB)]
    private $profilePicture;

    #[Column(name: 'created_by',type: Types::DATE_IMMUTABLE)]
    private $createdBy;

    #[Column(name: 'date_created',type: Types::DATE_IMMUTABLE)]
    private $dateCreated;

    #[Column(name: 'email',type: Types::STRING, length: 200)]
    private $email;

    #[Column(name: 'telephone',type: Types::STRING, length: 15)]
    private $telephone;

    #[OneToMany(mappedBy: 'user', targetEntity: 'ActivityLog')]
    private $activityLogs;

    #[OneToOne(mappedBy: 'user', targetEntity: 'Employee')]
    private $employee;

    public function __construct()
    {
        $this->activityLogs = new ArrayCollection();
    }
}