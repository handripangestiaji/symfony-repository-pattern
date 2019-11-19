<?php

namespace App\Contract;

interface FooRepositoryInterface {

    public function find(string $orderBy = '', string $sortBy = '');

    public function findOneById(int $id);

}