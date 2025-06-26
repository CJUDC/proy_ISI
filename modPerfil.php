<?php include("includes/header.php") ?>

<?php include("includes/navigation.php")?>
<?php include("includes/mainTopBar.php")?>


<main class="container mb-4 MainCitas">
    <div class="formCitas">


            <form action="modPerfil.php" method="POST">
                <h2>Modifica tu perfil</h2>
                <label for="user-nombre">Nombre:</label>
                <input type="text" name="user.nombre" required />

                <label for="user-codp">CodPaciente:</label>
                <input type="text" name="user-codp" required />

                <label for="user-correo">correo:</label>
                <input type="text" name="user-correo" required />

                <label for="user-password">Contraseña:</label>
                <input type="password" name="user-password" required />

                <label for="user-newPassword">Nueva contraseña:</label>
                <input type="text" name="user-newPassword" required />

                <button id="btncita" name="saveModPerfil" type="submit">Actualizar</button>
            </form>

            <ul id="appointments-list"></ul>
        </div>

    </main>
<?php include("includes/footer.php") ?>