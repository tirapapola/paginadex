<?php
    session_start();

    include "control-estilo.php";
?>

<html>
<head>
  <title>Cuestionario X</title>
  <meta charset="utf-8"/>
  <link rel="icon" href="img/tecca.png"type="image/png"sizes="16x16"/>
  <link rel="stylesheet" href="estiloClaro.css"/>
</head>
    <body>
        <a href="?idioma=es"><img src="img/es.png"></a>
        <a href="?idioma=en"><img src="img/en.png"></a>
        <?php if ($modo == "estiloClaro"): ?>
            <a href="?modo=cambiar">Modo Oscuro</a>
        <?php else: ?>
            <a href="?modo=cambiar">Modo Claro</a>
        <?php endif; ?>
        <form action="resultado.php" method="post">
            <!-- Pregunta 1 -->
            <p><b>¿Donde se ejecuta PHP?</b></p>
            <select name="pregunta1">
                <option value="servidor">Del lado del servidor</option>
                <option value="cliente">Del lado del cliente</option>
                <option value="libre">En ningún sitio, es un código libre</option>
            </select>
            <!-- Pregunta 2 -->
            <p><b>En PHP, si queremos declarar una variable con el valor de 7, lo hacemos:</b></p>
            <input type="radio" id="js" name="pregunta2" value="js">
            <label for="js">let numero = 7;</label><br>
            <input type="radio" id="python" name="pregunta2" value="python">
            <label for="python">numero = 7</label><br>
            <input type="radio" id="java" name="pregunta2" value="java">
            <label for="java">int numero = 7;</label><br>
            <input type="radio" id="php" name="pregunta2" value="php">
            <label for="php">$numero = 7;</label><br>
            <!-- Pregunta 3 -->
            <p><b>Si queremos enviar información al servidor de forma segura, ¿Que método usamos?</b></p>
            <select name="pregunta3">
                <option value="get">get</option>
                <option value="post">post</option>
            </select>
            <!-- Pregunta 4 -->
            <p><b>Un array solo puede contener un elemento</b></p>
            <input type="radio" id="true" name="pregunta4" value="true">
            <label for="true">Verdadero</label><br>
            <input type="radio" id="false" name="pregunta4" value="false">
            <label for="falso">Falso</label><br>
            <!-- Pregunta 5 -->
            <p><b>Una variable estática...</b></p>
            <input type="radio" id="1" name="pregunta5" value="1">
            <label for="1">No se mueve por la pantalla</label><br>
            <input type="radio" id="2" name="pregunta5" value="2">
            <label for="2">Cambia su valor cada vez que se llama a la función que la contiene</label><br>
            <input type="radio" id="3" name="pregunta5" value="3">
            <label for="3">No cambia su valor cada vez que se llama a la función que la contiene</label><br>
            <!-- Pregunta 6 -->
            <p><b>¿Cuáles son los tipos de datos posibles en php?</b></p>
            <input type="radio" id="1" name="pregunta6" value="1">
            <label for="1">Boolean, integer, float, basic, numeric</label><br>
            <input type="radio" id="2" name="pregunta6" value="2">
            <label for="2">float, string, random, boolean</label><br>
            <input type="radio" id="3" name="pregunta6" value="3">
            <label for="3">boolean, integer, float, string</label><br>
            <input type="radio" id="4" name="pregunta6" value="4">
            <label for="4">random, basic, =>, ==</label><br>
            <!-- Pregunta 7 -->
            <p><b>¿Cómo se pone un comentario de varias líneas en php?</b></p>
            <input type="radio" id="1" name="pregunta7" value="1">
            <label for="1">// comentario <br>&nbsp&nbsp&nbsp&nbsp&nbsp // comentario</label><br>
            <input type="radio" id="2" name="pregunta7" value="2">
            <label for="2">)*comentario <br>&nbsp&nbsp&nbsp&nbsp&nbsp comentario*)</label><br>
            <input type="radio" id="3" name="pregunta6" value="3">
            <label for="3">/* comentario <br>&nbsp&nbsp&nbsp&nbsp&nbsp comentario*/</label><br>
            <input type="radio" id="4" name="pregunta6" value="4">
            <label for="4"><** comentario <br>&nbsp&nbsp&nbsp&nbsp&nbsp comentario**></label><br>
            <!-- Pregunta 8 -->
            <p><b>¿Cómo se invoca a la siguiente función?</b></p>
            <p>function saludar() {</p>
            <p>echo "hola tio mierda";</p>
            <p>}</p>
            <input type="radio" id="1" name="pregunta8" value="1">
            <label for="1">function saludar();</label><br>
            <input type="radio" id="2" name="pregunta8" value="2">
            <label for="2">saludar();</label><br>
            <input type="radio" id="3" name="pregunta8" value="3">
            <label for="3">echo function();</label><br>
            <input type="radio" id="4" name="pregunta8" value="4">
            <label for="4">function();</label><br>
            <!-- Pregunta 9 -->
            <p><b>Si quieres usar una variable dentro y fuera de una función, ¿Que tipo de variable usas?</b></p>
            <input type="radio" id="1" name="pregunta9" value="1">
            <label for="1">global</label><br>
            <input type="radio" id="2" name="pregunta9" value="2">
            <label for="2">local</label><br>
            <input type="radio" id="3" name="pregunta9" value="3">
            <label for="3">estatic</label><br>
            <input type="radio" id="4" name="pregunta9" value="4">
            <label for="4">variable</label><br>
            <!-- Pregunta 10 -->
            <p><b>Si queremos que nuestro código, que utiliza un archivo externo sólo una vez, muestre error si éste falta<br>
              pero se siga ejecutando, ¿Que tipo de dependencia utilizarías?</b></p>
            <input type="radio" id="1" name="pregunta10" value="1">
            <label for="1">include</label><br>
            <input type="radio" id="2" name="pregunta10" value="2">
            <label for="2">require</label><br>
            <input type="radio" id="3" name="pregunta10" value="3">
            <label for="3">include_once</label><br>
            <input type="radio" id="4" name="pregunta10" value="4">
            <label for="4">require_once</label><br>
            <input type = "submit">
        </form>
    </body>
    <footer>
        Almirante Abraham & Cheriff Oscar &copy; 2025
        <img src="img/tecca.png" width="35" height="30">
        <a href="inicio.php">VOLVER</a>
    </footer>
</html>
