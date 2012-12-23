<?php

namespace picsShare\mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('picsSharemainBundle:Default:index.html.twig');
    }
}
