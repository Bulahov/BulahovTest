<?php

namespace Bulahov\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class SuccessController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('BulahovTestBundle:Success:index.html.twig');
    }
}
