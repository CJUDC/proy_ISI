<?php

include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM recordatoriocitas WHERE id_cita = $id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed.");
    }

    $_SESSION['mensaje2'] = 'Cita eliminada correctamente';
    $_SESSION['message_type2'] = 'danger';
    header('Location: citas.php');
}


if (isset($_GET['idh'])) {
    $idh = $_GET['idh'];
    $query = "DELETE FROM historial_citas WHERE id_Hcita = $idh";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed.");
    }

    $_SESSION['mensaje2.2'] = 'Cita eliminada del historial';
    $_SESSION['message_type2.2'] = 'danger';
    header('Location: historial.php');
}

?>