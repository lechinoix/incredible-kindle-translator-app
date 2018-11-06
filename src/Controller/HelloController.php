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
use Doctrine\Common\Persistence\ObjectManager;

class HelloController extends AbstractController

{
    /**
     * @Route("/homepage", name="homepage")
     */

    public function homepage(Request $request, ObjectManager $manager)
    {
//        la partie "formulaire"
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

        if($form->isSubmitted() && $form->isValid()){
            $manager -> persist($book);
            $manager -> flush();
        }

//      La partie "liste de livres"

        $listed_books = $this->getDoctrine()
            ->getRepository(Book::class)
            ->findAll();

        dump($listed_books);

        if (!$listed_books) {
            $listed_books = array( array(
                'title' => 'no book found' //si pas de livre, cela s'affichera
            ));
        }

//      On affiche le final

        return $this->render('homepage.html.twig', array(
            'formBook' => $form->createView(),
            'books' => $listed_books,
        ));
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

}
