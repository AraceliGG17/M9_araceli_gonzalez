<?php
    session_start();
    if(isset($_POST['user']) && isset($_POST['pwd'])){
        $user = $_POST['user'];
        $pwd = $_POST['pwd'];
        
        if($user == $pwd){
            $_SESSION['user'] = $user;
            header("Location: pagina1.php");
            } else {
                header('Location: index.html');
            }
            
    }
    
?>