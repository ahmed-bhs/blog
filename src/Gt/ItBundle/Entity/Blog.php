<?php

namespace Gt\ItBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
/**
 * Blog
 * @Vich\Uploadable
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gt\ItBundle\Entity\BlogRepository")
 */
class Blog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
    public $id;
  

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    public $date;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    public $title;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs")
     * @ORM\JoinColumn(nullable=false)
     */
    public $author;


    /**
     * Indicate if the product is enabled (available in store).
     *
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $enabled = false;
    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    public $content;


    /**
    * @ORM\JoinColumn(name="image_id", referencedColumnName="id",  onDelete="SET NULL")
    * @ORM\ManyToOne(targetEntity="Gt\ItBundle\Entity\Image", cascade={"persist"} )
    */
    public $image;

    /**
    * @ORM\OneToMany(targetEntity="Gt\ItBundle\Entity\Comment", mappedBy="blog")
    */
    private $comment;
    /**
     * @ORM\ManyToMany(targetEntity="Gt\ItBundle\Entity\Tag", cascade={"persist"}))
     *
     */
    public $tag;
      /**
    * @ORM\OneToOne(targetEntity="Gt\ItBundle\Entity\Vote", cascade={"persist"})
    */

    public $vote;






    



  
public function __toString()
{
    return (string) $this->title;
}
   




 public function __construct()
  { $this->tag  = new ArrayCollection();
  
    $this->date = new \Datetime();}


public function getVote(){return $this->vote;}
public function setVote($v){$this->vote=$v;}
 public function addTAg(Tag $tag)
  {
    $this->tag[] = $tag;
    return $this;
  }

  public function removeTag(Tag $tag)
  {
    $this->tag->removeElement($tag);
  }

  public function getTag()
  {
    return $this->tag;
  }



    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Blog
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

    /**
     * Set title
     *
     * @param string $title
     * @return Blog
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Blog
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }



    
    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Blog
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }
    /**
     * Set if the product is enable.
     *
     * @param bool $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * Is the product enabled?
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
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
     * Set comment
     *
     * @param string $comment
     * @return Blog
     */
    public function setComment(comment $comment)
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




      public function setImage(Image $image = null)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
  }


   public function setBlog(Blog $blog)
  {
    $this->blog = $blog;

    return $this;
  }

  public function getBlog()
  {
    return $this->blog;
  }




}
