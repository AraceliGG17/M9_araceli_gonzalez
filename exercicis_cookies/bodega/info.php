<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Informació de la Bodega</title>
</head>
<body>
    <h1>Informació de la Bodega</h1>

    <?php
    // Leer cookies
    $majoredat = isset($_COOKIE["majoredat"]) ? $_COOKIE["majoredat"] : "";
    $idioma = isset($_COOKIE["idioma"]) ? $_COOKIE["idioma"] : "";
    $moneda = isset($_COOKIE["moneda"]) ? $_COOKIE["moneda"] : "";

    // Generar mensaje en función de las cookies
    if ($majoredat == "no") {
        // Mensaje para menores de edad
        if ($idioma == "ca") {
            echo "<p>No et podem vendre alcohol si ets menor d’edat.</p>";
        } elseif ($idioma == "es") {
            echo "<p>No podemos vender alcohol si eres menor de edad.</p>";
        } elseif ($idioma == "en") {
            echo "<p>We cannot sell alcohol if you are underage.</p>";
        }
    } else {
        // Mensaje para mayores de edad
        $message = "";
        $price = "";
        if ($idioma == "ca") {
            $message = "T’oferim el vi “Les Terrasses” a un preu de ";
            $price = ($moneda == "eur") ? "39 €" : (($moneda == "gbp") ? "34 £" : "42 $");
        } elseif ($idioma == "es") {
            $message = "Te ofrecemos el vino “Les Terrasses” a un precio de ";
            $price = ($moneda == "eur") ? "39 €" : (($moneda == "gbp") ? "34 £" : "42 $");
        } elseif ($idioma == "en") {
            $message = "We offer you the wine “Les Terrasses” at a price of ";
            $price = ($moneda == "eur") ? "39 €" : (($moneda == "gbp") ? "34 £" : "42 $");
        }
        echo "<p>$message $price</p>";
    }
    ?>
</body>
</html>
