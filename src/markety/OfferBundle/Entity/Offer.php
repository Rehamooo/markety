<?php

namespace markety\OfferBundle\Entity;

use AppBundle\Entity\Account;
use AppBundle\Entity\Post;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="offers")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 */
abstract class Offer
{
    /**
     * @var int
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @var \DateTime
     * @ORM\Column(name="expire", type="datetime")
     */
    protected $expire;

    /**
     * @var float
     * @ORM\Column(name="price_lower", type="float")
     */
    protected $priceLower;

    /**
     * @var float
     * @ORM\Column(name="price_upper", type="float")
     */
    protected $priceUpper;

    /**
     * @var string
     * @ORM\Column(name="price_type", type="string")
     */
    protected $priceType;


    /**
     * @var City
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\City")
     */
    protected $city;


    /**
     * @var Account
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Account")
     */
    protected $account;

    // In fact, its 0..1 to 1 (offer can have a post or not, so post is linked to 0 or 1 offers, because we can link a post to other entities not just offer.
    // that means association key [post_id] is in the offer entity, so we should choose many to one, but we'll not link a post to more than one offer during implementation)
    /**
     * @var Post
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Post")
     */
    protected $post;



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
     * Set expire
     *
     * @param \DateTime $expire
     *
     * @return Offer
     */
    public function setExpire($expire)
    {
        $this->expire = $expire;

        return $this;
    }

    /**
     * Get expire
     *
     * @return \DateTime
     */
    public function getExpire()
    {
        return $this->expire;
    }

    /**
     * Set priceLower
     *
     * @param float $priceLower
     *
     * @return Offer
     */
    public function setPriceLower($priceLower)
    {
        $this->priceLower = $priceLower;

        return $this;
    }

    /**
     * Get priceLower
     *
     * @return float
     */
    public function getPriceLower()
    {
        return $this->priceLower;
    }

    /**
     * Set priceUpper
     *
     * @param float $priceUpper
     *
     * @return Offer
     */
    public function setPriceUpper($priceUpper)
    {
        $this->priceUpper = $priceUpper;

        return $this;
    }

    /**
     * Get priceUpper
     *
     * @return float
     */
    public function getPriceUpper()
    {
        return $this->priceUpper;
    }

    /**
     * Set priceType
     *
     * @param string $priceType
     *
     * @return Offer
     */
    public function setPriceType($priceType)
    {
        //TODO we should constraint the values that could be set here
        $this->priceType = $priceType;
        return $this;
    }

    /**
     * Get priceType
     *
     * @return string
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * Set city
     *
     * @param \AppBundle\Entity\City $city
     *
     * @return Offer
     */
    public function setCity(\AppBundle\Entity\City $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \AppBundle\Entity\City
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set account
     *
     * @param \AppBundle\Entity\Account $account
     *
     * @return Offer
     */
    public function setAccount(\AppBundle\Entity\Account $account = null)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return \AppBundle\Entity\Account
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set post
     *
     * @param \AppBundle\Entity\Post $post
     *
     * @return Offer
     */
    public function setPost(\AppBundle\Entity\Post $post = null)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return \AppBundle\Entity\Post
     */
    public function getPost()
    {
        return $this->post;
    }
}
