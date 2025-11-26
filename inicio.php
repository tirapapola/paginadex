<?php
  session_start();

  include "control-estilo.php";

?>
<html>
  <head>
    <title>Web X</title>
    <meta charset="utf-8"/>
    <link rel="icon" href="img/tecca.png"type="image/png"sizes="16x16"/>
    <link rel="stylesheet" href="<?= $CssFile ?> "/>
   
  </head>
  <body>
    <main>
      <div class="opciones">
        <a href="?idioma=es"><img src="img/es.png"></a>
        <a href="?idioma=en"><img src="img/en.png"></a>
        <?php if ($modo == "estiloClaro"): ?> 
          <a href="?modo=cambiar">Modo Oscuro</a>
        <?php else: ?>
          <a href="?modo=cambiar">Modo Claro</a>
        <?php endif; ?>
      </div>
      <div class="navegacion">
        <nav>
            <a href="inicio.php">INICIO</a>
            <a href="cuestionario.php">CUESTIONARIO</a>
        </nav>
    </div>
    <div class="integrantes">
        <!--
        <img src="img/oscarProgramador.png" height="200">
        <img src="img/abrahamNube.png" height="200">
      -->

        <figure>
          <img src="img/oscarProgramador.png" height="200"/>
          <figcaption> Oscar programador </figcaption>
        </figure>
        <figure>
          <img src="img/abrahamNube.png" height="200"/>
          <figcaption> Abraham experto en Cloud </figcaption>
        </figure>
      </div>
    </main>
    <footer>
        Almirante Abraham & Cheriff Oscar &copy; 2025
        <img src="img/tecca.png" width="35" height="30">
    </footer>
  </body>
  </html>
