<?php

namespace markety\UserBundle\Controller;

use AppBundle\Entity\ContactInfoChile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function indexAction()
    {

        $service = $this->get('doctrine.orm.default_entity_manager');


        $child = $service->getRepository(ContactInfoChile::class)->find(1);
        echo $child->getBana().'<br>'.$child->getContent().'<br>';
//        $child = new ContactInfoChile();
//        $child->setBana('Hi bana');
//        $child->setContent('Hi content');
//        $child->setIsVerified(true);
//        $child->setType('Type');
//        $service->persist($child);
//        $service->flush();

       // return new Response('Done!');


        return $this->render(':default:index.html.twig');
    }
}
