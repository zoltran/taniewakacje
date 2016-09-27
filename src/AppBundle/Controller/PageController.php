<?php
/**
 * Created by PhpStorm.
 * User: zoltran
 * Date: 23.09.16
 * Time: 16:46
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    /**
     * @Route("/oferta", name="ofertPage")
     */
    public function ofertActive()
    {
        return $this->render('page/ofert.html.twig');
    }


    /**
     * @Route("/onas", name="aboutPage")
     */
    public function aboutActive()
    {
        return $this->render('page/about.html.twig');
    }
}