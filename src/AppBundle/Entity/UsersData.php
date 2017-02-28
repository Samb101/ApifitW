<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersData
 *
 * @ORM\Table(name="users_data")
 * @ORM\Entity
 */
class UsersData
{
    /**
     * @var integer
     *
     * @ORM\Column(name="SEQ", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seq;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="LEVEL", type="string", length=30, nullable=false)
     */
    private $level;

    /**
     * @var integer
     *
     * @ORM\Column(name="WEIGHT", type="integer", nullable=false)
     */
    private $weight;

    /**
     * @var integer
     *
     * @ORM\Column(name="HEIGHT", type="integer", nullable=false)
     */
    private $height;

    /**
     * @var string
     *
     * @ORM\Column(name="GENDER", type="string", length=8, nullable=false)
     */
    private $gender;

    /**
     * @var integer
     *
     * @ORM\Column(name="AGE", type="integer", nullable=false)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="DATE_OF_BIRTH", type="string", length=8, nullable=false)
     */
    private $dateOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="TIMEZONE", type="string", length=30, nullable=false)
     */
    private $timezone;

    /**
     * @var integer
     *
     * @ORM\Column(name="STRIDE_LENGHT_RUNNING", type="integer", nullable=false)
     */
    private $strideLenghtRunning;

    /**
     * @var integer
     *
     * @ORM\Column(name="STRIDE_LENGHT_WALKING", type="integer", nullable=false)
     */
    private $strideLenghtWalking;

    /**
     * @var string
     *
     * @ORM\Column(name="STRIDE_LENGHT_RUNNING_TYPE", type="string", length=30, nullable=false)
     */
    private $strideLenghtRunningType;

    /**
     * @var string
     *
     * @ORM\Column(name="STRIDE_LENGHT_WALKING_TYPE", type="string", length=30, nullable=false)
     */
    private $strideLenghtWalkingType;



    /**
     * Get seq
     *
     * @return integer
     */
    public function getSeq()
    {
        return $this->seq;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return UsersData
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return UsersData
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set level
     *
     * @param string $level
     *
     * @return UsersData
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     *
     * @return UsersData
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set height
     *
     * @param integer $height
     *
     * @return UsersData
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return UsersData
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return UsersData
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set dateOfBirth
     *
     * @param string $dateOfBirth
     *
     * @return UsersData
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set timezone
     *
     * @param string $timezone
     *
     * @return UsersData
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set strideLenghtRunning
     *
     * @param integer $strideLenghtRunning
     *
     * @return UsersData
     */
    public function setStrideLenghtRunning($strideLenghtRunning)
    {
        $this->strideLenghtRunning = $strideLenghtRunning;

        return $this;
    }

    /**
     * Get strideLenghtRunning
     *
     * @return integer
     */
    public function getStrideLenghtRunning()
    {
        return $this->strideLenghtRunning;
    }

    /**
     * Set strideLenghtWalking
     *
     * @param integer $strideLenghtWalking
     *
     * @return UsersData
     */
    public function setStrideLenghtWalking($strideLenghtWalking)
    {
        $this->strideLenghtWalking = $strideLenghtWalking;

        return $this;
    }

    /**
     * Get strideLenghtWalking
     *
     * @return integer
     */
    public function getStrideLenghtWalking()
    {
        return $this->strideLenghtWalking;
    }

    /**
     * Set strideLenghtRunningType
     *
     * @param string $strideLenghtRunningType
     *
     * @return UsersData
     */
    public function setStrideLenghtRunningType($strideLenghtRunningType)
    {
        $this->strideLenghtRunningType = $strideLenghtRunningType;

        return $this;
    }

    /**
     * Get strideLenghtRunningType
     *
     * @return string
     */
    public function getStrideLenghtRunningType()
    {
        return $this->strideLenghtRunningType;
    }

    /**
     * Set strideLenghtWalkingType
     *
     * @param string $strideLenghtWalkingType
     *
     * @return UsersData
     */
    public function setStrideLenghtWalkingType($strideLenghtWalkingType)
    {
        $this->strideLenghtWalkingType = $strideLenghtWalkingType;

        return $this;
    }

    /**
     * Get strideLenghtWalkingType
     *
     * @return string
     */
    public function getStrideLenghtWalkingType()
    {
        return $this->strideLenghtWalkingType;
    }
}
