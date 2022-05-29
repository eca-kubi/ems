<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;

#[Entity(repositoryClass: 'DepartmentRepository')]
class Department
{
    #[Id]
    #[GeneratedValue]
    #[Column(name: 'id', type: Types::INTEGER)]
    private $id;

    #[Column(name: 'name', type: Types::STRING, length: 50)]
    private $name;

    /**
     * @return mixed
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName() :string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
}