<?php
// Afegeix un codi de descompte si s'arriba a les visites establertes
if ($_COOKIE['visita'] == 19) {
    echo("Agraïm la seva fidelitat, utilitzi el codi PROMO24 per un 20% de descompte");
}

if (isset($_SESSION['logat'])) {
    if ($_COOKIE['visita'] == 9){
        echo $_SESSION['nom_usuari'];
        echo("Agraïm la seva fidelitat,utilitzi el codi PROMO24 per un 30% de descompte");
    }
}
?>