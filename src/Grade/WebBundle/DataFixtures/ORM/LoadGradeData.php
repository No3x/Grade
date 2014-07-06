<?php

namespace Grade\WebBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Grade\WebBundle\Entity\Grade;
use Grade\WebBundle\Entity\Subject;

class LoadGradeData extends AbstractFixture implements OrderedFixtureInterface {
	
	/*
	 * (non-PHPdoc)
	 * @see \Doctrine\Common\DataFixtures\OrderedFixtureInterface::getOrder()
	 */
	public function getOrder() {
		// TODO: Auto-generated method stub
		return 2;
	}
	
	/**
	 * Loads example Grades.
	 * {@inheritDoc}
	 */
	public function load(ObjectManager $manager) {
		$grade = new Grade ();
		$grade->setValue ( "Test value :)" );
		$grade->setGuid ( "A-really-cool-test-guid" );
		
		$grade->addSubject ( $this->getReference ( 'subject1' ) );
		
		$manager->persist ( $grade );
		$manager->flush ();
	}
}