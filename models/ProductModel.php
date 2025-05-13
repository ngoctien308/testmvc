<?php
require_once 'core/database.php';

class ProductModel {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnect();
    }
    
    public function getAll() {
        $productsQuery = $this->conn->query("select * from products");
        $products = $productsQuery->fetch_all(MYSQLI_ASSOC);
        return $products;
    }
}