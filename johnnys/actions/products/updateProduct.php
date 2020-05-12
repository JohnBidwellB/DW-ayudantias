<?php
// require __DIR__ . "vendor/autoload.php";
require realpath(__DIR__ . "/../../vendor/autoload.php");
function updateProduct()
{
    $client = new MongoDB\Client(
        "mongodb://localhost"
    );
    // $client = new MongoClient();
    $db = $client->johnnys;
    $productsDB = $db->products;
    $products = $productsDB;
    $_id =$_POST["_id"];
    $id = new MongoDB\BSON\ObjectId($_POST["_id"]);
    echo $_id;
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $stock = $_POST["stock"];

    $result = $products->updateOne(["_id" => $id], [
        '$set' => [
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'stock' => $stock,
            'image' => ''
        ]

    ]);
    if ($result->getModifiedCount()) {
       header('Location: ../../products/product.php?_id=' . strval($_id));
        // echo <<< EOD
        // <div class="alert alert-success" role="alert">
        //    Producto ingresado exitosamente
        // </div>
        // EOD;
    } else {
        echo <<< EOD
        <div class="alert alert-warning" role="alert">
            No se ha podido actualizar el producto
        </div>
        EOD;
    }
    // echo "Inserted {$result->getInsertedCount()} document(s)";
}
