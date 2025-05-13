<?php
include 'models/ProductModel.php';

class ProductController {
    const basePath = 'views/products';
    private $productModel;

    public function __construct() {
        $this->productModel = new ProductModel();
    }
    
    public function index() {
        $products = $this->productModel->getAll();
        include self::basePath.'/index.php';
    }

    public function show() {
        $product = $this->productModel->getById($_GET['productId']);
        include self::basePath.'/show.php';
    }
}