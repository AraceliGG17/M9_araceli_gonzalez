<?php
include 'header.php';

session_start();
// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['user_login'])) {
    header("Location: index.html");
    exit();
}

$conn = mysqli_connect("localhost", "araceli1", "ara", "araceli_gonzalez_iticdesk");
#por si hay algun error saberlo
if (!$conn) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}

$rol_usuario = $_SESSION['rol']; 
$id = $_SESSION['dni'];
echo $rol;

// Consulta según el rol del usuario
if ($rol_usuario == 'administrador') {
    // Administrador ve todas las incidencias
    $sql = "SELECT * FROM incidencies ORDER BY prioritat DESC, data_creacio ASC";
} else {
    // Profesor solo ve sus propias incidencias
    $sql = "SELECT * FROM incidencies WHERE id_usuari = '$id'";
}
$query = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listado de Incidencias</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        button {
            margin-top: 15px;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        button a {
            color: white;
            text-decoration: none;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h3>Listado de Incidencias</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>Fecha de Creación</th>
            <th>Estado</th>
            <th>Prioridad</th>
        </tr>

    <?php while ($row = mysqli_fetch_assoc($query)) { ?>
        <tr>
            <td><?php echo ($row['id']); ?></td>
            <td><?php echo ($row['titol']); ?></td>
            <td><?php echo ($row['descripcio']); ?></td>
            <td><?php echo ($row['data_creacio']); ?></td>
            <td><?php echo ($row['estat']); ?></td>
            <td><?php echo ($row['prioritat']); ?></td>
        </tr>
    <?php } ?>
</table>

<button><a href="access.php">Volver al inicio</a></button>

</body>
</html>

<?php
// Cerrar conexión
mysqli_close($conn);
?>
