<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersLoc
 *
 * @ORM\Table(name="users_loc")
 * @ORM\Entity
 */
class UsersLoc
{
    /**
     * @var integer
     *
     * @ORM\Column(name="UID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;

    /**
     * @var integer
     *
     * @ORM\Column(name="COORD_X", type="integer", nullable=false)
     */
    private $coordX;

    /**
     * @var integer
     *
     * @ORM\Column(name="COORD_Y", type="integer", nullable=false)
     */
    private $coordY;



    /**
     * Get uid
     *
     * @return integer
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set coordX
     *
     * @param integer $coordX
     *
     * @return UsersLoc
     */
    public function setCoordX($coordX)
    {
        $this->coordX = $coordX;

        return $this;
    }

    /**
     * Get coordX
     *
     * @return integer
     */
    public function getCoordX()
    {
        return $this->coordX;
    }

    /**
     * Set coordY
     *
     * @param integer $coordY
     *
     * @return UsersLoc
     */
    public function setCoordY($coordY)
    {
        $this->coordY = $coordY;

        return $this;
    }

    /**
     * Get coordY
     *
     * @return integer
     */
    public function getCoordY()
    {
        return $this->coordY;
    }
}
