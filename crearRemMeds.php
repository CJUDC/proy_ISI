<?php include("db.php")?>
<?php include("includes/header.php") ?>

<?php include("includes/navigation.php")?>
<?php include("includes/mainTopBar.php")?>

<main class="container mb-4 MainMeds">
        <div class="formMeds">

            <?php if (isset($_SESSION['mensaje1.1'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type1.1']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['mensaje1.1']?>
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php session_unset(); } ?>


            <form action="saveRemMeds.php" method="POST" id="reminders-form">
                <h2>Medical Reminders</h2>
                <label for="reminder-med">Medicamento:</label>
                <input type="text" id="reminder-title" name="reminder-med" required />

                <label for="reminder-codp">CodPaciente:</label>
                <input type="text" name="reminder-codp" required />

                <label for="reminder-fecha">Date:</label>
                <input type="date" id="reminder-date" name="reminder-fecha" required />

                <label for="reminder-hora">Time:</label>
                <input type="time" id="reminder-time" name="reminder-hora" required />

                <label for="reminder-notas">Notes:</label>
                <textarea id="reminder-notes" name="reminder-notas" required ></textarea>

                <button  id="btnmed" name="saveRemMed" type="submit">Create Reminder</button>
            </form>

            <ul id="reminders-list"></ul>
        </div>

    </main>

<?php include("includes/footer.php") ?>