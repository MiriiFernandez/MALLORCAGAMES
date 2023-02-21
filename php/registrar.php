<?php

include 'conexion.php';

//Recogeremos los valores del formulario
$Nombre = $_POST['nombre'];
$Apellidos = $_POST['apellidos'];
$Email = $_POST['email'];
$Edad = $_POST['edad'];
$Movil = $_POST['movil'];
$Localidad = $_POST['localidad'];

//REALIZAR EL INSERT DE LOS DATOS A LA BASE DE DATOS
$consulta = "INSERT INTO `visitantes`(`nombre`, `apellidos`, `edad`, `email`, `movil`, `localidad`) VALUES ('$Nombre','$Apellidos','$Edad','$Email','$Movil','$Localidad')";

//Verificar que el email no se repita en la base de datos
$verificar_email = mysqli_query($conn, "SELECT * FROM visitantes WHERE email='$Email'");

if (mysqli_num_rows($verificar_email) > 0) {
    echo '
    <script>
    alert("Este email ya esta registrado!");
    window.location.replace("../index.php");
    </script>;
    ';
    exit($conn);
}

//Verificar que el movil no se repita en la base de datos
$verificar_movil = mysqli_query($conn, "SELECT * FROM visitantes WHERE movil='$Movil'");

if (mysqli_num_rows($verificar_movil) > 0) {
    echo '
    <script>
    alert("Este movil ya esta registrado!");
    window.location.replace("../index.php");
    </script>;
    ';
    exit($conn);
}

$resultado = mysqli_query($conn, $consulta);

if ($resultado) {

    echo '
    <script>
    window.location.replace("../registro_ok.php");
    </script>;
    ';
} else {
    echo '
    <script>
    alert("Ups, parece que hubo un error. Intentalo de nuevo!");
    </script>;
    ';
}



mysqli_close($conn);
