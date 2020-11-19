<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="sylesheet" href="css/style.css">
</head>
 
<body>

    <h3 class="center">crear cliente</h3>
    <div class="row">
            <div class="col l3 "></div>
            <div class="col l6  center">
        
            <p class="red-text">
                <?php
                     session_start();
                     if (isset($_SESSION['error'])) {
                         echo $_SESSION['error'];
                         unset($_SESSION['error']);
                     }

                ?>

                </p>


            <form action="controllers/usuariocontroller.php"; method="POST">
                 
                     
                 <!-- INPUT -->
                 <div class="input-field ">
                     <i class="material-icons prefix">account_circle</i>
                     <input id="rut" type="text" name="txt">
                     <label for="rut">rut</label>
                 </div>
                 <br>
                 <div class="input-field ">
                     <i class="material-icons prefix">account_circle</i>
                     <input id="nombre" type="text" name="nombre">
                     <label for="nombre">nombre</label>
                    <br>
                    <br>
                    <div class="input-field ">
                     <i class="material-icons prefix">add</i>
                     <input id="direccion" type="text" name="direccion">
                     <label for="direccion">direccion</label>
                    <br>
                    <br>
                    <div class="input-field ">
                     <i class="material-icons prefix">call</i>
                     <input id="telefono" type="text" name="telefono">
                     <label for="telefono">telefono</label>
                    <br>

                    <div class="input-field ">
                     <i class="material-icons prefix">event</i>
                     <input id="fecha" type="text" name="fecha">
                     <label for="fecha">fecha</label>
                    <br>


                    <div class="input-field ">
                     <i class="material-icons prefix">email</i>
                     <input id="email" type="text" name="email">
                     <label for="email">email</label>
                     <button class="btn blue ancho-100">crear</button>
                    <br>






<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>