<?php

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

#[\Doctrine\ORM\Mapping\Table(name: 'user_session')]
#[Entity(repositoryClass: 'UserSessionRepository')]
class UserSession
{
    #[ID]
    #[Column(name: 'id',type: Types::INTEGER)]
    #[GeneratedValue]
    private $id;

    #[ManyToOne(targetEntity: 'User',inversedBy: 'userSessions')]
    #[JoinColumn(name: 'user_id', referencedColumnName: 'id')]
    private User $user;

    #[Column(name: 'login_time', type: Types::DATETIME_IMMUTABLE, options: ['default'=> 'CURRENT_TIMESTAMP'])]
    private $loginTime;

    public function __construct(User $user)
    {
        // Doctrine cannot magically update collections to be consistent, thus, this will ensure Consistency of bi-directional references.
        $this->belongsTo($user);
        $user->ownsSession($this);
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
    public function getLoginTime(): DateTimeImmutable
    {
        return $this->loginTime;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    public function belongsTo(User $user): void
    {
        $this->user = $user;
    }


}