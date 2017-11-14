<?php

namespace MaksiCompany\MaksiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends Controller
{

    /**
     * @Route("/base", name="primery")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function BaseAction(Request $request)
    {

        return $this->render('MaksiCompanyMaksiBundle:base:base.html.twig');

    }
}
