<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mallorca Game App</title>
  <!-- CSS -->
  <link rel="stylesheet" href="css/estilo.css" />
  <link rel="stylesheet" href="css/normalize.css" />

</head>

<body>
  <!-- header -->
  <header>
    <!-- Lineas Decorativas -->
    <section class="lineas-decor">
      <img src="img/lineas_tech.png" width="100%" alt="" />
    </section>
    <!-- Logo -->
    <section class="logo_mallorcaG">
      <img src="img/logo.png" alt="" />
    </section>
    <section class="titulo">
      <h2 class="Titulo">MALLORCA GAME</h2>
    </section>
  </header>
  <!-- Formulario -->
  <section class="formulario">
    <form action="registrar.php" method="post">
      <input type="text" placeholder="Nombre.." name="nombre" />
      <br /><br /><br />
      <input type="text" placeholder="Apellidos.." name="apellidos" />
      <br /><br /><br />
      <input type="text" placeholder="Edad" name="edad" />
      <br /><br /><br />
      <input type="email" placeholder="Email.." name="email" />
      <br /><br /><br />
      <input type="number" placeholder="Movil.." name="movil" />
      <br /><br /><br />
      <label for="">Localidad</label>
      <input type="text" placeholder="Localidad.." name="localidad" value="Palma" />
      <br /><br /><br />

      <input type="submit" class="btn" name="registrar" value="Enviar">
    </form>
    <?php
    include("registrar.php");
    ?>
    <section class="enlace_cursos">
      <p href="">TE GUSTARIA HACER UN CURSO?</p>
      <a href="formativos.html">¡ECHALE UN VISTAZO!</a>
    </section>
    <p class="visitanos">Visítanos en:</p>
    <section class="rds">
      <img src="/img/instagram.png" alt="" />
      <img src="img/facebook.png" alt="" />
      <img src="/img/twitter.png" alt="" />
    </section>
    <p>WWW.MALLORCAGAMES.ES</p>
    <p>@grupofleming.edib</p>
  </section>
</body>

</html>