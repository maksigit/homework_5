<?php

namespace MaksiCompany\MaksiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContentController extends Controller
{

    /**
     * @Route("/content/", name="content")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function ContentAction(Request $request)
    {

//        $this->get('Paran')->perim(25, 98);
//        $posts = [
//            'post1',
//            'post2',
//            'post3',
//            'post4',
//        ];
        return $this->render('MaksiCompanyMaksiBundle:content:content.html.twig', [
//            'posts' => $posts
        ]);

    }
}
