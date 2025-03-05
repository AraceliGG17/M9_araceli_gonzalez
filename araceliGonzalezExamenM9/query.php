<?php
$year = $_POST['year'];
$conn = mysqli_connect('localhost','araceliGonzalexExam', 'Admin1234*', 'araceliGonzalexExam');

if(!$conn){
    echo "no se ha podido conectar correctamente";
}
else{
    $sql = "SELECT TITULO,ANYO FROM peliculas WHERE ANYO > $year ";
    $query = mysqli_query($conn,$sql);
    
    while( $row = mysqli_fetch_array($query)){
        echo "Titul: " . $row['TITULO'] . "Año: " . $row['ANYO'] . "<br>";
    }
    $result = mysqli_fetch_array($query);
}
?>