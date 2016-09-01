<?php
/**
 * Created by PhpStorm.
 * User: doried
 * Date: 01/09/16
 * Time: 03:36 م
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
* @ORM\Entity
* @ORM\Table(name="contact_info")
* @ORM\InheritanceType("JOINED")
* @ORM\DiscriminatorColumn(name="object_type", type="string")
* @ORM\DiscriminatorMap({"contact_info" = "ContactInfo","contact_info_child" = "ContactInfoChile"})
* */

//* @ORM\DiscriminatorColumn(name="contact_type", type="string")
//* @OsRM\DiscriminatorMap( {"contact_info" = "ContactInfo","contact_info_child" = "ContactInfoChile"} )

abstract class ContactInfo extends MarketyObject
{

    /**
     * @var $type string
     * @ORM\Column(type="string" )
     */
    protected $type;

    /**
     * @var $content string
     * @ORM\Column(type="string" )
     */
    protected $content;


    /**
     * @var $isVerified bool
     * @ORM\Column(type="boolean" )
     */
    protected $isVerified;


}