<?php

declare(strict_types=1);

namespace App\Controller\Login;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login", stateless=true)
     * @return Response
     */
    public function loginForm()
    {
        return $this->render(
            'Login\login.html.twig',
            [
                'status' => 1
            ]);
    }
}
