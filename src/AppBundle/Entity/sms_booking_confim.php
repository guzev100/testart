<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sms_booking_confim
 *
 * @ORM\Table(name="sms_booking_confim")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\sms_booking_confimRepository")
 */
class sms_booking_confim
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
     * @ORM\Column(name="BookingID", type="string", length=255)
     */
    private $bookingID;

    /**
     * @var string
     *
     * @ORM\Column(name="PatientRef", type="string", length=255)
     */
    private $patientRef;

    /**
     * @var string
     *
     * @ORM\Column(name="ScheduleRef", type="string", length=255)
     */
    private $scheduleRef;

    /**
     * @var string
     *
     * @ORM\Column(name="BookingStatusRef", type="string", length=255)
     */
    private $bookingStatusRef;

    /**
     * @var string
     *
     * @ORM\Column(name="BookingDate", type="string", length=255)
     */
    private $bookingDate;

    /**
     * @var string
     *
     * @ORM\Column(name="BookingExecutionUserRef", type="string", length=255)
     */
    private $bookingExecutionUserRef;

    /**
     * @var string
     *
     * @ORM\Column(name="UserNameDoctor", type="string", length=255)
     */
    private $userNameDoctor;

    /**
     * @var string
     *
     * @ORM\Column(name="PatientSMSPhone", type="string", length=255)
     */
    private $patientSMSPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="PatientPhone", type="string", length=255)
     */
    private $patientPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="PatientName", type="string", length=255)
     */
    private $patientName;

    /**
     * @var string
     *
     * @ORM\Column(name="ScheduleStatusRef", type="string", length=255)
     */
    private $scheduleStatusRef;

    /**
     * @var string
     *
     * @ORM\Column(name="ScheduleStartTime", type="string", length=255)
     */
    private $scheduleStartTime;

    /**
     * @var string
     *
     * @ORM\Column(name="VenueName", type="string", length=255)
     */
    private $venueName;

    /**
     * @var string
     *
     * @ORM\Column(name="CompanyAddress", type="string", length=255)
     */
    private $companyAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="CrmStatus", type="string", length=255)
     */
    private $crmStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="DateStatusChange", type="string", length=255)
     */
    private $dateStatusChange;

    /**
     * @var string
     *
     * @ORM\Column(name="DateSmsSend", type="string", length=255)
     */
    private $dateSmsSend;

    /**
     * @var string
     *
     * @ORM\Column(name="SmsText", type="string", length=1000)
     */
    private $smsText;


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
     * Set bookingID
     *
     * @param string $bookingID
     *
     * @return sms_booking_confim
     */
    public function setBookingID($bookingID)
    {
        $this->bookingID = $bookingID;

        return $this;
    }

    /**
     * Get bookingID
     *
     * @return string
     */
    public function getBookingID()
    {
        return $this->bookingID;
    }

    /**
     * Set patientRef
     *
     * @param string $patientRef
     *
     * @return sms_booking_confim
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
     * Set scheduleRef
     *
     * @param string $scheduleRef
     *
     * @return sms_booking_confim
     */
    public function setScheduleRef($scheduleRef)
    {
        $this->scheduleRef = $scheduleRef;

        return $this;
    }

    /**
     * Get scheduleRef
     *
     * @return string
     */
    public function getScheduleRef()
    {
        return $this->scheduleRef;
    }

    /**
     * Set bookingStatusRef
     *
     * @param string $bookingStatusRef
     *
     * @return sms_booking_confim
     */
    public function setBookingStatusRef($bookingStatusRef)
    {
        $this->bookingStatusRef = $bookingStatusRef;

        return $this;
    }

    /**
     * Get bookingStatusRef
     *
     * @return string
     */
    public function getBookingStatusRef()
    {
        return $this->bookingStatusRef;
    }

    /**
     * Set bookingDate
     *
     * @param string $bookingDate
     *
     * @return sms_booking_confim
     */
    public function setBookingDate($bookingDate)
    {
        $this->bookingDate = $bookingDate;

        return $this;
    }

    /**
     * Get bookingDate
     *
     * @return string
     */
    public function getBookingDate()
    {
        return $this->bookingDate;
    }

    /**
     * Set bookingExecutionUserRef
     *
     * @param string $bookingExecutionUserRef
     *
     * @return sms_booking_confim
     */
    public function setBookingExecutionUserRef($bookingExecutionUserRef)
    {
        $this->bookingExecutionUserRef = $bookingExecutionUserRef;

        return $this;
    }

    /**
     * Get bookingExecutionUserRef
     *
     * @return string
     */
    public function getBookingExecutionUserRef()
    {
        return $this->bookingExecutionUserRef;
    }

    /**
     * Set userNameDoctor
     *
     * @param string $userNameDoctor
     *
     * @return sms_booking_confim
     */
    public function setUserNameDoctor($userNameDoctor)
    {
        $this->userNameDoctor = $userNameDoctor;

        return $this;
    }

    /**
     * Get userNameDoctor
     *
     * @return string
     */
    public function getUserNameDoctor()
    {
        return $this->userNameDoctor;
    }

    /**
     * Set patientSMSPhone
     *
     * @param string $patientSMSPhone
     *
     * @return sms_booking_confim
     */
    public function setPatientSMSPhone($patientSMSPhone)
    {
        $this->patientSMSPhone = $patientSMSPhone;

        return $this;
    }

    /**
     * Get patientSMSPhone
     *
     * @return string
     */
    public function getPatientSMSPhone()
    {
        return $this->patientSMSPhone;
    }

    /**
     * Set patientPhone
     *
     * @param string $patientPhone
     *
     * @return sms_booking_confim
     */
    public function setPatientPhone($patientPhone)
    {
        $this->patientPhone = $patientPhone;

        return $this;
    }

    /**
     * Get patientPhone
     *
     * @return string
     */
    public function getPatientPhone()
    {
        return $this->patientPhone;
    }

    /**
     * Set patientName
     *
     * @param string $patientName
     *
     * @return sms_booking_confim
     */
    public function setPatientName($patientName)
    {
        $this->patientName = $patientName;

        return $this;
    }

    /**
     * Get patientName
     *
     * @return string
     */
    public function getPatientName()
    {
        return $this->patientName;
    }

    /**
     * Set scheduleStatusRef
     *
     * @param string $scheduleStatusRef
     *
     * @return sms_booking_confim
     */
    public function setScheduleStatusRef($scheduleStatusRef)
    {
        $this->scheduleStatusRef = $scheduleStatusRef;

        return $this;
    }

    /**
     * Get scheduleStatusRef
     *
     * @return string
     */
    public function getScheduleStatusRef()
    {
        return $this->scheduleStatusRef;
    }

    /**
     * Set scheduleStartTime
     *
     * @param string $scheduleStartTime
     *
     * @return sms_booking_confim
     */
    public function setScheduleStartTime($scheduleStartTime)
    {
        $this->scheduleStartTime = $scheduleStartTime;

        return $this;
    }

    /**
     * Get scheduleStartTime
     *
     * @return string
     */
    public function getScheduleStartTime()
    {
        return $this->scheduleStartTime;
    }

    /**
     * Set venueName
     *
     * @param string $venueName
     *
     * @return sms_booking_confim
     */
    public function setVenueName($venueName)
    {
        $this->venueName = $venueName;

        return $this;
    }

    /**
     * Get venueName
     *
     * @return string
     */
    public function getVenueName()
    {
        return $this->venueName;
    }

    /**
     * Set companyAddress
     *
     * @param string $companyAddress
     *
     * @return sms_booking_confim
     */
    public function setCompanyAddress($companyAddress)
    {
        $this->companyAddress = $companyAddress;

        return $this;
    }

    /**
     * Get companyAddress
     *
     * @return string
     */
    public function getCompanyAddress()
    {
        return $this->companyAddress;
    }

    /**
     * Set crmStatus
     *
     * @param string $crmStatus
     *
     * @return sms_booking_confim
     */
    public function setCrmStatus($crmStatus)
    {
        $this->crmStatus = $crmStatus;

        return $this;
    }

    /**
     * Get crmStatus
     *
     * @return string
     */
    public function getCrmStatus()
    {
        return $this->crmStatus;
    }

    /**
     * Set dateStatusChange
     *
     * @param string $dateStatusChange
     *
     * @return sms_booking_confim
     */
    public function setDateStatusChange($dateStatusChange)
    {
        $this->dateStatusChange = $dateStatusChange;

        return $this;
    }

    /**
     * Get dateStatusChange
     *
     * @return string
     */
    public function getDateStatusChange()
    {
        return $this->dateStatusChange;
    }

    /**
     * Set dateSmsSend
     *
     * @param string $dateSmsSend
     *
     * @return sms_booking_confim
     */
    public function setDateSmsSend($dateSmsSend)
    {
        $this->dateSmsSend = $dateSmsSend;

        return $this;
    }

    /**
     * Get dateSmsSend
     *
     * @return string
     */
    public function getDateSmsSend()
    {
        return $this->dateSmsSend;
    }

     /**
     * Set smsText
     *
     * @param string $smsText
     *
     * @return sms_booking_confim
     */
    public function setSmsText($smsText)
    {
        $this->smsText = $smsText;

        return $this;
    }

    /**
     * Get smsText
     *
     * @return string
     */
    public function getSmsText()
    {
        return $this->smsText;
    }
}

