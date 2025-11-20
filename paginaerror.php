<?php

session_start(); // necesario para usar $_SESSION

$idioma = $_GET["idioma"] ?? "es";
$fichero = "$idioma.php";

$idioma = $_SESSION['idioma'] ?? 'es';  // por defecto español



if(file_exists($fichero)){
    require $fichero;
}else{
    require "es.php";
}

?>
<html>
    <a href="?idioma=es">Español</a> 
    <a href="?idioma=en">Inglés</a>
    <body>
        <h1></p><?php echo $traducciones["error404"] ?></h1>
        <h1></p><?php echo $traducciones["error403"] ?></h1>
        <a href="inicio-pagina-de-x.php">Volver al login</a>
    </body>
</html>