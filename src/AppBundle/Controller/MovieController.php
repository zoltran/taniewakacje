<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Movie;
use AppBundle\Form\MovieType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MovieController extends Controller
{
    /**
     * @Route("/kontakt/form", name="formContact")
     */
    public function indexAction()
    {
        $movie= new Movie();
        
        $form= $this->createForm(MovieType::class, $movie);

        return $this->render('page/contact.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route( "/kontakt/formularz", name="formList")
     */
    public function listAction()
    {
        return new Response('test');
    }
}
