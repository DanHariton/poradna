<?php

namespace Poradna\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PoradnaPageBundle:Default:index.html.twig');
    }
}
