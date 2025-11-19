<?php

session_start();
if(empty($_SESSION["id"])){
    header("location:login.php ");
}

?>


<!DOCTYPE html>
<html lang="es-VE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="extras.css">
    <link rel="shortcut icon" href="assets/icons/dom.png" type="image/x-icon">
    <title>Página de Bootstrap</title>
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

<body>
    <section id="intro">
        <div class="container-fluid d-flex align-items-center text-center justify-content-center text-light" 
        style="background-image: url(assets/images/landscape_darken.jpg); height: 100vh; background-size: cover; background-position: center;">
            <div>
                <h1 style="font-size: 52px;">Bienvenido, <?= $_SESSION["user"] ?>👋</h1>
                <p class="mt-4">Exercitation non adipisicing nulla anim veniam. Exercitation non adipisicing nulla anim veniam.</p>
                <button type="button" class="btn btn-outline-light me-3">Iniciar sesion</button>
                <a href="controller/logout_controller.php" class="btn btn-danger px-5">Cerrar sesion</a>
            </div>
        </div>
    </section>
    <section id="about" class="mt-5">
        <div class="row align-items-center">
            <div class="col-lg-4 offset-lg-2 offset-1 col-10">
                <h2>Vamos a hablar acerca de...</h2>
                <p>Esse id irure enim consectetur duis id cillum commodo minim cillum officia labore proident duis. Qui id anim ad minim eu minim dolor in dolore ut sunt duis. Dolor Lorem consectetur consequat minim dolor ex Lorem proident laborum qui excepteur excepteur deserunt anim. Fugiat nulla exercitation esse ex consectetur laborum qui proident ex dolor elit ut tempor. Pariatur occaecat enim magna ipsum fugiat cupidatat nostrud sunt. Ullamco incididunt Lorem cupidatat veniam id esse proident do tempor ea.</p>
            </div>
            <div class="col-lg-3 offset-lg-1 offset-1 col-10">
                <img src="assets/images/landscape-bootstrap2.jpg" class="img-fluid rounded" alt="Una vista hermosa">
            </div>
        </div>
    </section>
    <section id="registro" class="mt-5 p-5 bg-dark">
        <div class="container-fluid row text-light">
            <form class="col-lg-4" method="POST">
                <h3 class="text-center">Registro de productos</h3>
                <?php 
                    include "model/conn.php";
                    include "controller/create_product_controller.php";
                    include "controller/delete_product_controller.php";
                ?>
                <div class="mt-4">
                    <label for="form_nombre_producto" class="form-label">Nombre del producto</label>
                    <input type="text" class="form-control bg-dark text-light" name="nombre_producto" require>
                </div>
                <div class="mt-4">
                    <label for="form_cantidad_producto" class="form-label">Cantidades del producto</label>
                    <input type="number" class="form-control bg-dark text-light" name="cantidad_producto" require>
                </div>
                <div class="mt-4">
                    <label for="form_marca_producto" class="form-label">Marca del producto</label>
                    <input type="text" class="form-control bg-dark text-light" name="marca_producto" require>
                </div>

                <button type="submit" class="btn btn-warning mt-4" name="btnregistrar" value="ok">Registrar producto</button>
            </form>
            <?php
                include "model/conn.php";
                $query = $conn->query("select * from productos");
            ?>
            <div class="col-lg-8 table-responsive">
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Marca</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                            while ($datos = $query->fetch_object()){ ?>
                        <tr>
                            <td><?= $datos->id ?></td>
                            <td><?= $datos->nombre_producto ?></td>
                            <td><?= $datos->cantidad_producto ?></td>
                            <td><?= $datos->marca_producto ?></td>
                            <?php 
                                echo "<td><a href='edit_index.php?id=$datos->id' class='btn btn-warning'><i class='fa-solid fa-pencil'></i></a></td>";
                                echo "<td><a onclick='return confirm(\"¿Deseas borrar este producto? :(\")' href='index.php?id=$datos->id' class='btn btn-danger'><i class='fa-solid fa-trash-can'></i></a></td>";
                            ?>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a5601269a3.js" crossorigin="anonymous"></script>

</html>