<?php

include("conexion.php");

//Recogeremos los valores del formulario
$Nombre = $_POST['nombre'];
$Apellidos = $_POST['apellidos'];
$Email = $_POST['email'];
$Edad = $_POST['edad'];
$Movil = $_POST['movil'];
$Localidad = $_POST['localidad'];

if (isset($_POST['registrar'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellidos']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['edad']) >= 1 && strlen($_POST['movil']) >= 1 && strlen($_POST['localidad']) >= 1) {
        $consulta = "INSERT INTO `visitantes`(`nombre`, `apellidos`, `edad`, `email`, `movil`, `localidad`) VALUES ('$Nombre','$Apellidos','$Email','$Edad','$Movil','$Localidad')";
        $resultado = mysqli_query($conn, $consulta);
        if ($resultado) {
            echo "EXITO EN EL REGISTRO!";
        } else {
            echo "FALLO AL REGISTRARSE, PORFAVOR INTENTELO DE NUEVO";
        }
    } else {
        echo "NO PUEDES DEJAR CAMPOS VACIOS!";
    }
}
