<?php
require "vendor/autoload.php";
$client = new MongoDB\Client(
    "mongodb://localhost"
);
// $client = new MongoClient();

$db = $client->johnnys;

$productsDB = $db->products;
// $users = $db->users;
