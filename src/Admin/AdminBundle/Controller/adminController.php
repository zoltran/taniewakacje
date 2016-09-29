<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class adminController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('admin/admin_dashboard.html.twig', array('name' => $name));
    }
}
