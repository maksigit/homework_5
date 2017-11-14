<?php

namespace MaksiCompany\MaksiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="home")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        //$this->generateUrl('blog', array('page' => 2)) ;
        var_dump($request->server->all());
        var_dump($_SERVER);
        exit;
        return $this->render('MaksiCompanyMaksiBundle:Default:index.html.twig');
        //return new Response('foo');
    }

    /**
     * @Route("/blog/blog1/{page}", name="blog", requirements={"page": "\d+"})
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function blogAction($page)
    {
        //return $this->render('MaksiCompanyMaksiBundle:Default:blog.html.twig');
        return new JsonResponse(array('page' => $page));
    }
}
