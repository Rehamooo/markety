<?php

namespace markety\UserBundle\Controller;

use AppBundle\Entity\Location;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {

//        $em = $this->get('doctrine.orm.default_entity_manager');
//        $location = $em->getRepository(Location::class)->findAll()[0];
//        foreach ($location->getChildren() as $child)
//            echo $child->getCanonicalName().'<br>';



//        $location = new Location();
//        $location->setName('syria');
//        $location->setCanonicalName('syria');
//
//        $lat = new Location();
//        $lat->setName('Latakia');
//        $lat->setLatitude(11.22);
//        $lat->setLongitude(12.44444);
//        $lat->setParent($ci$locationty);
//
//
//        $tar = new Location();
//        $tar->setName('Tartous');
//        $tar->setLatitude(12.22);
//        $tar->setLongitude(13.44444);
//        $tar->setParent($location);
//
//        $em->persist($location);
//        $em->persist($lat);
//        $em->persist($tar);
//        $em->flush();

//        return new Response('Done!');
//



        return $this->render(':default:index.html.twig');
    }
}
