<?php

namespace Gt\ItBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FirstController extends Controller
{
    public function firstAction()
    {
        return $this->render('GtItBundle:First:first.html.twig');
    }
}
