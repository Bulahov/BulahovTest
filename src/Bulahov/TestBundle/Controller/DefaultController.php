<?php

namespace Bulahov\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('BulahovTestBundle:Default:index.html.twig');
    }
}
