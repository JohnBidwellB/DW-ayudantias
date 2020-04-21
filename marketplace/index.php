<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='./styles/app.css' rel='stylesheet' type='text/css'>


    <title>Johnny's</title>
</head>

<?php
$search = $_GET['search'];
$products_json = file_get_contents('database/products.json');
$products = json_decode($products_json, true);
?>

<body>
    <?php include_once('header.php') ?>

    <main>

        <div class='container'>
            <?php
            if ($search) {
                if ($product) {
                    echo $product['name'];
                    echo <<<EOD
                    <div class='row'>
                        <div class='column-2'>
                            <div class='row'>
                            </div>
                            <div class='row'>
                                <h5>{$product['name']}</h5>
                                <p>{$product['description']}</p>
                                <p>{$product['value']}</p>
                                <p>Quedan {$product['stock']} unidades</p>
                            </div>
                        </div>
                    </div>
                EOD;
                } else {
                    echo <<<EOD
                <div class='products-container'>
                    <p>No existe el producto</p>
                </div>
            EOD;
                }
            } else {
                echo '<div class="row">';
                echo '<div class="column-4">';
                foreach ($products as $key => $value) {
                    if (gettype($value) == "array") {
                        $product = $products[$key];
                        echo "<div class='card'>";
                        echo "<img src={$product['image']} class='card-image'>";
                        echo "<h5>{$product['name']}</h5>";
                        echo "<p>{$product['description']}</p>";
                        echo "<p>{$product['value']}</p>";
                        echo "<p>Quedan {$product['stock']} unidades</p>";
                        echo "</div>";
                    }

                    if ($key == 20) {
                    break;
                    }
                }
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>

        <div class='container'>
            <div class='row '>
                <div class='column-1'>
                    <div class=' blue'></div>
                </div>

            </div>
            <div class='row'>
                <div class=' column-2'>
                    <div class='blue'></div>
                    <div class='blue'></div>
                </div>
            </div>

            <div class='row'>
                <div class=' column-3'>
                    <div class='blue'></div>
                    <div class='blue'></div>
                    <div class='blue'></div>
                </div>
            </div>

            <div class='row'>
                <div class=' column-4'>
                    <div class='blue'></div>
                    <div class='blue'></div>
                    <div class='blue'></div>
                    <div class='blue'></div>
                </div>
            </div>

        </div>

    </main>
</body>

</html>