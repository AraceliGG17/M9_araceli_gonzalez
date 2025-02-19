<?php

session_start();
if(! isset($_SESSION['user_login'])){
    header("Location: index.html");
}

$conn = mysqli_connect("localhost", "araceli1", "ara", "araceli_gonzalez_iticdesk");

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}


date_default_timezone_set('UTC');
$data=date("Y-m-d H:i:s");

$id_usuari=$_SESSION['dni'];
$titol=$_POST['titol'];
$descripcio=$_POST['descripcio'];
$tipus=$_POST['tipus'];

if(!$conn){
    echo "No se ha podido conectar a la BBDD";
}
else {
    $sql  = "INSERT INTO incidencies (titol, descripcio, data_creacio, estat, prioritat, id_usuari) VALUES (\"$titol\", \"$descripcio\",\"$data\", \"oberta\", \"$tipus\", \"$id_usuari\")";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_affected_rows($conn);
    //Comprobar si se ha insertado correctament
    echo "Incidencia registrada con exito";  
    

}
?>
<hr><br><br>
<button><a href="registre_incidencies.php">Añadir otra Incidencia</a></button>
<button><a href="access.php">Volver al inicio</a></button>