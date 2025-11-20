<?php
  session_start();

  if (!isset($SESSION['modo'])) {
    $SESSION['modo'] = false;
  }

  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['cambioEstilo'])) {
        // Cambia el valor de la variable
        if ($SESSION['modo']==false){
          $SESSION['modo'] = true;
        } else {
          $SESSION['modo'] = false;
        }
    }
    echo $SESSION['modo'];
  }
?>
<html>
  <head>
    <title>Web X</title>
    <meta charset="utf-8"/>
    <link rel="icon" href="img/tecca.png"type="image/png"sizes="16x16"/>
    <?php if ($SESSION['modo']==false): ?>
    <link rel="stylesheet" href="estiloClaro.css"/>
  <?php else: ?>
    <link rel="stylesheet" href="estiloOscuro.css"/>
  <?php endif; ?>
  </head>
  <body>
    <main>
      <div class="opciones">
        <form action="" method="post">
          <input type="hidden" name="cambiar_variable" value="true">
          <button type="on" name="cambioEstilo"><?php if ($SESSION['modo']==false): ?>Modo Oscuro<?php else: ?>Modo Claro<?php endif; ?></button>
        </from>
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
