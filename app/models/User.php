<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    #[Column(name: 'id', type: Types::INTEGER)]
    #[GeneratedValue]
    private $id;

    #[Column(name: 'first_name', type: Types::STRING, length: 25)]
    private $firstName;

    #[Column(name: 'last_name', type: Types::STRING, length: 50)]
    private  $lastName;

    #[Column(name: 'password_hash', type: Types::STRING, length: 500)]
    private  $passwordHash;

    // This would indicate the type of user whether admin or normal user
    #[Column(name: 'user_type', type: Types::STRING, length: 50)]
    private  $userType;

    #[Column(name: 'email', type: Types::STRING, length: 200)]
    private  $email;

    #[Column(name: 'telephone', type: Types::STRING, length: 15)]
    private  $telephone;

    #[Column(name: 'active', type: Types::BOOLEAN)]
    private ?bool $active = true;

    /*#[OneToOne(mappedBy: 'user', targetEntity: 'Employee')]
    private $employee;*/

    #[Column(name: 'created_at', type: Types::DATETIME_IMMUTABLE, options: ['default'=> 'CURRENT_TIMESTAMP'])]
    private ?DateTimeImmutable $createdAt;

    public function __construct()
    {
        $this->userType = UserType::NON_ADMIN->value;
        $this->createdAt = new DateTimeImmutable();
    }
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getPasswordHash(): string
    {
        return $this->passwordHash;
    }

    /**
     * @return string
     */
    public function getUserType(): string
    {
        return $this->userType;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getTelephone(): string
    {
        return $this->telephone;
    }


/*    public function getEmployee(): Employee
    {
        return $this->employee;
    }*/

    /**
     * @return DateTimeImmutable
     */
    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }

    /**
     * @return mixed
     */
    public function getActive() : bool
    {
        return $this->active;
    }

    public function getFullName() : string
    {
        return $this->firstName . ' '. $this->lastName;
    }

    public function getPhone() : string
    {
        return $this->telephone;
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
}