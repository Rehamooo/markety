<?php

namespace markety\OfferBundle\Entity;

use AppBundle\Entity\Account;
use AppBundle\Entity\Post;
use AppBundle\Entity\Location;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
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
}
