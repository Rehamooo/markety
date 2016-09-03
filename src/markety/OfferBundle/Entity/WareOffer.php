<?php

namespace markety\OfferBundle\Entity;

use AppBundle\Entity\Account;
use AppBundle\Entity\Post;
use AppBundle\Entity\Location;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class WareOffer extends Offer
{

    /**
     * @var Collection
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\WareCategory")
     * @ORM\JoinTable(name="ware_category_relation",
     *     joinColumns={@ORM\JoinColumn(name="ware_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="category_id", referencedColumnName="id")})
     */
    protected $categories;
}
