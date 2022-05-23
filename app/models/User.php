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
    private int $id;

    #[Column(name: 'first_name', type: Types::STRING, length: 25)]
    private string $firstName;

    #[Column(name: 'last_name', type: Types::STRING, length: 50)]
    private string $lastName;

    #[Column(name: 'username', type: Types::STRING, length: 15)]
    private string $username;

    #[Column(name: 'password_hash', type: Types::STRING, length: 200)]
    private string $passwordHash;

    // This would indicate the type of user whether admin or normal user
    #[Column(name: 'user_type', type: Types::STRING, length: 50)]
    private string $userType;

    #[Column(name: 'profile_picture', type: Types::BLOB)]
    private $profilePicture;

    #[Column(name: 'email', type: Types::STRING, length: 200)]
    private string $email;

    #[Column(name: 'telephone', type: Types::STRING, length: 15)]
    private string $telephone;

    #[OneToMany(mappedBy: 'user', targetEntity: 'ActivityLog')]
    private Collection $activityLogs;

    #[OneToOne(mappedBy: 'user', targetEntity: 'Employee')]
    private self $employee;

    #[OneToMany(mappedBy: 'user', targetEntity: 'UserSession')]
    private Collection $userSessions;

    #[Column(name: 'created_at',type: Types::DATETIME_IMMUTABLE, options: ['default'=> 'CURRENT_TIMESTAMP'])]
    private DateTimeImmutable $createdAt;

    public function __construct()
    {
        $this->activityLogs = new ArrayCollection();
        $this->userSessions = new ArrayCollection();
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
    public function getUsername(): string
    {
        return $this->username;
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
     * @return mixed
     */
    public function getProfilePicture(): mixed
    {
        return $this->profilePicture;
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

    /**
     * @return ArrayCollection|Collection
     */
    public function getActivityLogs(): ArrayCollection|Collection
    {
        return $this->activityLogs;
    }

    /**
     * @return User
     */
    public function getEmployee(): User
    {
        return $this->employee;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function ownsSession(UserSession $session): void
    {
        $this->userSessions[] = $session;
    }

    public function addActivityLog(ActivityLog $activityLog): void
    {
        $this->activityLogs[] = $activityLog;
    }
}