<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     *  @Route("/accueil", name="accueil_show")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     *
     *  @Route("/presentation", name="presentation_show")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showPresentation()
    {
        return $this->render('default/presentation.html.twig');
    }

    /**
     *
     *  @Route("/calendrier", name="calendrier_show")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showCalendar()
    {
        return $this->render('default/calendrier.html.twig');
    }

    /**
     *
     *  @Route("/soirees_code", name="soirees_code_show")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showSoireeCode()
    {
        return $this->render('activities/soirees_code/index.html.twig');
    }
}
