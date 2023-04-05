<?php

namespace App\Controller;

use App\Repository\AutosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AutoController extends AbstractController
{
    #[Route('/auto', name: 'app_auto')]
    public function index(AutosRepository $autosRepository): Response
    {

        $autodata = $autosRepository->findAll();


        return $this->render('auto/index.html.twig', [
            'autodatas' => $autodata,
        ]);
    }
}
