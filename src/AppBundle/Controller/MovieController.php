<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Movie;
use AppBundle\Form\MovieType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MovieController extends Controller
{
    /**
     * @Route("/kontakt", name="movies_new")
     */
    public function formAction(Request $request)
    {
        $movie= new Movie();

        $form= $this->createForm(MovieType::class, $movie);
        $form->handleRequest($request);

        if ($form->isValid()) {


            $em = $this->getDoctrine()->getManager();

            $em->persist($movie);

            $em->flush();


            $this->addFlash('success', 'Udało się wysłać wiadomość');

            return $this->redirectToRoute('movies_new', array());
        }

        return $this->render('page/contact.html.twig', array(
            'quote' => 'jest super',
            'form' => $form->createView()
        ));
    }

    /**
     * @Route( "/kontakt/formularz", name="movies_list")
     */
    public function listAction()    {

        $em = $this->getDoctrine()->getManager();
        $movies= $em->getRepository('AppBundle:Movie')
        ->findAll();

        return $this->render('movie/list.html.twig', array(
            'movies' => $movies
        ));
    }
}
