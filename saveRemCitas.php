<?php 

include("db.php");

if(isset($_POST['saveRemCita'])){
    $asunto = $_POST['appointment-asunto'];
    $codigopaciente = $_POST['appointment-codp'];
    $fecha = $_POST['appointment-date'];
    $hora = $_POST['appointment-time'];
    $doctor = $_POST['appointment-doctor'];
    $lugar = $_POST['appointment-location'];
    $notas = $_POST['appointment-notes'];

    $query = "INSERT INTO recordatoriocitas(asunto, codigopaciente, fecha, hora, doctor, lugar, notas) VALUES ('$asunto', $codigopaciente, '$fecha', '$hora', '$doctor', '$lugar', '$notas')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed.");
    }

    $_SESSION['mensaje1'] = 'Recordatorio guardado correctamente!';
    $_SESSION['message_type1'] = 'success';
    header('Location: crearRemCitas.php');
    
}

?>