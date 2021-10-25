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
        <form action="save_task2.php" method="POST">
          <div class="form-group">
            <input type="text" name="title2" class="form-control" placeholder="Ingrese Tema" autofocus>
          </div>
          <div class="form-group">
            <textarea name="description2" rows="2" class="form-control" placeholder="Describa Tema"></textarea>
          </div>
          <input type="submit" name="save_task2" class="btn btn-success btn-block" value="Guardar">
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
          $query2 = "SELECT * FROM task2";
          $result_tasks2 = mysqli_query($conn, $query2);    

          while($row = mysqli_fetch_assoc($result_tasks2)) { ?>
          <tr>
            <td><?php echo $row['title2']; ?></td>
            <td><?php echo $row['description2']; ?></td>
            <td><?php echo $row['created_at2']; ?></td>
            <td>
              <a href="edit2.php?id2=<?php echo $row['id2']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task2.php?id2=<?php echo $row['id2']?>" class="btn btn-danger">
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