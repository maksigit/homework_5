<?php

namespace MaksiCompany\MaksiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use MaksiCompany\MaksiBundle\Entity\Product;

class DefaultController extends Controller
{
    /**
     * @Route("/db", name="db")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createAction()
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: createAction(EntityManagerInterface $em)
        $em = $this->getDoctrine()->getManager();

        $product = new Product();
        $product->setName('Keyboard');
        $product->setPrice(19.99);
        $product->setDescription('Ergonomic and stylish!');

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();

        return new Response('Saved new product with id '.$product->getId());
    }

// if you have multiple entity managers, use the registry to fetch them
    public function editAction()
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $em2 = $doctrine->getManager('other_connection');
    }

    /**
     * @Route("/", name="home")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        //$this->generateUrl('blog', array('page' => 2)) ;
//        var_dump($request->server->all());
//        var_dump($_SERVER);
//        exit;
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
