<?php  

date_default_timezone_set('America/Bogota');
include("db.php");

// Obtener la fecha y hora actual
$fecha_actual = date('Y-m-d');
$hora_actual = date('H:i:s');

// Verificar si se ha recibido una fecha y hora específica a través de GET
// Consulta SQL para obtener los eventos que se deben mostrar
// $query = "SELECT * FROM recordatoriocitas r, paciente p WHERE p.id_paciente = r.codigoPaciente AND r.fecha = '$fecha_actual' AND r.hora <= '$hora_actual'";

$query = "SELECT r.*, p.nombre, p.correo FROM recordatoriocitas r
          INNER JOIN paciente p ON p.id_paciente = r.codigoPaciente
          LEFT JOIN historial_citas h ON h.citas_id = r.id_cita
          WHERE r.fecha = '$fecha_actual' AND r.hora <= '$hora_actual' AND h.citas_id IS NULL";



$resultado = mysqli_query($conn, $query);

if (!$resultado) {
    die("Error al consultar la base de datos: " . mysqli_error($conn));
}

$eventos = array();

while ($fila = mysqli_fetch_assoc($resultado)) {
    // Obtener los datos relevantes
    $asunto = $fila['asunto'];
    $nombre = $fila['nombre'];
    $doctor = $fila['doctor'];
    $horaEvento = $fila['hora'];
    $lugar = $fila['lugar'];
    $idcita = $fila['id_cita'];
    $fechaEvento = $fila['fecha'];

    

    // Verificar si la hora del evento se ha cumplido
    if ($horaEvento <= $hora_actual) {
        // Agregar el evento al arreglo de eventos
        $eventos[] = array(
            'citaid' => $idcita,
            'Asunto' => $asunto,
            'nombre' => $nombre,
            'doctor' => $doctor,
            'lugar' => $lugar,
            'fechaEvento' => $fechaEvento,
            'horaEvento' => $horaEvento,
        );
        
    }
}

// Enviar la respuesta en formato JSON
header('Content-Type: application/json');
echo json_encode($eventos);



?>