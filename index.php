<?php include("db.php") ?>

<?php include("includes/header.php") ?>

    <!-- =============== Navigation ================ -->
    <?php include("includes/navigation.php") ?>

        <!-- ========================= Main ==================== -->
        <?php include("includes/mainTopBar.php")?>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="my-card" onclick="redireccionar('crearRemCitas.php')">
                    <div>
                        <div class="recordatorio">Citas</div>
                        <div class="cardName">Crear Recordatorio</div>
                    </div>

                    <div class="iconBx">
                        <i class="bi bi-plus"></i>
                    </div>
                </div>
                <div class="my-card" onclick="redireccionar('crearRemMeds.php')">
                    <div>
                        <div class="recordatorio">Medicamentos</div>
                        <div class="cardName">Crear Recordatorio </div>
                    </div>

                    <div class="iconBx">
                        <i class="bi bi-plus"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include("includes/footer.php") ?>