<?php
include 'models/ProductModel.php';

class ProductController {
    const basePath = 'views/frontend/products';
    private $productModel;

    public function __construct() {
        $this->productModel = new ProductModel();
    }
    
    public function index() {
        $products = $this->productModel->getAll();
        include self::basePath.'/index.php';
    }

    public function show() {
        echo '<h1>ProductController show</h1>';
    }
}