<?php

declare(strict_types = 1);

namespace App\Controller;

use App\FizzBuzz\FizzBuzzInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FizzBuzzController extends AbstractController
{
    /**
     * @Route("/", name="app_default", methods={"GET"})
     */
    public function index(FizzBuzzInterface $fizzBuzz): Response
    {
        return new Response(implode('<br>', $fizzBuzz->iterate()));
    }
}
