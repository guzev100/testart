<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * birthday_notification_confirm
 *
 * @ORM\Table(name="birthday_notification_confirm")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\birthday_notification_confirmRepository")
 */
class birthday_notification_confirm
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
     * @ORM\Column(name="patientRef", type="string", length=255)
     */
    private $patientRef;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;


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
     * Set patientRef
     *
     * @param string $patientRef
     *
     * @return birthday_notification_confirm
     */
    public function setPatientRef($patientRef)
    {
        $this->patientRef = $patientRef;

        return $this;
    }

    /**
     * Get patientRef
     *
     * @return string
     */
    public function getPatientRef()
    {
        return $this->patientRef;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return birthday_notification_confirm
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return birthday_notification_confirm
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}

