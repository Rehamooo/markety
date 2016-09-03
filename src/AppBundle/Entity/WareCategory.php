<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="ware_categories")
 */
class WareCategory
{
    /**
     * @var int
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @var string
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    protected $name;

    /**
     * @var string
     * @ORM\Column(name="canonical_name", type="string", nullable=false)
     */
    protected $canonicalName;


    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="WareCategory",mappedBy="parent" )
     */
    protected $children;

    /**
     * @var Location
     * @ORM\ManyToOne(targetEntity="WareCategory",inversedBy="children")
     */
    protected $parent;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return WareCategory
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set canonicalName
     *
     * @param string $canonicalName
     *
     * @return WareCategory
     */
    public function setCanonicalName($canonicalName)
    {
        $this->canonicalName = $canonicalName;

        return $this;
    }

    /**
     * Get canonicalName
     *
     * @return string
     */
    public function getCanonicalName()
    {
        return $this->canonicalName;
    }

    /**
     * Add child
     *
     * @param \AppBundle\Entity\WareCategory $child
     *
     * @return WareCategory
     */
    public function addChild(\AppBundle\Entity\WareCategory $child)
    {
        $this->children[] = $child;

        return $this;
    }

    /**
     * Remove child
     *
     * @param \AppBundle\Entity\WareCategory $child
     */
    public function removeChild(\AppBundle\Entity\WareCategory $child)
    {
        $this->children->removeElement($child);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set parent
     *
     * @param \AppBundle\Entity\WareCategory $parent
     *
     * @return WareCategory
     */
    public function setParent(\AppBundle\Entity\WareCategory $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \AppBundle\Entity\WareCategory
     */
    public function getParent()
    {
        return $this->parent;
    }
}
