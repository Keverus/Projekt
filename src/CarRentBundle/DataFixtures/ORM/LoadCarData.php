<?php

namespace CarRentBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use CarRentBundle\Entity\Car;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $car1 = new Car();
        $car1->setName('Ford Mondeo V');
        $car1->setYear('2015');
	    $car1->setEngine('1.5 EcoBoost 160KM');
	    $car1->setAcceleration('9,1s');
		
		$car2 = new Car();
        $car2->setName('Fiat Tipo II');
        $car2->setYear('2016');
	    $car2->setEngine('1.4 95KM');
	    $car2->setAcceleration('11,5s');
		
		$car3 = new Car();
        $car3->setName('Ferrari 458 Italia');
        $car3->setYear('2011');
	    $car3->setEngine('4.5 V8 570KM');
	    $car3->setAcceleration('3,4s');
		
		$car4 = new Car();
        $car4->setName('Volkswagen Transporter');
        $car4->setYear('2013');
	    $car4->setEngine('2.5 TDI 139KM');
	    $car4->setAcceleration('11,9s');
		
		$car5 = new Car();
        $car5->setName('Ford Transit');
        $car5->setYear('2012');
	    $car5->setEngine('2.9 TDI 159KM');
	    $car5->setAcceleration('10,4s');
		
        $manager->persist($car1);
		$manager->persist($car2);
		$manager->persist($car3);
		$manager->persist($car4);
		$manager->persist($car5);
        $manager->flush();
    }
}