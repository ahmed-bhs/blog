<?php

namespace Gt\ItBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vote
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gt\ItBundle\Entity\VoteRepository")
 */
class Vote
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb", type="integer")
     * @ORM\OneToOne(targetEntity="GtItBundle\Entity\Blog", cascade={"persist"})
     */
    private $nb;


 public function __construct(){

$this->nb=0;
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
     * 
     *
     * @return string
     */
    public function __toString() {
    return (String)($this->id);
}    /**
     * Set nb
     *
     * @param integer $nb
     *
     * @return Vote
     */
    public function setNb($nb)
    {
        $this->nb = $nb;

        return $this;
    }

    /**
     * Get nb
     *
     * @return integer
     */
    public function getNb()
    {
        return $this->nb;
    }
    public function increment(){$this->nb ++;}
}

