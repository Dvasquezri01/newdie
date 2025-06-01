<?php
// Protección simple con clave
$clave = "admin123"; // Cambia esta clave

if (!isset($_GET['key']) || $_GET['key'] !== $clave) {
    die("Acceso denegado.");
}

$archivo = "registros.txt";

// Comprobar si el archivo existe y tiene registros
if (file_exists($archivo)) {
    $registros = file($archivo);
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <title>Registros</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    </head>
    <body class='bg-dark text-white p-5'>
        <div class='container'>
            <h2>Registros guardados</h2>
            <ul class='list-group'>";
    foreach ($registros as $linea) {
        echo "<li class='list-group-item'>" . htmlspecialchars($linea) . "</li>";
    }
    echo "</ul></div></body></html>";
} else {
    echo "<p>No hay registros aún.</p>";
}
?>
