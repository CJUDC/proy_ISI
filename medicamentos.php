<?php include("db.php"); ?>

<?php include("includes/header.php") ?>

<?php include("includes/navigation.php")?>
<?php include("includes/mainTopBar.php")?>


<main>


    <div class="container p-4 row justify-content-center align-items-center mt-2">
        
        <div class="col-md-10"> 

            <h2>Medicamentos</h2>

            <?php if (isset($_SESSION['mensaje2.1'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type2.1']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['mensaje2.1']?>
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php session_unset(); } ?>

            <?php if (isset($_SESSION['mensaje3.1'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type3.1']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['mensaje3.1']?>
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php session_unset(); } ?>

            <table class="table table-gray table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Medicamento</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>notas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $query = "SELECT * FROM recordatoriomedicamentos";
                    $result_tasks = mysqli_query($conn, $query);    

                    while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                        <tr>
                            <td><?php echo $row['medicamento']; ?></td>
                            <td><?php echo $row['fecha']; ?></td>
                            <td><?php echo $row['hora']; ?></td>
                            <td><?php echo $row['nota']; ?></td>
                            <td class="d-flex gap-1 justify-content-center">
                                <a href="editMed.php?id=<?php echo $row['id_medicamento']?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>                              
                                </a>
                                <a href="deleteMed.php?id=<?php echo $row['id_medicamento']?>" class="btn btn-danger">
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