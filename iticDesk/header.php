<?php
session_start();
if(!isset($_SESSION['user_login'])){
    header("Location: index.html");
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                text-align: center;
                margin: 0;
                padding: 0;
            }
            header {
                background-color: #e6e6fa;
                color: black;
                padding: 20px;
            }
            h1, h2 {
                margin: 10px 0;
            }
            button {
                background-color: #ff4d4d;
                color: white;
                border: none;
                padding: 10px 20px;
                font-size: 16px;
                cursor: pointer;
                border-radius: 5px;
            }
            button a {
                color: white;
                text-decoration: none;
            }
            button:hover {
                background-color: #cc0000;
            }
        </style>
</head>
<body>
    <header>
        <h1>
            Bienvenidos <?php echo $_SESSION['nom'];?>
        </h1>
        <h2>
            rol: <?php echo $_SESSION['rol']; ?>
        </h2>
        <button><a href="logut.php">Logout</a></button><br>
        <br>
</header>
</body>
</html>
