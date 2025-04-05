<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Services\TaskService;

class Product extends Controller
{
    protected ProductService $productService;
    protected TaskService $taskService;

    public function __construct(ProductService $productService, TaskService $taskService)
    {
        $this->productService = $productService;
        $this->taskService = $taskService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newProduct = [
            'id' => 4,
            'name' => 'Red',
            'category' => 'Color'
        ];
        $this->productService->insert($newProduct);
        $this->taskService->add('Add to cart');
        $this->taskService->add('Checkout'); // Fixed typo

        $data = [
            'products' => $this->productService->listProducts(),
            'tasks' => $this->taskService->getAllTasks()
        ];

        return view('products.index', $data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = collect($this->productService->listProducts())->firstWhere('id', $id);

        return response()->json($product);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}