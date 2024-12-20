<?php

namespace App\Controller;

use App\Repository\TopicRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\TopicType;
use App\Entity\Topic;

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
