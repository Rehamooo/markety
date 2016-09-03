<?php

namespace markety\OfferBundle\Controller;

use AppBundle\Entity\Location;
use AppBundle\Entity\SkillTag;
use markety\OfferBundle\Entity\Offer;
use markety\OfferBundle\Entity\ServiceOffer;
use markety\OfferBundle\Repository\ServiceOfferRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class ManagementController extends Controller
{

    public function addAction()
    {
        // check if logged in
        $securityContext = $this->container->get('security.authorization_checker');
        //Please, read more about the roles like IS_AUTHENTICATED_REMEMBERED and IS_AUTHENTICATED_FULLY
        if (!$securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return new Response('Login first');
        }

        //Here we have to fetch the tags and locations, in order to pass to the web

        //entity manager
        $em = $this->get('doctrine.orm.default_entity_manager');

        /**
         * @var $skillTags SkillTag[]
         */
        $skillTags = $em->getRepository(SkillTag::class)->findAll();

        /**
         * @var $locations Location[]
         */
        $locations = $em->getRepository(Location::class)->findAll();

        // you can use var_dump to print the content of a variable. try uncommenting it
        //var_dump($skillTags);


        //IMPORTANT: It's a bad idea to pass all tags and locations to the webpage, because they may be very many.
        // Rather, we later let the web page makes AJAX CALL to the server when the user enters few letters of the name

        return $this->render('marketyOfferBundle:Management:service_add.html.twig' ,
            [
                'tags' => $skillTags,
                'locations' => $locations
            ]
            );
    }

    public function persistAction(Request $request)
    {
        // Firstly , if user is not logged in then do something
        $securityContext = $this->container->get('security.authorization_checker');
        if (!$securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return new Response('Login first'); //This is not final decision! just to show you
        }

        // here we get the parameters of the post request
        $title = $request->get('title');
        $priceLower = $request->get('price_lower');
        $priceUpper = $request->get('price_upper');
        $priceType = $request->get('price_type');
        $tag_id = $request->get('tag');
        $location_id = $request->get('location');

        //TODO here we have to make a lot of validation

        // get a handle to the EntityManager service
        $em = $this->get('doctrine.orm.default_entity_manager');
        // find the tag by its id
        //here i have to validate ID to be int (for sql injection)
        $tag = $em->getRepository(SkillTag::class)->find($tag_id);
        $location = $em->getRepository(Location::class)->find($location_id);
        // here we have to make sure that tag and location were found and not null

        //After we make sure that we want to add the entity, we can call:

        //TODO We have to pass the correct Account later
        if( $em->getRepository(ServiceOffer::class)->addServiceOffer(null, $location, $title, $priceLower, $priceUpper,
            $priceType , $tag))
            return new Response('Done');
        else
            return new Response('Error');
    }
}
