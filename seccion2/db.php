<?php
require "vendor/autoload.php";
$client = new MongoDB\Client(
    "mongodb://localhost"
);

$db = $client->johnnys;

$productsDB = $db->products;
