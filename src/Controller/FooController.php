<?php

namespace App\Controller;

use App\Service\FooService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api")
 */
class FooController extends AbstractController
{
    private $fooService;

    public function __construct(FooService $fooService)
    {
        $this->fooService = $fooService;
    }

    /**
     * @Route("/foo", methods={"GET"})
     */
    public function index() 
    {
        $allFoos = $this->fooService->getAll();

        print_r($allFoos);die;
    }
}