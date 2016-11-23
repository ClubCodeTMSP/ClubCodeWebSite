<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class AteliersController extends Controller
{
    /**
     *
     *  @Route("/ateliers", name="ateliers_show")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAteliers()
    {
        return $this->render('activities/ateliers/index.html.twig');
    }
}
