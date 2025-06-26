<?php
include("db.php");



// Obtener los datos del medicamento a eliminar y agregar al historial
$medid = $_POST['medId'];
$medicamento = $_POST['medicamento'];
$horaEventos = $_POST['horaEventos'];
$fechaEventos = $_POST['fechaEventos'];
$notas = $_POST['notas'];


// Consulta SQL para eliminar el evento de la tabla de recordatorios
$eliminarQuery = "DELETE FROM recordatoriomedicamentos WHERE id_medicamento = $medid";
mysqli_query($conn, $eliminarQuery);

// Consulta SQL para agregar el evento a la tabla de historial
$insertarQuery = "INSERT INTO historial_medicamentos (medicamentos, fechas, horas, notas, estados, med_id) VALUES ('$medicamento', '$fechaEventos', '$horaEventos', '$notas', 'inactivo', '$medid')";
mysqli_query($conn, $insertarQuery);





// Enviar una respuesta indicando el éxito o fracaso de las consultas
if (mysqli_affected_rows($conn) > 0) {
    echo "OK";
}
else {
    echo "Error al eliminar el medicamento y agregarlo al historial.";
}


?>

