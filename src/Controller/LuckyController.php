<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController

{
    /**
    * @Route("/lucky/number", name="lucky")
    */
    public function number()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

    /**
    * @Route("/", name="home")
    */
    public function home()
    {
        return new Response(
            '<html><body><h1>Hello World !</h1></body></body></html>'
        );
    }
}
