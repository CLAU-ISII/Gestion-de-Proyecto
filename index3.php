<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

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
        <form action="save_task3.php" method="POST">
          <div class="form-group">
            <input type="text" name="title3" class="form-control" placeholder="Task3 Title3" autofocus>
          </div>
          <div class="form-group">
            <textarea name="description3" rows="2" class="form-control" placeholder="Task3 Description3"></textarea>
          </div>
          <input type="submit" name="save_task3" class="btn btn-success btn-block" value="Save3 Task3">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Title3</th>
            <th>Description3</th>
            <th>Created At3</th>
            <th>Action3</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query3 = "SELECT * FROM task3";
          $result_tasks3 = mysqli_query($conn, $query3);    

          while($row = mysqli_fetch_assoc($result_tasks3)) { ?>
          <tr>
            <td><?php echo $row['title3']; ?></td>
            <td><?php echo $row['description3']; ?></td>
            <td><?php echo $row['created_at3']; ?></td>
            <td>
              <a href="edit3.php?id3=<?php echo $row['id3']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task3.php?id3=<?php echo $row['id3']?>" class="btn btn-danger">
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

<?php include('includes/footer.php'); ?>

