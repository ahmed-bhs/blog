<?php

namespace Gt\ItBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gt\ItBundle\Entity\TagRepository")
 */
class Tag
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;



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
     * Set name
     *
     * @param string $name
     *
     * @return Tag
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    /**
     * Get name
     *
     * @return string
     */
    public function __toString() {
    return $this->name;
}

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

  public function  setBlog_id($blog_id)
  {
    $this->blog_id = $blog_id;
  }
    public function  getBlog_id()
  {
    return $this->blog_id ;
  }
    public function  setBlog($blog_id)
  {
    $this->blog = $blog_id;
  }
    public function  getBlog()
  {
    return $this->blog ;
  }
    
}

