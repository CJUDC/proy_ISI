<?php


date_default_timezone_set('America/Bogota');
include("db.php");

// Obtener la fecha y hora actual
$fecha_actual = date('Y-m-d');
$hora_actual = date('H:i:s');

// Verificar si se ha recibido una fecha y hora específica a través de GET
// Consulta SQL para obtener los eventos que se deben mostrar
// $query = "SELECT * FROM recordatoriocitas r, paciente p WHERE p.id_paciente = r.codigoPaciente AND r.fecha = '$fecha_actual' AND r.hora <= '$hora_actual'";

$query = "SELECT r.*, p.nombre, p.correo FROM recordatoriomedicamentos r
          INNER JOIN paciente p ON p.id_paciente = r.codigoPaciente
          LEFT JOIN historial_medicamentos h ON h.med_id = r.id_medicamento
          WHERE r.fecha = '$fecha_actual' AND r.hora <= '$hora_actual' AND h.med_id IS NULL";



$resultado = mysqli_query($conn, $query);

if (!$resultado) {
    die("Error al consultar la base de datos: " . mysqli_error($conn));
}

$eventom = array();

while ($fila = mysqli_fetch_assoc($resultado)) {
    // Obtener los datos relevantes
    $medicamento = $fila['medicamento'];
    $nombres = $fila['nombre'];
    $fechaEventos = $fila['fecha'];
    $horaEventos = $fila['hora'];
    $notas = $fila['nota'];
    $idmed = $fila['id_medicamento'];




    // Verificar si la hora del evento se ha cumplido
    if ($horaEventos <= $hora_actual) {
        // Agregar el evento al arreglo de eventos
        $eventom[] = array(
            'medid' => $idmed,
            'medicamento' => $medicamento,
            'fechaEventos' => $fechaEventos,
            'horaEventos' => $horaEventos,
            'notas' => $notas,
            'nombres' => $nombres,        
        );

    }
}

// Enviar la respuesta en formato JSON
header('Content-Type: application/json');
echo json_encode($eventom);



?>