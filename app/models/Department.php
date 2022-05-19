<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;

#[Entity]
class Department
{
    #[Id]
    #[GeneratedValue]
    #[Column(name: 'id', type: Types::INTEGER)]
    private $id;

    #[Column(name: 'name', type: Types::STRING, length: 50)]
    private $name;

    #[\Doctrine\ORM\Mapping\OneToMany(mappedBy: 'department',targetEntity: 'Employee')]
    private $employees;

    public function __construct()
    {
        $this->employees = new ArrayCollection();
    }
}