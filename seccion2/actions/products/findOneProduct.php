<?php
require realpath(__DIR__ . "/../../vendor/autoload.php");

function findOneProduct($_id)
{
    $client = new MongoDB\Client("mongodb://localhost");
    $db = $client->johnnys;
    $products = $db->products;

    $_id = new MongoDB\BSON\ObjectId($_id);
    $result = $products->findOne(['_id' => $_id]);
    return $result;
}
