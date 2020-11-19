<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Usuario</title>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col l4 m4 s12">
            </div>
            <div class="col l4 m4 s12">
            <div class="footer">
            <i class="fas fa-users"></i>
            </div>
                <h3 class="center"> Usuario</h3>

                <p class="red-text">
                <?php
                     session_start();
                     if (isset($_SESSION['error'])) {
                         echo $_SESSION['error'];
                         unset($_SESSION['error']);
                     }

                ?>

                </p>

                <!--input campo-->
                <form action="controllers/LoginuController.php" method="POST">
                    <div class="input-field">
                        <input id="rutusu" type="text" name="rut">
                        <label for="rutusu">rut Usuario</label>
                    </div>
                    <div class="input-field">
                        <input id="clave" type="password" name="clave">
                        <label for="clave">Ingrese su clave</label>
                    </div>
                    <button class="btn ancho blue">Iniciar </button>
                </form>
                <p>
                    <br>
                    <a href="index.php"> volver como adiminstrador?</a>
                </p>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/643d32c5e0.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
