<?php
session_start();
if (! isset($_SESSION['user'])) {
    // si no hay sesion
    header("Location: index.html");
}
//mostramos el contenido de la pagina
echo "Hola, " . $_SESSION["user"] . " ";
echo "<p>Estas en la base de datos <h1>¡Bienvenido!</h1></p>";
echo "<a href= 'logut.php'> ir a login</a><br>";
?>