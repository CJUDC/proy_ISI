<?php

include("includes/header.php");
session_start();
?>

<div class="container container-auth mt-5 d-flex justify-content-center">
    <div class="form-page m-4">
        <h2>Login</h2>

        <form id="login-form">
            <div class="form-group">
                <label for="login-email">Correo</label>
                <input type="email" class="form-control" id="login-email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="login-password">Contraseña</label>
                <input type="password" class="form-control" id="login-password" placeholder="Password" required>
            </div>
            <button id="log" type="button"  name="btnIngresar" class="btn btn-dark"  onclick="redireccionar('index.php')">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register</a></p>
    </div>
</div>


<?php include("includes/footer.php") ?>