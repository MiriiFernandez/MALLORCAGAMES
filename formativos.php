<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ciclos formativos</title>
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/ciclos.css" />
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
  <section class="Sub_titulos">
    <p class="subtitulo">¡Solo puedes seleccionar dos!</p>
    <h3 class="titulo_ciclos">Ciclos Formativos</h3>
  </section>
  <form action="php/cursos.php" method="POST">
    <input type="checkbox" id="checkbox" name="checkbox[]" value="CFGM Cuidados Auxiliares de Enfermería" />
    <label for=""> CFGM Cuidados Auxiliares de Enfermería</label><br /><br />

    <input type="checkbox" id="checkbox" name="checkbox[]" value="CFGM Guía en el Medio Natural y de Tiempo Libre" />
    <label for=""> CFGM Guía en el Medio Natural y de Tiempo Libre</label><br /><br />

    <input type="checkbox" id="checkbox" name="checkbox[]" value="CFGS Documentación y Administración Sanitarias" />
    <label for=""> CFGS Documentación y Administración Sanitarias</label><br /><br />

    <input type="checkbox" id="checkbox" name="checkbox[]" value="CFGS Desarrollo de Aplicaciones Web" />
    <label for=""> CFGS Desarrollo de Aplicaciones Web</label><br /><br />
checkbox
    <input type="checkbox" id="checkbox" name="checkbox[]" value="CFGS Enseñanza y Animación Sociodeportiva" />
    <label for=""> CFGS Enseñanza y Animación Sociodeportiva</label><br /><br />

    <input type="checkbox" id="checkbox" name="checkbox[]" value="CFGS Acondicionamiento Físico" />
    <label for=""> CFGS Acondicionamiento Físico</label><br /><br />

    <input type="checkbox" id="checkbox" name="checkbox[]" value="CFGS Administración y Finanzas" />
    <label for=""> CFGS Administración y Finanzas</label><br /><br />

    <input type="checkbox" id="checkbox" name="checkbox[]" value="CFGS Desarrollo de Aplicaciones Multiplataforma" />
    <label for=""> CFGS Desarrollo de Aplicaciones Multiplataforma</label><br /><br />

    <input type="checkbox" id="checkbox" name="checkbox[]" value="CFGS Marketing y Publicidad" />
    <label for=""> CFGS Marketing y Publicidad</label><br /><br />

    <input type="checkbox" id="checkbox" name="checkbox[]" value="CFGS Integración Social" />
    <label for=""> CFGS Integración Social</label><br /><br />

    <h3 class="titulo_ciclos">EDIB</h3>
    <input type="checkbox" id="checkbox" name="checkbox[]" value="HND Diseño Gráfico" />
    <label for=""> HND Diseño Gráfico</label><br /><br />

    <input type="checkbox" id="checkbox" name="checkbox[]" value="HND Diseño de Interiores" />
    <label for=""> HND Diseño de Interiores</label><br /><br />

    <input type="checkbox" id="checkbox" name="checkbox[]" value="HND Diseño de Moda" />
    <label for="">HND Diseño de Moda</label><br /><br />

    <input type="checkbox" id="checkbox" name="checkbox[]" value="HND Producción Audiovisual" />
    <label for=""> HND Producción Audiovisual</label><br /><br />

    <input type="checkbox" id="checkbox" name="checkbox[]" value="HND Creación y Desarrollo de Videojuegos" />
    <label for=""> HND Creación y Desarrollo de Videojuegos</label><br /><br />

    <section class="enviar_datos">
      <p class="parrafo_final">
        Rellena estos datos y te enviaremos información sobre los
        cursos que hayas seleccionado!
      </p>
    </section>
    <section class="enviar_cursos">
      <input type="text" placeholder="Nombre" name="nombre" />
      <input type="email" placeholder="Email" name="email" />
      <p class="aviso">
        Si no estas cursando nada actualmente, no es necesario rellenar este
        campo
      </p>
      <input type="text" placeholder="Colegio" name="colegio" /><br><br>
      <input class="btn_envio" type="submit" value="ENVIAR" />
    </section>
  </form>
</body>

</html>