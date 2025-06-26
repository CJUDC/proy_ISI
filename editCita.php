<?php
include("db.php");
include("includes/header.php");
$asunto = '';
$doctor = '';
$lugar = '';
$fecha = '';
$hora = '';
$notas = '';
$id = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM recordatoriocitas WHERE id_cita = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $asunto = $row['asunto'];
        $doctor = $row['doctor'];
        $lugar = $row['lugar'];
        $fecha = $row['fecha'];
        $hora = $row['hora'];
        $notas = $row['notas'];
    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $asunto = $_POST['asunto'];
    $doctor = $_POST['doctor'];
    $lugar = $_POST['lugar'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $notas = $_POST['notas'];

    $query = "UPDATE recordatoriocitas set asunto = '$asunto', doctor = '$doctor', lugar = '$lugar', fecha = '$fecha', hora = '$hora', notas = '$notas' WHERE id_cita=$id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
      die("Query Failed.");
    };
    $_SESSION['mensaje3'] = 'Cita actualizada exitosamente';
    $_SESSION['message_type3'] = 'warning';
    header('Location: citas.php');
}
include("includes/footer.php");
?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body">
          <h2>Modifica tu cita</h2>
      <form action="editCita.php?id=<?php echo $_GET['id']; ?>" method="POST">

        <div class="form-group">
            <label for="appointment-title">Asunto:</label>
            <input name="asunto" type="text" class="form-control" value="<?php echo $asunto; ?>" placeholder="Actualizar asunto">
        </div>

        <div class="form-group">
            <label for="appointment-time">Doctor:</label>
            <input name="doctor" type="text" class="form-control" value="<?php echo $doctor; ?>" placeholder="Doctor">
        </div>

        <div class="form-group">
            <label for="appointment-location">lugar:</label>
            <input name="lugar" type="text" class="form-control" value="<?php echo $lugar; ?>" placeholder="Lugar">
        </div>

        <div class="form-group">
          <label for="appointment-date">fecha:</label>  
          <input name="fecha" type="date" class="form-control" value="<?php echo $fecha; ?>" placeholder="Fecha">
        </div>

        <div class="form-group">
            <label for="appointment-time">Hora:</label>
            <input name="hora" type="time" class="form-control" value="<?php echo $hora; ?>" placeholder="Hora">
        </div>
        <div class="form-group">
            <label for="appointment-notes">Notas:</label>
            <textarea name="notas" class="form-control"><?php echo $notas; ?></textarea>
        </div>
        <button class="btn btn-dark m-2" name="update">
          Actualizar
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>