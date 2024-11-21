<?php
session_start();
if (!isset($_SESSION['user'])) {
    // si no hay sesion
    header("Location: index.html");
}
//mostramos el contenido de la pagina
echo "Hola, " . $_SESSION["user"] . " ";
echo "<a href= 'logut.php'> ir a login </a><br>";
echo "<p>esta es la segunda pagina de informacion</p>";
echo "<a href= 'pagina1.php' > ir a la segunda pagina de informacion </a><br>";
?>