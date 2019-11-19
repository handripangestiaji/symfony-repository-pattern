<?php

namespace App\Controller;

use App\Service\FooService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Traits\ApiResponse;

/**
 * @Route("/api")
 */
class FooController extends AbstractController
{
    use ApiResponse;

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

        return $this->sendSuccessResponse($allFoos, 'Data has been succesfully retrieved');
    }
}