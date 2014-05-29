<?php

namespace Grade\WebBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Grade\WebBundle\Entity\Grade;

class LoadGradeData implements FixtureInterface {
	
	/**
	 * Loads example Grades.
	 * {@inheritDoc}
	 */
	public function load(ObjectManager $manager) {
		$grade = new Grade();
		$grade->setValue("Test value :)");
		$grade->setGuid( "A-really-cool-test-guid" );
		
		$manager->persist( $grade );
		$manager->flush();
	}
}