<?php
session_start();

// vemos si existe la visita o no 
if (!isset($_SESSION['visites'])) {
    $_SESSION['visites'] = 0;
}
if (!isset($_SESSION['logat'])) {
    $_SESSION['logat'] = false;
}
if (!isset($_SESSION['nom_usuari'])) {
    $_SESSION['nom_usuari'] = '';
}

// Incrementa el contador de visitas
$_SESSION['visites']++;

// Recupera el contador y si está logado
$visites = $_SESSION['visites'];
$logat = $_SESSION['logat'];
$nom_usuari = $_SESSION['nom_usuari'];

// Inicializa el mensaje
$missatge = "";

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>doc_login</title>
</head>
<body>
    <?php
        require_once("comptador_visitas.php");
    ?>
    <a href="formulario.html"><button>login</button></a>
    <a href="logut.php"><button>logut</button></a>
</html>
