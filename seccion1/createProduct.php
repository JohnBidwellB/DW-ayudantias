<!doctype html>
<html lang="es">

<head>
    <title>Johnny's</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../assets/css/app.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/0e9ed97f2b.js" crossorigin="anonymous"></script>
</head>



<body>
    <?php include_once("header.php") ?>
    <?php include_once("productsController.php") ?>

    <?php
    $controller = new ProductsController;
    if (isset($_POST["saveProduct"])) {
        $controller->create();
    }
    ?>

    <div class="container my-5">
        <div class="row justify-content-center">
            <h3>Crear producto</h3>
        </div>
        <form method="post">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input value="Hamburguesa" required type="text" class="form-control" id="name" name="name" placeholder="Hamburguesa">
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea value="Lorem ipsum dolor sit ummit" required class="form-control" id="description" name="description" rows="4">/Lorem ipsum dolor sit ammit</textarea>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="price">Precio</label>
                        <input value=3990 required type="number" class="form-control" id="price" name="price" min=0></input>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input value=100 required type="number" class="form-control" id="stock" name="stock" min=0></input>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" name="saveProduct" value="Guardar">
        </form>
    </div>



    <?php include_once("footer.php") ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>