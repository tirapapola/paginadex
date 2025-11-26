<?php

    if(isset($_GET["idioma"] )) {
        $_SESSION["idioma"] = $_GET["idioma"];
    }

$idioma = $_SESSION["idioma"] ?? "es";
$fichero = "$idioma.php";

    if(file_exists($fichero)){
        require $fichero;
    } else {
        require "es.php";
    }
?>