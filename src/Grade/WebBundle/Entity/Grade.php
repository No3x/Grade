<?php

namespace Grade\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grade
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Grade\WebBundle\Entity\GradeRepository")
 */
class Grade
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text")
     */
    private $value;

    /**
     * @var guid
     *
     * @ORM\Column(name="guid", type="guid")
     */
    private $guid;
    
    /**
     * @var subjects
     * @ORM\ManyToMany(targetEntity="Subject", mappedBy="grades")
     * @ORM\JoinTable(name="grades_subjects")
     */
    private $subjects;

    function __construct() {
    	$this->subjects = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return Grade
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set guid
     *
     * @param guid $guid
     * @return Grade
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * Get guid
     *
     * @return guid 
     */
    public function getGuid()
    {
        return $this->guid;
    }
    
    /**
     * Add subject
     *
     * @param \Grade\WebBundle\Entity\Subject $subjects
     */
    public function addSubject(\Grade\WebBundle\Entity\Subject $subjects)
    {
    	$this->subjects[] = $subjects;
    }
    
    
}
