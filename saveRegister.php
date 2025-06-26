<?php
include("db.php");

if (isset($_POST['saveRegister'])) {
    $nombre = $_POST['register-name'];
    $apellido = $_POST['register-lastname'];
    $cedula = $_POST['register-id'];
    $correo = $_POST['register-email'];
    $password = $_POST['register-password'];
    $repassword = $_POST['register-repassword'];

    $query = "INSERT INTO paciente (id_paciente, nombre, apellido, correo, contraseña) VALUES ($cedula, '$nombre', '$apellido', '$correo', '$password')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed.");
    }

    $_SESSION['mensaje4'] = 'Registro guardado correctamente!';
    $_SESSION['message_type4'] = 'success';
    header('Location: register.php');


}


?>