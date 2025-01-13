<?php

$nota = $_GET['nota'];

$conn = mysqli_connect("localhost", "ara", "ara1", "test");

if(!$conn){
	echo "No se puede conectar a la bbdd";	
}
else{
    $insert_query = "INSERT INTO usuaris (dni,nom, cognoms, Nota) VALUES ('18346282R','mar', 'saro', '3')";
    $query_insert = mysqli_query($conn, $insert_query);
    $affected = mysqli_affected_rows($conn);
    echo "se han insertado $affected ";
}

?>
