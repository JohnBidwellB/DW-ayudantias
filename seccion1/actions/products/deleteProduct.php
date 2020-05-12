<?php
// require __DIR__ . "vendor/autoload.php";
require realpath(__DIR__ . "/../../vendor/autoload.php");
function deleteProduct()
{
    $client = new MongoDB\Client(
        "mongodb://localhost"
    );
    // $client = new MongoClient();
    $db = $client->johnnys;
    $productsDB = $db->products;
    $products = $productsDB;

    $_id = new MongoDB\BSON\ObjectId($_GET['id']);
    $result = $products->deleteOne(['_id' => $_id]);

    if ($result->getDeletedCount()) {
        header('Location: ../../products.php');
    } else {
        echo <<< EOD
            <div class="alert alert-warning" role="alert'>
                No se ha podido eliminar el producto
            </div>
        EOD;
    }
}

deleteProduct();
