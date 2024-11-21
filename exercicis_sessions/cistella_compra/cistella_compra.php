<?php
session_start();

//iniciar la cesta si no existe
if (!isset($_SESSION['cesta'])) {
    $_SESSION['cesta'] = ['prod1' => 0, 'prod2' => 0, 'prod3' =>0];
}

//con esto agregamos los productos a la cesta
if (isset($_POST['agrega'])){
    $_SESSION['cesta']['prod1'] += intval($_POST['cantidad_prod1'] ?? 0);
    $_SESSION['cesta']['prod2'] += intval($_POST['cantidad_prod2'] ?? 0);
    $_SESSION['cesta']['prod3'] += intval($_POST['cantidad_prod3'] ?? 0);
}
// con esto mostramos elcontenido de lacesta
echo "<h1>Cesta de la compra</h1>";
echo "<p>Manzana: {$_SESSION['cesta']['prod1']} unidades</p>";
echo "<p>Leche: {$_SESSION['cesta']['prod2']} unidades</p>";
echo "<p>Galletas de chocolate: {$_SESSION['cesta']['prod3']} unidades</p>";
echo "<a href='index.html'>Vuelve a la botiga</a>";
echo " | <a href='finaliza_compra.php'>Finalizar compra</a>";
?>