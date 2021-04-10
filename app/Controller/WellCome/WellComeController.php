<?php

declare(strict_types=1);

namespace App\Controller\WellCome;

use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/test")
 * Class WellCome
 * @package app\Controller\WellCome
 */
class WellComeController
{
    public function wellcomeAction()
    {
        echo '<h1>HELLO</h1>';
    }
}
