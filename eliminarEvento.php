<?php
include("db.php");

// Obtener los datos del evento a eliminar y agregar al historial
$eventoId = $_POST['eventoId'];
$asunto = $_POST['asunto'];
$nombre = $_POST['nombre'];
$doctor = $_POST['doctor'];
$lugar = $_POST['lugar'];
$horaEvento = $_POST['horaEvento'];
$fechaEvento = $_POST['fechaEvento'];


// Consulta SQL para eliminar el evento de la tabla de recordatorios
$eliminarQuery = "DELETE FROM recordatoriocitas WHERE id_cita = $eventoId";
mysqli_query($conn, $eliminarQuery);

// Consulta SQL para agregar el evento a la tabla de historial
$insertarQuery = "INSERT INTO historial_citas (asuntos, fechas, horas, lugars, doctors, citas_id, estado) VALUES ('$asunto', '$fechaEvento', '$horaEvento', '$lugar', '$doctor', '$eventoId', 'inactivo')";
mysqli_query($conn, $insertarQuery);





// Enviar una respuesta indicando el éxito o fracaso de las consultas
if (mysqli_affected_rows($conn) > 0) {
    echo "OK";
}
else {
    echo "Error al eliminar el evento y agregarlo al historial.";
}







?>

