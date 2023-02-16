<?php

	// Mostrar cuando la operacion de registro es exitosa o no
	$success = "ok.html";
	$error = "no.html";

include("con_db.php");
if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['edad']) >= 1 && strlen($_POST['dni']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['email']) >= 1) { 
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $edad = trim($_POST['edad']);
        $dni = trim($_POST['dni']);
        $tel = trim($_POST['telefono']);
        $fecha_reg = date("d/m/y");
        /*$consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$nombre','$email','$fecha_reg')";*/
        $consulta = "INSERT INTO datos(nombre, edad, dni, email, telefono, fecha_reg) VALUES ('$nombre','$edad','$dni','$email','$tel','$fecha_reg')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            header("Location: $success");
        } else {
            header("Location: $error");
        }
    } else {
            ?> <h3>Campos Vacios</h3> <?php
    }
}

?>