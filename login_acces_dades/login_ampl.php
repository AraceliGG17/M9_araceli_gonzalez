<?php
    session_start();
    if(isset($_POST['user']) && isset($_POST['pwd'])){
        $user = $_POST['user'];
        $pwd = $_POST['pwd'];

        $conn = mysqli_connect("localhost", "ara", "ara1", "login");
        
        
        $sql = "SELECT * FROM usuario WHERE user = '$user' and password= '$pwd' ";
        $query=mysqli_query($conn,$sql);
        $rows = mysqli_num_rows($query);

        if($rows >= 1){
            $_SESSION['user'] = $user;
            header("Location: pagina1.php");
            } 
        else {
                header('Location: index.html');

    }
}
    
?>