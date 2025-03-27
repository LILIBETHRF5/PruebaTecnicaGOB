<?php
// Configurar cabeceras para forzar la descarga del archivo CSV
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=usuarios.csv');

include("connection.php");
$con = connection();
// Abrir salida en memoria
$output = fopen('php://output', 'w');


fputcsv($output, ['id', 'nombre', 'nombre', 'lastname', 'password', 'email', 'Phone']);


// Verificar conexión
if ($con->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consultar usuarios en la base de datos
$sql="SELECT * FROM users";
$result = $con->query($sql);

// Escribir los datos en el archivo CSV
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        fputcsv($output, $row);
    }
}

// Cerrar conexión
$con->close();
exit();
?>
