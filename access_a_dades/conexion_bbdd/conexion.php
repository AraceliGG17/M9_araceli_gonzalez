<?php
	$conn = mysqli_connect('localhost','ara','ara1','test');
	if(!$conn){
		echo "no se ha podido conectar correctamente";
	}
	else{
		echo "conexion realizada";
}

	$query = mysqli_query($conn, "INSERT INTO usuaris (dni, nom, cognoms) VALUES ('12345654G','Joela','Cabrera')");
?>
