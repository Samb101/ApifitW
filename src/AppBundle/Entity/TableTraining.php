<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TableTraining
 *
 * @ORM\Table(name="table_training")
 * @ORM\Entity
 */
class TableTraining
{
    /**
     * @var integer
     *
     * @ORM\Column(name="TID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPORT", type="string", length=30, nullable=false)
     */
    private $sport;

    /**
     * @var string
     *
     * @ORM\Column(name="LEVEL", type="string", length=30, nullable=false)
     */
    private $level;

    /**
     * @var integer
     *
     * @ORM\Column(name="TIME", type="integer", nullable=false)
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTENT", type="string", length=255, nullable=false)
     */
    private $content;



    /**
     * Get tid
     *
     * @return integer
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set sport
     *
     * @param string $sport
     *
     * @return TableTraining
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
     * Set level
     *
     * @param string $level
     *
     * @return TableTraining
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
     * Set time
     *
     * @param integer $time
     *
     * @return TableTraining
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return integer
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return TableTraining
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
}
