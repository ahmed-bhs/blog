<?php

namespace Gt\ItBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Comment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gt\ItBundle\Entity\CommentRepository")
 */
class Comment
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
     * @ORM\ManyToOne(targetEntity="Gt\ItBundle\Entity\Blog", inversedBy="comment")
     * @ORM\JoinColumn(name="blog_id", referencedColumnName="id",onDelete="CASCADE")
     */
    private $blog;


  
     /**
     * @var integer
     * 
     * @ORM\Column(name="user_id", type="integer", unique=false,nullable=true)
     * 
     * 
     * 
     */
    public $user_id;



     /**
     * 
     *
     * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;
      
    /**
     * @ORM\OneToMany(targetEntity="Gt\ItBundle\Entity\Threads", mappedBy="th")
     */
    private $threads;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

     /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=true)
     */
    private $name;
    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string" , nullable=true)
     */
    private $mail;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

  
public function __toString()
{
    return (string) $this->comment;
}
   

    /**
     * Set user
     *
     * @param string $user
     * @return Comment
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }
     public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }
 public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }
      public function getMail()
    {
        return $this->mail;
    }
      public function getName()
    {
        return $this->name;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Comment
     */
    public function setComment($comment = "a ")
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Comment
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

            public function __construct()
          {
            $this->date = new \Datetime();}
        
    /**
     * Set blog
     *
     * @param integer $blog
     *
     * @return Comment
     */
    public function setBlog($blog)
    {
        $this->blog = $blog;

        return $this;
    }

    /**
     * Get blog
     *
     * @return integer
     */
    public function getBlog()
    {
        return $this->blog;
    }
  public function  setBlog_id($blog_id)
  {
    $this->blog_id = $blog_id;
  }
    public function  getBlog_id()
  {
    return $this->blog_id ;
  }


   public function  getUser_id()
  {
    return $this->user_id; 
  }
   public function  setUser_id($user_id)
  {
    $this->user_id = $user_id;
  }
  public function  setThreads($blog_id)
  {
    $this->threads = $blog_id;
  }
    public function  getThreads()
  {
    return $this->threads ;
  }
}
