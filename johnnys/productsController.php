<?php
require "vendor/autoload.php";
require "actions/products/createProduct.php";
// include_once("db.php");
// $products = $db->products;

// require_once(__DIR__ . "../vendor/autoload.php");
// $client = new MongoDB\Client(
//     "mongodb://localhost"
// );
// // $client = new MongoClient();

// $db = $client->johnnys;

// $products = $db->products;

class ProductsController
{
    private $products;

    public function __construct()
    {
        $client = new MongoDB\Client(
            "mongodb://localhost"
        );
        // $client = new MongoClient();
        $db = $client->johnnys;
        $productsDB = $db->products;
        $this->products = $productsDB;
    }

    public function findAll()
    {
        $result = $this->products->find();
        return $result;
        // foreach ($result as $entry) {
        //     echo $entry['_id'], ': ', $entry['name'], "\n";
        // }
    }

    public function findOne($_id)
    {
        $_id = new MongoDB\BSON\ObjectId($_id);
        $result = $this->products->findOne(['_id' => $_id]);
        // echo $result['name'];
        // var_dump($result);
        // foreach ($result as $entry) {
        //     echo $entry['_id'], ': ', $entry['name'], "\n";
        // }
        return $result;
    }

    public function create()
    {
        // require_once("actions/products/createProduct.php")
        createProduct();
        // $result = $this->products->insertOne([
        //     'name' => 'Shirt',
        //     'description' => 'Lorem ipsum dolor sit ammit',
        //     'price' => 9990,
        //     'stock' => 100,
        //     'image' => ''
        // ]);
        // echo "Inserted {$result->getInsertedCount()} document(s)";
    }
}
