<?php
require_once 'database.php';

class ProductModel {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnect();
    }

    public function create($name, $description) {
        $this->conn->query("insert into products(name,description) 
        values('".$name."', '".$description."')");
    }
    
    public function getAll() {
        $productsQuery = $this->conn->query("select * from products");
        if ($productsQuery && $productsQuery->num_rows > 0) {
            return $productsQuery->fetch_all(MYSQLI_ASSOC);
        }

        return [];
    }

    public function getById($id) {
        $productsQuery = $this->conn->query("select * from products where id=".$id);
        if ($productsQuery && $productsQuery->num_rows > 0) {
            return $productsQuery->fetch_assoc();
        }

        return [];
    }

    public function deleteById($id) {
        $productsQuery = $this->conn->query("delete from products where id=".$id);      
    }
}