<?php
namespace App\Services;

class ProductService {
    protected $product;

    public function __construct($product) {
        $this->product = $product;
    }

    public function listProducts() {
        return $this->product;
    }

    public function insert($product) {
        return $this->product[] = $product;
    }
}
