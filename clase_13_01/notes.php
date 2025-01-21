<?php

$nota = $_GET['nota'];

$conn = mysqli_connect("localhost", "ara", "ara1", "test");

if(!$conn){
	echo "No se puede conectar a la bbdd";	
}
else{
    $sql="SELECT * FROM usuaris WHERE Nota >= 5";
    $query=mysqli_query($conn, $sql);
    while( $row = mysqli_fetch_array($query)){
        echo "Nom: " . $row ['nom'] . " cognom: " . $row['cognom'] . " Nota: " . $row['Nota'] . "<br>";
    }
    $result = mysqli_fetch_array($query);
}
?>
