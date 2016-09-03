<?php

namespace markety\OfferBundle\Entity;

use AppBundle\Entity\Account;
use AppBundle\Entity\Post;
use AppBundle\Entity\Location;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="markety\OfferBundle\Repository\ServiceOfferRepository")
 *
 */
class ServiceOffer extends Offer
{

    /**
     * @var Collection
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\SkillTag")
     * @ORM\JoinTable(name="service_tag_relation",
     *     joinColumns={@ORM\JoinColumn(name="service_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="tag_id", referencedColumnName="id")})
     */
    protected $skillTags;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->skillTags = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add skillTag
     *
     * @param \AppBundle\Entity\SkillTag $skillTag
     *
     * @return ServiceOffer
     */
    public function addSkillTag(\AppBundle\Entity\SkillTag $skillTag)
    {
        $this->skillTags[] = $skillTag;

        return $this;
    }

    /**
     * Remove skillTag
     *
     * @param \AppBundle\Entity\SkillTag $skillTag
     */
    public function removeSkillTag(\AppBundle\Entity\SkillTag $skillTag)
    {
        $this->skillTags->removeElement($skillTag);
    }

    /**
     * Get skillTags
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSkillTags()
    {
        return $this->skillTags;
    }
}
