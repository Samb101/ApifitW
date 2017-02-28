<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersDefi
 *
 * @ORM\Table(name="users_defi")
 * @ORM\Entity
 */
class UsersDefi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="UDID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $udid;

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
     * @var integer
     *
     * @ORM\Column(name="DID", type="integer", nullable=false)
     */
    private $did;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUT", type="string", length=30, nullable=false)
     */
    private $statut;



    /**
     * Get udid
     *
     * @return integer
     */
    public function getUdid()
    {
        return $this->udid;
    }

    /**
     * Set uid1
     *
     * @param integer $uid1
     *
     * @return UsersDefi
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
     * @return UsersDefi
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
     * Set did
     *
     * @param integer $did
     *
     * @return UsersDefi
     */
    public function setDid($did)
    {
        $this->did = $did;

        return $this;
    }

    /**
     * Get did
     *
     * @return integer
     */
    public function getDid()
    {
        return $this->did;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return UsersDefi
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
