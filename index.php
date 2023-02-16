<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="./resources/styles.css">
</head>
<body class="inscripcion">
    <section class="inscripcion_form_wrp">
        <form class="inscripcion_form" method="post">
            <h1>¡Bienvenido!</h1>
            <p> Registrate aquì</p>
            <input type="text" name="nombre" placeholder="Nombre y Apellido">
            <input type="text" name="edad" placeholder="Edad">
            <input type="text" name="dni" placeholder="Dni">
            <input type="email" name="email" placeholder="Correo electronico">
            <input type="text" name="telefono" placeholder="Telefono">
            <input class="inscripcion_form_btn" type="submit" name="register">
        </form>
    </section>
    <?php
    include("registrar.php");
    ?>
</body>
</html>