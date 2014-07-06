<?php

namespace Grade\WebBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Grade\WebBundle\Entity\Grade;
use Grade\WebBundle\Entity\Subject;

class LoadSubjectData extends AbstractFixture implements OrderedFixtureInterface {
	
	/*
	 * (non-PHPdoc)
	 * @see \Doctrine\Common\DataFixtures\OrderedFixtureInterface::getOrder()
	 */
	public function getOrder() {
		// TODO: Auto-generated method stub
		return 1;
	}
	
	/**
	 * Loads example Subjects.
	 * {@inheritDoc}
	 */
	public function load(ObjectManager $manager) {
		$subject1 = new Subject ();
		$subject1->setName ( 'Math' );
		
		$manager->persist ( $subject1 );
		$manager->flush ();
		
		$this->addReference ( 'subject1', $subject1 );
	}
}