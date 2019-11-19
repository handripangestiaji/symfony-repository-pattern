<?php

namespace App\Service;

use App\Contract\FooRepositoryInterface;

class FooService
{
    private $fooRepo;

    public function __construct(FooRepositoryInterface $fooRepo)
    {
        $this->fooRepo = $fooRepo;
    }

    public function getAll()
    {
        $orderBy = '';
        $sortBy = '';
        $foos = $this->fooRepo->find($orderBy, $sortBy);

        return $foos;
    }
}