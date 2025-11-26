<?php
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
