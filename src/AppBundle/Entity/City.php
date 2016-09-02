<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\Collection;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="city")
 */
class City
{
    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=100)
     */
    protected $name;

    /**
     * @var string
     * @ORM\Column(name="canonical_name", type="string" , length=100)
     */
    protected $canonicalName;


    /**
     * @var double
     * @ORM\Column(name="longitude", type="decimal", nullable=true, precision=9, scale=6 )
     */
    protected $longitude;

    /**
     * @var double
     * @ORM\Column(name="latitude", type="decimal", nullable=true, precision=9, scale=6)
     */
    protected $latitude;


    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\City",mappedBy="parent" )
     */
    protected $children;

    /**
     * @var City
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\City",inversedBy="children")
     */
    protected $parent;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new ArrayCollection();
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
     * @return City
     */
    public function setName($name)
    {
        $this->name = $name;
        if($this->canonicalName==null)
            $this->canonicalName=$name;

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
     * @return City
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
     * Set longitude
     *
     * @param string $longitude
     *
     * @return City
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return City
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Add child
     *
     * @param \AppBundle\Entity\City $child
     *
     * @return City
     */
    public function addChild(\AppBundle\Entity\City $child)
    {
        $this->children[] = $child;

        return $this;
    }

    /**
     * Remove child
     *
     * @param \AppBundle\Entity\City $child
     */
    public function removeChild(\AppBundle\Entity\City $child)
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
     * @param \AppBundle\Entity\City $parent
     *
     * @return City
     */
    public function setParent(\AppBundle\Entity\City $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \AppBundle\Entity\City
     */
    public function getParent()
    {
        return $this->parent;
    }
}
