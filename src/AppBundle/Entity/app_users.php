<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * app_users
 *
 * @ORM\Table(name="app_users")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\app_usersRepository")
 */
class app_users
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
     * @ORM\Column(name="login", type="string", length=255)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="last_sign_in", type="string", length=255)
     */
    private $lastSignIn;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_blocked", type="boolean")
     */
    private $isBlocked;

    /**
     * @var string
     *
     * @ORM\Column(name="push_notif", type="string", length=255)
     */
    private $pushNotif;

    /**
     * @var string
     *
     * @ORM\Column(name="app_version", type="string", length=255)
     */
    private $appVersion;


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
     * Set login
     *
     * @param string $login
     *
     * @return app_users
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set lastSignIn
     *
     * @param string $lastSignIn
     *
     * @return app_users
     */
    public function setLastSignIn($lastSignIn)
    {
        $this->lastSignIn = $lastSignIn;

        return $this;
    }

    /**
     * Get lastSignIn
     *
     * @return string
     */
    public function getLastSignIn()
    {
        return $this->lastSignIn;
    }

    /**
     * Set isBlocked
     *
     * @param boolean $isBlocked
     *
     * @return app_users
     */
    public function setIsBlocked($isBlocked)
    {
        $this->isBlocked = $isBlocked;

        return $this;
    }

    /**
     * Get isBlocked
     *
     * @return bool
     */
    public function getIsBlocked()
    {
        return $this->isBlocked;
    }

    /**
     * Set pushNotif
     *
     * @param string $pushNotif
     *
     * @return app_users
     */
    public function setPushNotif($pushNotif)
    {
        $this->pushNotif = $pushNotif;

        return $this;
    }

    /**
     * Get pushNotif
     *
     * @return string
     */
    public function getPushNotif()
    {
        return $this->pushNotif;
    }

    /**
     * Set appVersion
     *
     * @param string $appVersion
     *
     * @return app_users
     */
    public function setAppVersion($appVersion)
    {
        $this->appVersion = $appVersion;

        return $this;
    }

    /**
     * Get appVersion
     *
     * @return string
     */
    public function getAppVersion()
    {
        return $this->appVersion;
    }
}

