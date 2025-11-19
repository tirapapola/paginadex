<?php
    $nombre = "USUARIO";
    $pregunta1 = $_POST["pregunta1"] ?? "";
    $pregunta2 = $_POST["pregunta2"] ?? "";
    $pregunta3 = $_POST["pregunta3"] ?? "";
    $pregunta4 = $_POST["pregunta4"] ?? "";
    $pregunta5 = $_POST["pregunta5"] ?? "";
    $pregunta6 = $_POST["pregunta6"] ?? "";
    $pregunta7 = $_POST["pregunta7"] ?? "";
    $pregunta8 = $_POST["pregunta8"] ?? "";
    $pregunta9 = $_POST["pregunta9"] ?? "";
    $pregunta10 = $_POST["pregunta10"] ?? "";

    $contador = 0;

    // Pregunta 1
    if ($pregunta1 == "servidor") {
        $contador++;
    }
    // Pregunta 2
    if ($pregunta2 == "php"){
        $contador++;
    }
    // Pregunta 3
    if ($pregunta3 == "post"){
        $contador++;
    }
    // Pregunta 4
    if ($pregunta4 == "false"){
        $contador++;
    }
    // Pregunta 5
    if ($pregunta5 == "3"){
        $contador++;
    }
    // Pregunta 6
    if ($pregunta6 == "3"){
        $contador++;
    }
    // Pregunta 7
    if ($pregunta7 == "3"){
        $contador++;
    }
    // Pregunta 8
    if ($pregunta8 == "2"){
        $contador++;
    }
    // Pregunta 9
    if ($pregunta9 == "1"){
        $contador++;
    }
    // Pregunta 10
    if ($pregunta10 == "3"){
        $contador++;
    }
?>
<html>
  <body>
    <h1>RESULTADO</h1>
    <p><?php echo "Bien $nombre tu puntuación es:";?></p>
    <p><?php echo "Puntuacion: $contador de 10";?></p>
  </body>
    <footer>
        Almirante Abraham & Cheriff Oscar &copy; 2025
        <img src="img/tecca.png" width="35" height="30">
        <a href="inicio.php">VOLVER</a>
    </footer>
</html>
