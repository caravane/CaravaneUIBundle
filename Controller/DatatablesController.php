<?php

namespace Caravane\CaravaneUIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DatatablesController extends Controller
{

	 /**
     * @Route("")
     * @Template()
     */
	public function demoAction()
    {
        return array();
    }

    public function renderAction($name)
    {
        return array('name' => $name);
    }
}
