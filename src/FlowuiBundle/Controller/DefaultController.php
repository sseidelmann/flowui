<?php

namespace FlowuiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FlowuiBundle:Default:index.html.twig');
    }
}
