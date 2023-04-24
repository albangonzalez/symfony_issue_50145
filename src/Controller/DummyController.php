<?php

namespace App\Controller;

use App\Form\DummyType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DummyController extends AbstractController
{
    #[Route('/', name: 'app_dummy')]
    public function index(FormFactoryInterface $formFactory): Response
    {
        $form = $formFactory->createNamed('', DummyType::class, null, [
            'attr' => [ 'id' => 'my_dummy_id', 'class' => 'my_dummy_class' ]
        ]);

        return $this->render('dummy/index.html.twig', [
            'form' => $form,
        ]);
    }
}
