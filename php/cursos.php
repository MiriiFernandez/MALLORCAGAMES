<?php

include 'conexion.php';

//Recogeremos los valores del formulario
$Nombre = $_POST['nombre'];
$Email = $_POST['email'];
$Colegio = $_POST['colegio'];



//REALIZAR EL INSERT DE LOS DATOS A LA BASE DE DATOS
$consulta = "INSERT INTO `interesados`(`nombre`, `email`, `colegio`) VALUES ('$Nombre','$Email','$Colegio')";

if ($_POST['checkbox'] != "" && $_POST['checkbox'] > 2) {

    if (is_array($_POST['checkbox'])) {
        //comprobar valores de los checkbox activados y los almacena
        while (list($key, $value) = each($_POST['checkbox'])) {
            $cursos = "INSERT INTO `curso`(`email`, `curso`) VALUES ('$Email','$value')";
        }
    }
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
