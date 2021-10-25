        
<?php include("db.php"); ?>

<?php include('header.php'); ?>

<main class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <!-- MESSAGES -->

            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php session_unset(); } ?>

                <!-- ADD TASK FORM -->
                <div class="card card-body">
                    <form action="save_task4.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="title4" class="form-control" placeholder="Ingrese Tema" autofocus>
                        </div>
                        <div class="form-group">
                            <textarea name="description4" rows="2" class="form-control" placeholder="Describa Tema"></textarea>
                        </div>
                        <input type="submit" name="save_task4" class="btn btn-success btn-block" value="Guardar">
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tema</th>
                            <th>Descripcion</th>
                            <th>Fecha de Creacion</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $query4 = "SELECT * FROM task4";
                        $result_tasks4 = mysqli_query($conn, $query4);    

                        while($row = mysqli_fetch_assoc($result_tasks4)) { ?>
                            <tr>
                                <td><?php echo $row['title4']; ?></td>
                                <td><?php echo $row['description4']; ?></td>
                                <td><?php echo $row['created_at4']; ?></td>
                                <td>
                                    <a href="edit4.php?id4=<?php echo $row['id4']?>" class="btn btn-secondary">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a href="delete_task4.php?id4=<?php echo $row['id4']?>" class="btn btn-danger">
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

    <?php include('footer.php'); ?>

   