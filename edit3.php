<?php
include("db.php");
$title3 = '';
$description3= '';

if  (isset($_GET['id3'])) {
  $id3 = $_GET['id3'];
  $query3 = "SELECT * FROM task3 WHERE id3=$id3";
  $result3 = mysqli_query($conn, $query3);
  if (mysqli_num_rows($result3) == 1) {
    $row = mysqli_fetch_array($result3);
    $title3 = $row['title3'];
    $description3 = $row['description3'];
  }
}

if (isset($_POST['update'])) {
  $id3 = $_GET['id3'];
  $title3= $_POST['title3'];
  $description3 = $_POST['description3'];

  $query3 = "UPDATE task3 set title3 = '$title3', description3 = '$description3' WHERE id3=$id3";
  mysqli_query($conn, $query3);
  $_SESSION['message'] = 'Task3 Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index3.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit3.php?id3=<?php echo $_GET['id3']; ?>" method="POST">
        <div class="form-group">
          <input name="title3" type="text" class="form-control" value="<?php echo $title3; ?>" placeholder="Update Title3">
        </div>
        <div class="form-group">
        <textarea name="description3" class="form-control" cols="30" rows="10"><?php echo $description3;?></textarea>
        </div>
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
