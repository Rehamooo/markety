<?php

namespace markety\OfferBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class ManagementController extends Controller
{

    public function addAction()
    {
        return new Response("Hello from add action.");
    }
}
