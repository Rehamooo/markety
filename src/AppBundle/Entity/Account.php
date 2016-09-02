<?php

namespace AppBundle\Entity;

use AppBundle\Exceptions\UnsupportedAccountTypeException;
use Doctrine\Common\Collections\Collection;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="account")
 */
class Account
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
     * @ORM\Column(name="type", type="string", nullable=false , length=20)
     */
    protected $type;


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
     * Set type
     * @param string $type
     * @return Account
     * @throws UnsupportedAccountTypeException if $type value is not valid
     */
    public function setType($type)
    {
        //TODO put constraints on acceptable types
        if( array_search($type,["user","org"]) == false)
            throw new UnsupportedAccountTypeException();
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
