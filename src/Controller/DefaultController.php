<?php

namespace App\Controller;

use App\Repository\TopicRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(TopicRepository $topicRepository): Response
    {
        $topics = $topicRepository->findAll();

        return $this->render('default/index.html.twig', [
            'topics' => $topics,
        ]);
    }
}
