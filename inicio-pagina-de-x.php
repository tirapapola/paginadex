<?php
session_start(); // necesario para usar $_SESSION

$idioma = $_GET["idioma"] ?? "es";
$fichero = "$idioma.php";

if(file_exists($fichero)){
    require $fichero;
}else{
    require "es.php";
}

$usuario_correcto = "admin";
$contraseña_correcta = "admin";

// inicializamos contador de intentos si no existe , isset comprueba si existe la variable
if(!isset($_SESSION['fallo'])){
    $_SESSION['fallo'] = 3;
}

$usuario = $_POST["nombre"] ?? "";
$contraseña = $_POST["pass"] ?? "";



if($usuario !== "" || $contraseña !== ""){
    if($usuario_correcto == $usuario && $contraseña_correcta == $contraseña){
        $_SESSION['fallo'] = 3; // reiniciamos al login correcto
        header("Location: home.php");
        exit;
    } else {
        $_SESSION['fallo']--; 
        if($_SESSION['fallo'] > 0){
            $error = "Te quedan " . $_SESSION['fallo'] . " intentos";
        } else {
            $_SESSION['fallo'] = 3; // se reinicia contador
            header("Location: paginaerror.php");
            exit;
        }
    }
}
?>

<html>
<a href="?idioma=es">Español</a> 
<a href="?idioma=en">Ingles</a>
<body>
<center>
<form method="POST">
    <?php
    if($error !== ""){
        echo "<p>$error</p>";
    }
    ?>
    <p><?php echo $traducciones["usuario"]?></p> <!-- Pregunta de examen, si usas? ?php tienes es usar echo para que muestre en pantalla >? lo muestra sin echo -->
    <input type="text" name="nombre" value="<?php echo htmlspecialchars($usuario, ENT_QUOTES, 'UTF-8'); ?>">

    <p><?php echo $traducciones["contraseña"] ?></p>
    <input type="password" name="pass">

    <input type="submit">
</form>
    </center>
</body>
</html>
