<?php include("db.php") ?>

<?php include("includes/header.php") ?>

<?php include("includes/navigation.php")?>
<?php include("includes/mainTopBar.php")?>

 <main class="container mb-4 MainCitas">
        <div class="formCitas">
            
            <?php if (isset($_SESSION['mensaje1'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type1']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['mensaje1']?>
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php session_unset(); } ?>

            <form action="saveRemCitas.php" method="POST">
                <h2>Crea tu recordatorio</h2>
                <label for="appointment-title">Asunto:</label>
                <input type="text" name="appointment-asunto" required />

                <label for="appointment-codp">CodPaciente:</label>
                <input type="text" name="appointment-codp" required />

                <label for="appointment-date">Fecha:</label>
                <input type="date" name="appointment-date" required />

                <label for="appointment-time">Hora:</label>
                <input type="time" name="appointment-time" required />

                <label for="appointment-doctor">Doctor:</label>
                <input type="text" name="appointment-doctor" required />

                <label for="appointment-location">lugar:</label>
                <input type="text" name="appointment-location"  />

                <label for="appointment-notes">Notas:</label>
                <textarea name="appointment-notes"></textarea>

                <button id="btncita" name="saveRemCita" type="submit">Create Recordatorio</button>
            </form>

            <ul id="appointments-list"></ul>
        </div>

    </main>

<?php include("includes/footer.php") ?>