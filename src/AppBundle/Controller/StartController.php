<?php
/**
 * Created by PhpStorm.
 * User: marek
 * Date: 21.09.16
 * Time: 10:38
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class StartController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $jola = 'jak się miewacie? ';
        return $this->render('base.html.twig', array(
            'marek' => $jola,
            'michal' => 'testowo'
        ));
    }

}