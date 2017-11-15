<?php

namespace MaksiCompany\MaksiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends Controller
{

    /**
     * @Route("/post", name="post")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function PostAction(Request $request)
    {

        return $this->render('MaksiCompanyMaksiBundle:post:post.html.twig');

    }
}
