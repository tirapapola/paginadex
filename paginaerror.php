<?php
$idioma = $_GET["idioma"] ?? "es";
$fichero = "$idioma.php";


if(file_exists($fichero)){
    require $fichero;
}else{
    require "es.php";
}
?>

<html>
    <body>
        <h1></p><?php echo $traducciones["error404"] ?></h1>
        <p>Por favor, espera 10 segundos para volver a intentarlo</p>
        <a href="inicio-pagina-de-x.php">Volver al login</a>
    </body>
</html>