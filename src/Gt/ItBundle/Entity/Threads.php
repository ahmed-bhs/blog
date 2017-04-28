<?php

namespace Gt\ItBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Threads
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gt\ItBundle\Entity\ThreadRepository")
 */
class Threads
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
     * @ORM\ManyToOne(targetEntity="Gt\ItBundle\Entity\Comment", inversedBy="threads")
     * @ORM\JoinColumn(name="comment_id", referencedColumnName="id",onDelete="CASCADE")
     */
    private  $th;
    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $comment;
  
     /**
     * @var integer
     * 
     * @ORM\Column(name="user_id", type="integer", unique=false,nullable=true)
     * 
     * 
     * 
     */
    private $user_id;



     /**
     * 
     *
     * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;
      


  

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
    return (string) $this->id;
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
    public function getUserId() {
        return $this->user_id;
    }    

        public function setUserId($i) {
      $this->user_id=$i;
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
     * Get comment
     *
     * @return int
     */
    public function getThread()
    {
        return $this->thread;
    }
public function setThread($th)
{
    $this->thread=$th;
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
        

    public function setComment($c)
    {
        $this->comment = $c;

        return $this;
    }
    public function getComment(){
        return $this->comment;
    }


  public function  setComment_id($blog_id)
  {
    $this->comment_id = $blog_id;
  }
    public function  getComment_id()
  {
    return $this->comment_id ;
  }


   public function  getUser_id()
  {
    return $this->user_id; 
  }
   public function  setUser_id($user_id)
  {
    $this->user_id = $user_id;
  }
  public function  setTh($blog_id)
  {
    $this->th = $blog_id;
  }
    public function  getTh()
  {
    return $this->th ;
  }
}
