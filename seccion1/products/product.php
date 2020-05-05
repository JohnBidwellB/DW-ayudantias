<!doctype html>
<html lang="es">

<head>
    <title>Johnny's</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/../assets/css/app.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/0e9ed97f2b.js" crossorigin="anonymous"></script>
</head>



<body>
    <?php include_once(realpath(__DIR__ . "/../header.php")) ?>
    <?php include_once(realpath(__DIR__ . "/../productsController.php")) ?>
    <?php
    $controller = new ProductsController;
    $id = $_GET["_id"];
    $product = $controller->findOne($id);
    ?>

    <div class="container my-5">
        <div class="row">
            <div class="col-xs-12 col-md">
                <figure class="figure">
                    <img src="https://picsum.photos/id/1080/600/400" class="figure-img img-fluid rounded" alt="...">
                </figure>
            </div>

            <div class="col-xs-12 col-md">
                <div class="row">
                    <h3> <?php echo $product["name"] ?></h3>
                </div>
                <div class="row">
                    <p>$<?php echo $product["price"] ?></p>
                </div>
                <div class="row">
                    <p> <?php echo $product["description"] ?></p>
                </div>
                <div class="row">
                    <p>Quedan <?php echo $product["stock"] ?></p>
                </div>
                <div class="row">
                    <div class="d-flex justify-content-end">
                        <a href="#" class="card-link text-center">
                            <span style="font-size: 16px;">
                                <i class="fas fa-cart-plus"></i>
                            </span> Añadir al carrito</a>
                        </a></div>
                </div>
            </div>
        </div>
    </div>


    <?php include_once(realpath(__DIR__ . "/../footer.php")) ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>