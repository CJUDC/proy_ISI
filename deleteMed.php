<?php

include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM recordatoriomedicamentos WHERE id_medicamento = $id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed.");
    }

    $_SESSION['mensaje2.1'] = 'Medicamento eliminado correctamente';
    $_SESSION['message_type2.1'] = 'danger';
    header('Location: medicamentos.php');
}

if (isset($_GET['idh'])) {
    $idh = $_GET['idh'];
    $query = "DELETE FROM historial_medicamentos WHERE id_Hmed = $idh";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed.");
    }

    $_SESSION['mensaje2.3'] = 'Medicamento eliminado del historial';
    $_SESSION['message_type2.3'] = 'danger';
    header('Location: historial.php');
}

?>