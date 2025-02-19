<?php
    session_start();
    $conn = mysqli_connect("localhost", "araceli1", "ara", "araceli_gonzalez_iticdesk");
    $_SESSION['user_login']='intento';
    $user=$_POST['user'];
    $passwd=$_POST['pwd'];

    echo $user;
    if(!$conn){
    echo "no se ha conectado a la base de datos";
}
else {
    // Obtener información del usuario
    $sql = "SELECT * FROM usuaris WHERE email = \"$user\" AND contrasenya = \"$passwd\" ";
    echo $sql;
    $query = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($query);
    echo $rows;

    if($rows > 0){
        while($row = mysqli_fetch_array($query)){
            $user = $row["nom"];
            $rol = $row["rol"];
            $dni = $row["dni"];
        }
        $_SESSION['user']=$user;
        $_SESSION['rol']=$rol;
        $_SESSION['nom']=$user;
        $_SESSION['dni']=$dni;
        header('Location: access.php');
    }
    else {
        header('Location: index.html');
        echo "user o password incorrectos";
    };
}

?>
