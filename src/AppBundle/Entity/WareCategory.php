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


}
