<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController

{
    /**
    * @Route("/hello", name="hello")
    */
    public function hello()
    {
        return $this->render('hello.html.twig');
    }

    /**
    * @Route("/homepage", name="homepage")
     */

    public function homepage()
    {
        return $this->render('homepage.html.twig');
    }
}
