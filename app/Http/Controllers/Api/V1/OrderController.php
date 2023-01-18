<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\OrderRequest;
use App\Repository\OrderRepositoryInterface;

class OrderController extends Controller
{
    protected $repository;

    public function __construct(OrderRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function index()
    {
        // also we can make:resource
        $orders = $this->repository->get();

        return response()->json($orders);
    }

    public function store(OrderRequest $request)
    {
        $request->merge(['date' => date("Y-m-d")]);

        $order = $this->repository->store($request->all());

        return response()->json($order);
    }

    public function show($id)
    {
        $order = $this->repository->find($id , ['customer' , 'products']);

        return response()->json($order);
    }

    public function destroy($id)
    {
        return response()->json( $this->repository->destroy($id));
    }
}
