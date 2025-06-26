<?php
include("db.php");
include("includes/header.php");
$medicamento = '';
$fecha = '';
$hora = '';
$notas = '';
$id = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM recordatoriomedicamentos WHERE id_medicamento = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $medicamento = $row['medicamento'];
        $fecha = $row['fecha'];
        $hora = $row['hora'];
        $notas = $row['nota'];
    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $medicamento = $_POST['medicamento'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $notas = $_POST['nota'];

    $query = "UPDATE recordatoriomedicamentos set medicamento = '$medicamento', fecha = '$fecha', hora = '$hora', nota = '$notas' WHERE id_medicamento=$id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed.");
    }
    ;
    $_SESSION['mensaje3.1'] = 'Medicamento actualizado exitosamente';
    $_SESSION['message_type3.1'] = 'warning';
    header('Location: medicamentos.php');
}
include("includes/footer.php");
?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body">
          <h2>Modifica tu recordatorio de medicamentos</h2>
      <form action="editMed.php?id=<?php echo $_GET['id']; ?>" method="POST">

        <div class="form-group">
            <label for="reminder-title">Medicamento:</label>
            <input name="medicamento" type="text" class="form-control" value="<?php echo $medicamento; ?>" placeholder="Actualizar nombre del medicamento">
        </div>

        <div class="form-group">
          <label for="reminder-date">fecha:</label>  
          <input name="fecha" type="date" class="form-control" value="<?php echo $fecha; ?>" placeholder="Fecha">
        </div>

        <div class="form-group">
            <label for="reminder-time">Hora:</label>
            <input name="hora" type="time" class="form-control" value="<?php echo $hora; ?>" placeholder="Hora">
        </div>
        <div class="form-group">
            <label for="reminder-notes">Notas:</label>
            <textarea name="nota" class="form-control"><?php echo $notas; ?></textarea>
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