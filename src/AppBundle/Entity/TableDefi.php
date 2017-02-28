<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TableDefi
 *
 * @ORM\Table(name="table_defi")
 * @ORM\Entity
 */
class TableDefi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="DID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $did;

    /**
     * @var integer
     *
     * @ORM\Column(name="LEVEL", type="integer", nullable=false)
     */
    private $level;

    /**
     * @var integer
     *
     * @ORM\Column(name="XP", type="integer", nullable=false)
     */
    private $xp;

    /**
     * @var string
     *
     * @ORM\Column(name="SPORT", type="string", length=30, nullable=false)
     */
    private $sport;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTENT", type="string", length=255, nullable=false)
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="PROGRESS", type="integer", nullable=false)
     */
    private $progress;



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
     * Set level
     *
     * @param integer $level
     *
     * @return TableDefi
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set xp
     *
     * @param integer $xp
     *
     * @return TableDefi
     */
    public function setXp($xp)
    {
        $this->xp = $xp;

        return $this;
    }

    /**
     * Get xp
     *
     * @return integer
     */
    public function getXp()
    {
        return $this->xp;
    }

    /**
     * Set sport
     *
     * @param string $sport
     *
     * @return TableDefi
     */
    public function setSport($sport)
    {
        $this->sport = $sport;

        return $this;
    }

    /**
     * Get sport
     *
     * @return string
     */
    public function getSport()
    {
        return $this->sport;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return TableDefi
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set progress
     *
     * @param integer $progress
     *
     * @return TableDefi
     */
    public function setProgress($progress)
    {
        $this->progress = $progress;

        return $this;
    }

    /**
     * Get progress
     *
     * @return integer
     */
    public function getProgress()
    {
        return $this->progress;
    }
}
