<?php
	$conn = mysqli_connect('localhost','ara','ara1','test');
	if(!$conn){
		echo "no se ha podido conectar correctamente";
	}
	else{
		echo "conexion realizada";
}
?>
