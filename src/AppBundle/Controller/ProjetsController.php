<?php
//src/AppBundle.Controller/ProjetsController.php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class ProjetsController extends Controller
{
    /**
     * Matches /projets/*
     *  @Route("/projets/{year}/{slug}", name="project_show",
     *     requirements={"year": "\d+"})
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showSpecificProjet($year,$slug)
    {
        $template = 'projects/' . $year . '/' . $slug . '.html.twig';
        return $this->render($template);
    }

    /**
     *
     *  @Route("/projets", name="projects_index_show")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showIndex()
    {
        return $this->render('projects/index.html.twig');
    }

}
