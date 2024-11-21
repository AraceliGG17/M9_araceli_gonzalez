<?php
session_start();

$prod1_precio = 2;
$prod2_precio= 5;
$prod3_precio = 3;

//primero calculamos el total de la compra
$total = ($_SESSION['cesta']['prod1'] * $prod1_precio) + ($_SESSION['cesta']['prod2'] * $prod2_precio) + ($_SESSION['cesta']['prod3'] * $prod3_precio);

//ahora muestro el resumen de todala compra
echo "<h1>Resumen de la compra</h1>";
echo "<p>Manzanas: {$_SESSION['cesta']['prod1']} unidades  " . ($_SESSION['cesta']['prod1'] * $prod1_precio) . "€</p>";
echo "<p>Leche: {$_SESSION['cesta']['prod2']} unidades  " . ($_SESSION['cesta']['prod2'] * $prod2_precio) . "€</p>";
echo "<p>Galletas de chocolate: {$_SESSION['cesta']['prod3']} unidades  " . ($_SESSION['cesta']['prod3'] * $prod3_precio) . "€</p>";
echo "<p>Total: $total €</p>";

//ahora creo el boton de confirmar la compra 
echo "<form action='' method='POST'>
        <button type='submit' name='confirmar'>Confirmar compra</button>
      </form>";

//ahora borramos todo lo que hay en la cesta
if (isset($_POST['confirmar'])) {
    unset($_SESSION['cesta']);
    echo "<p>Compra confirmada! La cesta se ha vaciado.</p>";
    echo "<a href='index.html'>Vuelve a la botiga</a>";
}

?>