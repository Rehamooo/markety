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
* @ORM\Table(name="contact_info_child")
*/
class ContactInfoChile extends ContactInfo
{

    /**
     * @var $type string
     * @ORM\Column(type="string" )
     */
    protected $bana;




    /**
     * Set bana
     *
     * @param string $bana
     *
     * @return ContactInfoChile
     */
    public function setBana($bana)
    {
        $this->bana = $bana;

        return $this;
    }

    /**
     * Get bana
     *
     * @return string
     */
    public function getBana()
    {
        return $this->bana;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return ContactInfoChile
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return ContactInfoChile
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
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
     * Set isVerified
     *
     * @param boolean $isVerified
     *
     * @return ContactInfoChile
     */
    public function setIsVerified($isVerified)
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    /**
     * Get isVerified
     *
     * @return boolean
     */
    public function getIsVerified()
    {
        return $this->isVerified;
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
}
