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

    $_id = new MongoDB\BSON\ObjectId($_GET["id"]);
    echo $_id;
    $result = $products->deleteOne(['_id' => $_id]);

    // if ($result->getDeletedCount()) {
    //     echo <<< EOD
    //     <div class="alert alert-success" role="alert">
    //        Producto eliminado exitosamente
    //     </div>
    //     EOD;
    // } else {
    //     echo <<< EOD
    //     <div class="alert alert-error" role="alert">
    //         No se ha podido eliminar el producto
    //     </div>
    //     EOD;
    // }
    // usleep(2000000);
    header('Location: ../../products.php');
    // echo "Inserted {$result->getInsertedCount()} document(s)";
}

deleteProduct();
