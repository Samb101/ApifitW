<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersFriends
 *
 * @ORM\Table(name="users_friends")
 * @ORM\Entity
 */
class UsersFriends
{
    /**
     * @var integer
     *
     * @ORM\Column(name="UID_REL", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uidRel;

    /**
     * @var integer
     *
     * @ORM\Column(name="UID1", type="integer", nullable=false)
     */
    private $uid1;

    /**
     * @var integer
     *
     * @ORM\Column(name="UID2", type="integer", nullable=false)
     */
    private $uid2;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUT", type="string", length=30, nullable=false)
     */
    private $statut;



    /**
     * Get uidRel
     *
     * @return integer
     */
    public function getUidRel()
    {
        return $this->uidRel;
    }

    /**
     * Set uid1
     *
     * @param integer $uid1
     *
     * @return UsersFriends
     */
    public function setUid1($uid1)
    {
        $this->uid1 = $uid1;

        return $this;
    }

    /**
     * Get uid1
     *
     * @return integer
     */
    public function getUid1()
    {
        return $this->uid1;
    }

    /**
     * Set uid2
     *
     * @param integer $uid2
     *
     * @return UsersFriends
     */
    public function setUid2($uid2)
    {
        $this->uid2 = $uid2;

        return $this;
    }

    /**
     * Get uid2
     *
     * @return integer
     */
    public function getUid2()
    {
        return $this->uid2;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return UsersFriends
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }
}
