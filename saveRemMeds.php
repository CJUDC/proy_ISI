<?php


include("db.php");

if (isset($_POST['saveRemMed'])) {

    $codigopaciente = $_POST['reminder-codp'];
    $medicamento = $_POST['reminder-med'];   
    $fecha = $_POST['reminder-fecha'];
    $hora = $_POST['reminder-hora'];
    $notas = $_POST['reminder-notas'];

    $query = "INSERT INTO recordatoriomedicamentos(codigopaciente, medicamento, fecha, hora, nota) VALUES ($codigopaciente, '$medicamento', '$fecha', '$hora', '$notas')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed.");
    }

    $_SESSION['mensaje1.1'] = 'Recordatorio guardado correctamente!';
    $_SESSION['message_type1.1'] = 'success';
    header('Location: crearRemMeds.php');


}

?>