<?php
session_start(); // Iniciar la sesión

// Inicializamos el contador
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 1;
} else {
    $_SESSION['contador']++;
}

// Comprobamos si el usuario ha comprado
if (!isset($_SESSION['compra_con_descuento'])) {
    $_SESSION['compra_con_descuento'] = false; 
}

// Establecemos la cookie
setcookie("miCookie", "valor_de_la_cookie", time() + 3600);
if (isset($_COOKIE["miCookie"])) {
    echo "La cookie se ha guardado<br>";
} else {
    echo "Hubo un problema con la cookie<br>";
}

// Aplicamos el descuento según el número de visitas
$descuento = 0;
if ($_SESSION['contador'] >= 10 && !$_SESSION['compra_con_descuento']) {
    $descuento = 50; // Descuento del 50% para 10 visitas
} elseif ($_SESSION['contador'] >= 5 && !$_SESSION['compra_con_descuento']) {
    $descuento = 20; // Descuento del 20% para 5 visitas
}

// Mostrar contador
echo "Número de visitas: " . $_SESSION['contador'] . "<br>";
if ($descuento > 0) {
    echo "¡Felicidades! Tienes un descuento de " . $descuento . "% en tu próxima compra.<br>";
}
?>

<form method="post" action="#">
    <input type="text" name="producto" placeholder="Nombre del producto" required>
    <input type="submit" value="Comprar">
</form>

<?php
// Hacemos la compra y actualizamos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($descuento > 0) {
        echo "Compra realizada. Se ha aplicado el descuento de " . $descuento . "%<br>";
        $_SESSION['compra_con_descuento'] = true; // Actualizamos el estado de compra
    } else {
        echo "Compra realizada.<br>";
    }
}
?>
