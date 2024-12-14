<?php
session_start();

//mensaje cuando el numero de visitas es parejo o impar.
    if ($_COOKIE['visita']% 2 == 0) {
        echo "Benvingut de nou, esperem que tingui un bon dia";
    } else {
        echo "Benvingut, és un plaer que ens visitis";
    }

if(isset($_COOKIE['visita'])){
    $visita = $_COOKIE['visita'];
    $visita_output = $visita+1;
    echo "Visita nº $visita_output";
    setcookie('visita', $visita+=1);
}
else{
    echo "Visita nº: 1";
    setcookie('visita',1);
}
require_once("descomptes.php")
?>

