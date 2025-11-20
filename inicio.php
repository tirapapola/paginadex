<?php
  session_start();
  if (isset($_GET["modo"])) {
    if (!isset($_SESSION["modo"])) {
      $_SESSION["modo"] = "estiloOscuro";
    } else {
      if ($_SESSION["modo"] == "estiloClaro") {
        $_SESSION["modo"] = "estiloOscuro";
      } else {
        $_SESSION["modo"] = "estiloClaro";
      }
    }
  }
  $modo = $_SESSION["modo"] ?? "estiloClaro";
  $CssFile = "$modo.css";

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
    </main>
    <footer>
        Almirante Abraham & Cheriff Oscar &copy; 2025
        <img src="img/tecca.png" width="35" height="30">
    </footer>
  </body>
  </html>
