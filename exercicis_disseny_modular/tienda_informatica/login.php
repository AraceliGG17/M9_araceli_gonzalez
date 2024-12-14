<?php
    session_start();
    if(isset($_POST['user']) && isset($_POST['pwd'])){
        $user = $_POST['user'];
        $pwd = $_POST['pwd'];
        if($user == $pwd){
            $_SESSION['user'] = $user;
            header("Location: tenda.php");
            } else {
                header('Location: tenda.php');
            }
            
    }
    
?>