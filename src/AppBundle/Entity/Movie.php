<?php
/**
 * Created by PhpStorm.
 * User: zoltran
 * Date: 24.09.16
 * Time: 20:00
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="MovieRepository")
 * @ORM\Table(name="movie")
 */
class Movie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $surname;

    /**
     * @ORM\Column(type="string")
     */
    private $messegeText;

    /**
     * @ORM\Column(type="date")
     */
    private $dateMassege
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @return mixed
     */
    public function getDateMassege()
    {
        return $this->dateMassege;
    }
    
    /**
     * @param mixed $dateMassege
     */
    public function setDateMassege($dateMassege)
    {
        $this->dateMassege = $dateMassege;
    }
    
    /**
     * @return mixed
     */
    public function getMessegeText()
    {
        return $this->messegeText;
    }
    
    /**
     * @param mixed $messegeText
     */
    public function setMessegeText($messegeText)
    {
        $this->messegeText = $messegeText;
    }
    
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }
    
    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    
    
}