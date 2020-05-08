<?php
require realpath(__DIR__ . "/../../vendor/autoload.php");

function createProduct()
{
    $client = new MongoDB\Client("mongodb://localhost");
    $db = $client->johnnys;
    $products = $db->products;

    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $stock = $_POST["stock"];

    $result = $products->insertOne([
        'name' => $name,
        'description' => $description,
        'price' => $price,
        'stock' => $stock,
        'image' => ''
    ]);

    if ($result->getInsertedCount()) {
        echo <<< EOD
        <div class="alert alert-success" role="alert">
           Producto ingresado exitosamente
        </div>
        EOD;
    } else {
        echo <<< EOD
        <div class="alert alert-error" role="alert">
            No se ha podido ingresar el producto
        </div>
        EOD;
    }
}
