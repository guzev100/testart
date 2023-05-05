<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * adminusers_role
 *
 * @ORM\Table(name="adminusers_role")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\adminusers_roleRepository")
 */
class adminusers_role
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="id_role", type="string", length=255)
     */
    private $idRole;

    /**
     * @var string
     *
     * @ORM\Column(name="name_role", type="string", length=255)
     */
    private $nameRole;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idRole
     *
     * @param string $idRole
     *
     * @return adminusers_role
     */
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;

        return $this;
    }

    /**
     * Get idRole
     *
     * @return string
     */
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * Set nameRole
     *
     * @param string $nameRole
     *
     * @return adminusers_role
     */
    public function setNameRole($nameRole)
    {
        $this->nameRole = $nameRole;

        return $this;
    }

    /**
     * Get nameRole
     *
     * @return string
     */
    public function getNameRole()
    {
        return $this->nameRole;
    }
}

