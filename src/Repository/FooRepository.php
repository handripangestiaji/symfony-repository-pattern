<?php

namespace App\Repository;

use App\Contract\FooRepositoryInterface;

class FooRepository implements FooRepositoryInterface
{
    public function find(string $orderBy = '', string $sortBy = '')
    {
        // The repository begin
        return 'find';
    }

    public function findOneById(int $id)
    {
        // the repository begin
    }
}