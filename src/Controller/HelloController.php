<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController

{

    /**
    * @Route("/homepage", name="homepage")
     */

    public function homepage()
    {
        return $this->render('homepage.html.twig');
    }

    /**
     * @Route("/booklist", name="booklist")
     */

    public function booklist()
    {
        return $this->render('booklist.html.twig');
    }
}
