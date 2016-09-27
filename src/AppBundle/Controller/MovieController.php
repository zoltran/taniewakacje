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
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $movie= new Movie();

        $form= $this->createForm(MovieType::class, $movie);
        $form->handleRequest($request);
        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($movie);
            $em->flush();

            $this->addFlash('success', 'Udało się wysłać wiadomość');

            return $this->redirectToRoute('formList', array());
        }

        return $this->render('page/contact.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route( "/kontakt/formularz", name="formList")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $movies= $em->getRepository('AppBundle:Movie')
            ->findAll();

        return $this->render('movie/list.html.twig', array(
            'movies' => $movies
        ));
    }
}
