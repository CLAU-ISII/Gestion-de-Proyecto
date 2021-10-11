<?php
include("db.php");
$title2 = '';
$description2= '';

if  (isset($_GET['id2'])) {
  $id2 = $_GET['id2'];
  $query2 = "SELECT * FROM task2 WHERE id2=$id2";
  $result2 = mysqli_query($conn, $query2);
  if (mysqli_num_rows($result2) == 1) {
    $row = mysqli_fetch_array($result2);
    $title2 = $row['title2'];
    $description2 = $row['description2'];
  }
}

if (isset($_POST['update'])) {
  $id2 = $_GET['id2'];
  $title2= $_POST['title2'];
  $description2 = $_POST['description2'];

  $query2 = "UPDATE task2 set title2 = '$title2', description2 = '$description2' WHERE id2=$id2";
  mysqli_query($conn, $query2);
  $_SESSION['message'] = 'Task2 Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index2.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit2.php?id2=<?php echo $_GET['id2']; ?>" method="POST">
        <div class="form-group">
          <input name="title2" type="text" class="form-control" value="<?php echo $title2; ?>" placeholder="Update Title2">
        </div>
        <div class="form-group">
        <textarea name="description2" class="form-control" cols="30" rows="10"><?php echo $description2;?></textarea>
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
