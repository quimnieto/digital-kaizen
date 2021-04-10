<?php

declare(strict_types=1);

namespace App\Controller\WellCome;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WellComeController extends AbstractController
{
    /**
     * @Route("/", name="homepage", stateless=true)
     * @return Response
     */
    public function wellcome()
    {
        return $this->render(
            'test.html.twig',
            [
                'status' => 1
            ]);
    }
}
