<?php

namespace CarRentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CarRentBundle:Default:index.html.twig');
    }
	
	public function carAction()
    {
        return $this->render('CarRentBundle:Default:car.html.twig');
    }
}
