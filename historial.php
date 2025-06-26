

<?php include("db.php"); ?>

<?php include("includes/header.php") ?>

<?php include("includes/navigation.php")?>
<?php include("includes/mainTopBar.php")?>

<main>

    <div class="container p-4 row justify-content-center align-items-center mt-2">
        
        <div class="col-md-10"> 

            <h2>Citas</h2>
            <?php if (isset($_SESSION['mensaje2.2'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type2.2']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['mensaje2.2']?>
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php session_unset(); } ?>

            

            <table class="table table-gray table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Asunto</th>
                        <th>Doctor</th>
                        <th>Lugar</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Estado</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $query = "SELECT * FROM historial_citas";
                    $result_tasks = mysqli_query($conn, $query);    

                    while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                        <tr>
                            <td><?php echo $row['asuntos']; ?></td>
                            <td><?php echo $row['doctors']; ?></td>
                            <td><?php echo $row['lugars']; ?></td>
                            <td><?php echo $row['fechas']; ?></td>
                            <td><?php echo $row['horas']; ?></td>
                            <td><?php echo $row['estado']; ?></td>
                            <td class="d-flex gap-1 justify-content-center">
                                
                                <a href="deleteCita.php?idh=<?php echo $row['id_Hcita']?>" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>


        <div class="col-md-10"> 

            <h2>Medicamentos</h2>

            <?php if (isset($_SESSION['mensaje2.3'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type2.3']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['mensaje2.3']?>
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php session_unset(); } ?>

            <table class="table table-gray table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Medicamento</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Notas</th>
                        <th>Estado</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $query = "SELECT * FROM historial_medicamentos";
                    $result_tasks = mysqli_query($conn, $query);    

                    while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                        <tr>
                            <td><?php echo $row['medicamentos']; ?></td>
                            <td><?php echo $row['fechas']; ?></td>
                            <td><?php echo $row['horas']; ?></td>
                            <td><?php echo $row['notas']; ?></td>
                            <td><?php echo $row['estados']; ?></td>
                            <td class="d-flex gap-1 justify-content-center">
                                
                                <a href="deleteMed.php?idh=<?php echo $row['id_Hmed']?>" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
        
    </div>

</main>



<?php include("includes/footer.php") ?>