<?php

namespace Grade\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Grade\WebBundle\Entity\Grade;

class GradeController extends Controller
{
    /**
     * @Route("/Grade/view")
     * @Template()
     */
    public function viewAction()
    {
 		$em = $this->getDoctrine()->getManager();
 		$repo = $em->getRepository("GradeWebBundle:Grade");
 		$grades = $repo->findAll();
 		
 		if( !$grades ) {
 			throw $this->createNotFoundException("No grades found");
 		}
 		
 		return array( "grades" => $grades);
    }

}
