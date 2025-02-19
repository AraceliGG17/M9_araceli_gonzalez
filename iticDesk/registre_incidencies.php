<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>incidencies</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 20px;
        }
        form {
            background: lavender;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            text-align: left;
        }
        label {
            font-weight: bold;
        }
        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="./insert_inci.php" method="post">
        <label for="titol">Titol:</label>
        <input type="text" name="titol" id="titol">
        <br><br>

        <label for="descripcio">Descripció:</label>
        <textarea name="descripcio" id="descripcio" cols="30" rows="10"></textarea>
        <br><br>

        <label for="tipus">Prioritat:</label>
        <select name="tipus" id="tipus">
            <option value="Tipo I">Tipos 1</option>
            <option value="Tipus II">Tipos 2</option>
            <option value="Tipus III">Tipos 3</option>
            <option value="Tipus IV">Tipos 4</option>
        </select>
        <br><br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>