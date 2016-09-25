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
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MovieRepository")
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
     * @ORM\Column(type="string")
     */
    private $name;
    
    /**
     * @ORM\Column(type="string")
     */
    private $surname;
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