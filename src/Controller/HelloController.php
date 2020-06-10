<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('hello/index.html.twig', [
            'controller_name' => 'there',
        ]);
    }

    /**
     * @Route("/hello/{slug}")
     */
    public function name($slug)
    {
        return new Response(sprintf(
            'Hello, %s!',
        $slug
        ));
    }
}
