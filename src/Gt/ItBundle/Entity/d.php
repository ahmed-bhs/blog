<?php

namespace Gt\ItBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * d
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gt\ItBundle\Entity\dRepository")
 */
class d
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

