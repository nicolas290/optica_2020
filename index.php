
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>











    <div class="container">
        <div class="row">
            <div class="col l3 m4 s12">
            </div>
            <div class="col l6 m4 s12">
            <div class="footer">
            <i class="fas fa-user-shield"></i>
            </div>
                <h3 class="center">Acceso admin</h3>

                <p class="red-text">
                <?php
                     session_start();
                     if (isset($_SESSION['error'])) {
                         echo $_SESSION['error'];
                         unset($_SESSION['error']);
                     }

                ?>

                </p>

                <!--input-->
                <form action="controllers/LoginController.php" method="POST">
                    <div class="input-field">
                    <input id="rut" type="text" name="txt">
                    <label for="rut">rut</label>
                    </div>
                    <div class="input-field">
                        <input id="clave" type="password" name="clave">
                        <label for="clave">Ingrese su clave</label>
                    </div>
                    <button class="btn ancho blue">Iniciar</button>
                </form>
                <p>
                    <br>
                    <a href="indexu.php">ingresar como  Usuario</a> 
                </p>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/643d32c5e0.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>