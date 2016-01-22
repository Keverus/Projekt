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
	
	public function osoboweAction()
    {
        return $this->render('CarRentBundle:Default:osobowe.html.twig');
    }
	
	public function dostawczeAction()
    {
        return $this->render('CarRentBundle:Default:dostawcze.html.twig');
    }
	
	public function popularneAction()
    {
        return $this->render('CarRentBundle:Default:popularne.html.twig');
    }
	
	public function ocenianeAction()
    {
        return $this->render('CarRentBundle:Default:oceniane.html.twig');
    }
	
	public function warunkiAction()
    {
        return $this->render('CarRentBundle:Default:warunki.html.twig');
    }
	
	public function os1Action()
    {
        return $this->render('CarRentBundle:Default:1.html.twig');
    }
	
	public function os2Action()
    {
        return $this->render('CarRentBundle:Default:2.html.twig');
    }
	
	public function os3Action()
    {
        return $this->render('CarRentBundle:Default:3.html.twig');
    }
	
	public function do1Action()
    {
        return $this->render('CarRentBundle:Default:4.html.twig');
    }
	
	public function do2Action()
    {
        return $this->render('CarRentBundle:Default:5.html.twig');
    }
}
