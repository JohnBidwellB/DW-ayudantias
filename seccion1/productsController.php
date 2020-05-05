<?php
require "vendor/autoload.php";
require "actions/products/createProduct.php";
require "actions/products/findAllProducts.php";
require "actions/products/findOneProduct.php";

class ProductsController
{
    public function _construct()
    {
        $client = new MongoDB\Client("mongodb://localhost");
        $db = $client->johnnys;
        $productsDB = $db->products;
        $this->products = $productsDB;
    }

    public function findAll()
    {
        return findAllProducts();
    }

    public function findOne($_id)
    {
        $_id = new MongoDB\BSON\ObjectId($_id);
        return findOneProduct($_id);
    }

    public function create()
    {
        createProduct();
    }
}
