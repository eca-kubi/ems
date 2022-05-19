<?php

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

#[Entity]
class Activity_Log
{
    #[Id]
    #[Column(name: 'id', type: Types::INTEGER)]
    #[GeneratedValue]
    private $id;

    #[Column(name: 'timestamp', type: Types::DATE_IMMUTABLE)]
    private $timestamp;

    #[Column(name: 'activity_type', type: Types::STRING, length: 25)]
    private $activityType;

    #[ManyToOne(targetEntity: 'User', inversedBy: 'activityLogs')]
    #[JoinColumn('user_id', referencedColumnName: 'id')]
    private $user;
}