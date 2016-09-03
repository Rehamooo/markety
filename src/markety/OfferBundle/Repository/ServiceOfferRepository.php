<?php

namespace markety\OfferBundle\Repository;
use AppBundle\Entity\Account;
use AppBundle\Entity\Location;
use AppBundle\Entity\SkillTag;
use markety\OfferBundle\Entity\ServiceOffer;


class ServiceOfferRepository extends OfferRepository
{
    /**
     * @param $title string
     * @param $account Account
     * @param $location Location
     * @param $priceLower float
     * @param $priceUpper float
     * @param $priceType string
     * @param $tag SkillTag
     * @return bool
     */
    public function addServiceOffer($account, $location, $title,$priceLower,$priceUpper, $priceType , $tag){
        $em = $this->getEntityManager();
        $service = new ServiceOffer();
        $service->setAccount($account);
        $service->setCanonicalTitle($title);
        $service->setExpire(new \DateTime());
        $service->setLocation($location);
        $service->setPriceLower($priceLower);
        $service->setPriceUpper($priceUpper);
        $service->setPriceType($priceType);
        $service->setTitle($title);
        $service->addSkillTag($tag);
        $em->persist($service);
        $em->flush();
        return true;
    }
}
