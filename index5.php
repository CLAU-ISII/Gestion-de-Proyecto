        
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
                    <form action="save_task5.php" method="POST">
                        <div class="form-group">
                            <textarea name="usuario" rows="2" class="form-control" placeholder="Ingrese Usuario"></textarea>
                        </div>

                        <div class="form-group">
                            <textarea name="password" rows="2" class="form-control" placeholder="Ingrese Password"></textarea>
                        </div>

                        <div class="form-group">
                            <textarea name="nombre" rows="2" class="form-control" placeholder="Ingrese  nombre"></textarea>
                        </div>

                        <div class="form-group">
                            <textarea name="tipo_usuario" rows="2" class="form-control" placeholder="Ingrese Usuario Tipo"></textarea>
                        </div>





                        <input type="submit" name="save_task5" class="btn btn-success btn-block" value="Guardar">
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>usuario</th>
                            <th>password</th>
                            <th>nombre</th>
                            <th>tipo_usuario</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $query5 = "SELECT * FROM task5";
                        $result_tasks5 = mysqli_query($conn, $query5);    

                        while($row = mysqli_fetch_assoc($result_tasks5)) { ?>
                            <tr>
                                <td><?php echo $row['id5']; ?></td>
                                <td><?php echo $row['usuario']; ?></td>
                                <td><?php echo $row['password']; ?></td>
                                <td><?php echo $row['nombre']; ?></td>
                                <td><?php echo $row['tipo_usuario']; ?></td>
                                <td>
                                    <a href="edit5.php?id5=<?php echo $row['id5']?>" class="btn btn-secondary">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a href="delete_task5.php?id5=<?php echo $row['id5']?>" class="btn btn-danger">
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

   