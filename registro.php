<?php
// Verificar que el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];
    $valoracion = $_POST['valoracion'];
    $comentario = $_POST['comentario'];

    // Preparar los datos para guardarlos en el archivo
    $registro = "Nombre: $nombre, Correo: $correo, Edad: $edad, Valoración: $valoracion, Comentario: $comentario\n";

    // Guardar los datos en el archivo de registros
    $archivo = "registros.txt";
    file_put_contents($archivo, $registro, FILE_APPEND);
    
    echo "<h3>¡Registro guardado con éxito!</h3>";
    echo "<a href='http://localhost/diego%20oficial/formu.html' class='btn btn-primary'>Enviar otro registro</a>";
}
?>
