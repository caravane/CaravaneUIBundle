<?php

namespace Caravane\CaravaneUIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DemosController extends Controller
{
    /**
     * @Route("/hello")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
