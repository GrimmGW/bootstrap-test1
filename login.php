<?php

if(!empty($_SESSION["id"])){
    header("location:index.php ");
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
    <title>Inicio de Sesion</title>
</head>
<body class="bg-dark">
    <div class="container-fluid">
        <div class="d-flex text-white vh-100 justify-content-center align-items-center">
            <div class="bg-dark border border-secondary rounder col-4 py-3 px-4">
                <div class="text-center mb-4">
                    <h2><b>Inicio de sesión</b></h2>
                    <p>Programación IV</p>
                    <?php
                    
                        include "model/conn.php";
                        include "controller/login_controller.php";
                    
                    ?>
                </div>
                <div>
                    <form method="POST">
                        <label for="labelUsername" class="form-label">Ingresa tu usuario</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control bg-dark text-white" name="username" require>
                        </div>
                        <label for="labelPassword">Ingresa tu contraseña</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                            <input type="password" class="form-control bg-dark text-white" name="password" require>
                        </div>
                        <a href="#">No recuerdo mi contraseña</a>
                        <div class="mt-4 text-center">
                            <button type="submit" class="btn btn-warning px-4" name="btn_iniciarsesion" value="iniciosesion">Iniciar sesion</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a5601269a3.js" crossorigin="anonymous"></script>

</html>