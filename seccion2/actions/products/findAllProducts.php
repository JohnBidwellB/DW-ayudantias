<?php
require realpath(__DIR__ . "/../../vendor/autoload.php");

function findAllProducts()
{
    $client = new MongoDB\Client("mongodb://localhost");
    $db = $client->johnnys;
    $products = $db->products;

    $result = $products->find();
    return $result;
}
