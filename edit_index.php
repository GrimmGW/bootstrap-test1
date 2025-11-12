<?php 

    include "model/conn.php";
    $id = $_GET["id"];
    $sql = $conn->query(" select * from productos where id = $id ");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="extras.css">
    <link rel="shortcut icon" href="assets/icons/dom.png" type="image/x-icon">
    <title>Actualizando producto <?= $id?></title>
</head>
<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Prog IV</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de mí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mis trabajos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<body class="bg-dark">
    <section id="registro" class="mt-5 p-5 bg-dark">
        <div class="container-fluid row text-light">
            <form class="col-lg-4 m-auto" method="POST">
                <h3 class="text-center">Actualizacion de productos</h3>
                <input type="hidden" name="id" value="<?= $_GET['id']?>">
                <?php 
                    include "controller/edit_product_controller.php";
                    while($datos = $sql->fetch_object()){
                ?>
                <div class="mt-4">
                    <label for="form_nombre_producto" class="form-label">Nombre del producto</label>
                    <input type="text" class="form-control bg-dark text-light" name="nombre_producto" value="<?= $datos->nombre_producto ?>" require>
                </div>
                <div class="mt-4">
                    <label for="form_cantidad_producto" class="form-label">Cantidades del producto</label>
                    <input type="number" class="form-control bg-dark text-light" name="cantidad_producto" value="<?= $datos->cantidad_producto ?>" require>
                </div>
                <div class="mt-4">
                    <label for="form_marca_producto" class="form-label">Marca del producto</label>
                    <input type="text" class="form-control bg-dark text-light" name="marca_producto" value="<?= $datos->marca_producto ?>" require>
                </div>
                <?php
                }
                ?>

                <div class="text-center">
                    <button type="submit" class="btn btn-warning mt-4" name="btnactualizar" value="ok">Actualizar producto</button>
                </div>
            </form>
        </div>
    </section>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a5601269a3.js" crossorigin="anonymous"></script>

</html>