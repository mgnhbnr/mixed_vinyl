<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class QuestionController
{
    #[Route('/')]
    public function homepage() {
        return new Response('welcome test');
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null) {

        if ($slug) {
            $title = 'Genre: '.u(str_replace('-', ' ', $slug)) -> title(true);
        }
        else {
            $title = 'All Genres';
        }

        return new Response($title);
    }
}

// u and title(true) turns every first letter within a string into Uppercase

//#[Route("/articles/{category}/{page}/{highlight}")]
//public function article($page, $category): Response
//{
//}
