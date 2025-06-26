<?php include("includes/header.php")?>

<?php  

include("db.php");


?>



<div class="container container-auth mt-5 d-flex justify-content-center">
  <div class="form-page">
    <h2>Register</h2>

    <?php if (isset($_SESSION['mensaje4'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type4']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['mensaje4']?>
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php session_unset(); } ?>

    <form action="saveRegister.php" method="POST" id="register-form">
      <div class="form-group">
        <input name="register-name" type="text" class="form-control" id="register-name" placeholder="Nombre" required>
      </div>
      <div class="form-group">
        <input name="register-lastname" type="text" class="form-control" id="register-lastname" placeholder="apellido" required>
      </div>
      <div class="form-group">
        <input name="register-id" type="text" class="form-control" id="register-id" placeholder="Cédula" required>
      </div>
      <div class="form-group">
        <input name="register-email" type="email" class="form-control" id="register-email" placeholder="Correo" required>
      </div>
      <div class="form-group">
        <input name="register-password" type="password" class="form-control" id="register-password" placeholder="Contraseña" required>
      </div>
      <div class="form-group">
        <input name="register-repassword" type="password" class="form-control" id="register-password" placeholder="Confirmar contraseña" required>
      </div>
      <button type="submit" name="saveRegister" class="btn btn-dark">Register</button>
    </form>
    <p>Already have an account? <a id="clickHere" href="login.php">Login</a></p>
  </div>

</div>



<?php include("includes/footer.php") ?>