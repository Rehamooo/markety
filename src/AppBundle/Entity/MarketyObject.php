<?php
/**
 * Created by PhpStorm.
 * User: doried
 * Date: 27/08/16
 * Time: 10:13 ص
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="markety_object")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="object_type", type="string")
 * @ORM\DiscriminatorMap( {"contact_info" = "ContactInfo", "markety_object"="MarketyObject"} )
 **/

class MarketyObject
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
    }
}