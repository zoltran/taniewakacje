<?php


namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class PageController extends Controller
{
    /**
     * @return Response
     * @Route("/oferta", name="ofertPage")
     */
    public function ofertAction()
    {
        return $this->render('page/ofert.html.twig', array(
            'marek' => 'testowo marek pisze'
        ));
    }
}