<?php
namespace App\Controller;

use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Book;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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

    /**
     * @Route("/reception", name="reception")
     */

    public function reception()
    {
        return $this->render('booklist.html.twig');
    }

    /**
     * @Route("/new", name="new")
     */

    public function new(Request $request)
    {

        $book = new Book();

        $form = $this->createFormBuilder($book)
            ->add('title', TextType::class, [
                'attr' => [
                    'placeholder' => "titre du livre"
                ]
            ])
            ->add('owner_id')
            ->add('file_name')
            ->getForm();

        $form->handleRequest($request);

        dump($book);

//        $book->setBookId(rand(0,32767));
//        $book->setOwnerId(42);
//        $book->setName('fake book name');

        return $this->render('/new.html.twig', array(
            'formBook' => $form->createView(),
        ));
    }

}
