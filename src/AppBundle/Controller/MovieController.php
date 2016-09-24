<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Movie;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MovieController extends Controller
{
    /**
     * @Route("/kontakt/form", name="formContact", )
     */
    public function indexAction($name)
    {
        $movie= new Movie();
        return $this->render(' default:index.html.twig', array('name' => $name));
    }

    /**
     * @Route( "/kontakt/formularz", name="formList")
     */
    public function listAction()
    {
        return new Response('test')
    }
}
