<?php
// Comprobar si el formulario fue enviado usando el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $majoredat = $_POST["majoredat"];
    $idioma = $_POST["idioma"];
    $moneda = $_POST["moneda"];

    // Guardar cada selección en una cookie con duración de 1 hora
    setcookie("majoredat", $majoredat, time() + 3600, "/");
    setcookie("idioma", $idioma, time() + 3600, "/");
    setcookie("moneda", $moneda, time() + 3600, "/");

    // Redirigir a info.php para mostrar el mensaje al usuario
    header("Location: info.php");
    exit();
} 

// Si se accede a procesar.php sin enviar el formulario, redirigir a formulario.php
header("Location: formulario.php");
exit();
?>
