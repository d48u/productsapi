<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Http\Requests\Api\CreateProductRequest;
use App\Repositories\ProductRepositoryInterface;

class ProductController extends Controller
{
    private $repository;

    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Api\CreateProductRequest  $request
     * @return \App\Http\Resources\ProductResource
     */
    public function store(CreateProductRequest $request): ProductResource
    {
        $data = $this->repository->create($request->validated());
        return new ProductResource($data);
    }
}
