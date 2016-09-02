<?php

namespace markety\UserBundle\Controller;

use AppBundle\Entity\City;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {

//        $em = $this->get('doctrine.orm.default_entity_manager');
//        $city = $em->getRepository(City::class)->findAll()[0];
//        foreach ($city->getChildren() as $child)
//            echo $child->getCanonicalName().'<br>';



//        $city = new City();
//        $city->setName('syria');
//        $city->setCanonicalName('syria');
//
//        $lat = new City();
//        $lat->setName('Latakia');
//        $lat->setLatitude(11.22);
//        $lat->setLongitude(12.44444);
//        $lat->setParent($city);
//
//
//        $tar = new City();
//        $tar->setName('Tartous');
//        $tar->setLatitude(12.22);
//        $tar->setLongitude(13.44444);
//        $tar->setParent($city);
//
//        $em->persist($city);
//        $em->persist($lat);
//        $em->persist($tar);
//        $em->flush();

//        return new Response('Done!');
//



        return $this->render(':default:index.html.twig');
    }
}
