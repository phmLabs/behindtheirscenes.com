<?php

namespace Bts\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BtsFrontendBundle:Default:index.html.twig', array(''));
    }
}
