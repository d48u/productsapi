<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepositoryEloquent implements ProductRepositoryInterface
{
    public function create(array $data)
    {
        return Product::create($data);
    }
}
