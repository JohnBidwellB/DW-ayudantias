<?php

function getJsonData()
{
  $products_json = file_get_contents('database/products.json');
  $json_a = json_decode($products_json, true);
  return $json_a;
}

function findProduct($search)
{
  $products = getJsonData();
  $product = [];
  foreach ($products as $key => $value) {
    if (gettype($value) == "array") {
      $product_name = $products[$key]['name'];
      if ($product_name == $search) {
        $product = $products[$key];
        $found = true;
      }
    }
  }
  return $product;
}

$search = $_GET['search'];
$product = findProduct($search);
// echo $search;

?>

<form method="GET" id=search-form>
  <!-- <label for="search-product">Buscar</label> -->
  <input type="text" id="seach-product" name="search" value="" placeholder="buscar ..." />
</form>