<?php
session_start();
if (! isset($_SESSION['user'])) {
    // si no hay sesion
    header("Location: index.html");
}
//mostramos el contenido de la pagina
echo "Hola, " . $_SESSION["user"] . " ";
echo "<p>esta es la primera pagina de informacion</p>";
echo "<a href= 'pagina2.php' > ir a la segunda pagina de informacion</a><br>";
?>