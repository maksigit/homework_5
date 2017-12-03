<?php

namespace MaksiCompany\MaksiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use MaksiCompany\MaksiBundle\Entity\Author;

class AuthorController extends Controller
{
    /**
     * @Route("/author", name="author")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function authorAction()
    {
        $author = new Author();

        // ... do something to the $author object

        $validator = $this->get('validator');
        $errors = $validator->validate($author);

//        if (count($errors) > 0) {
//            /*
//             * Uses a __toString method on the $errors variable which is a
//             * ConstraintViolationList object. This gives us a nice string
//             * for debugging.
//             */
//            $errorsString = (string) $errors;
//
//            return new Response($errorsString);
//        }

//        return new Response('The author is valid! Yes!');
        return $this->render('MaksiCompanyMaksiBundle:author:author.html.twig');
    }
}
