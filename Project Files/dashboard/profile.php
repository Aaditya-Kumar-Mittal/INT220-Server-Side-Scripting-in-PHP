<?php include "header.php";
if ($role != 0) {
  header("location:../404.php");
}

//Get the users  according to their ids
$id = $_GET['id'];

//Select  users with the id from user lists
$sql = "SELECT * FROM user_tbl WHERE id='$id'";

//Run the queryy and the result is stored
$query = mysqli_query($con, $sql);
$result = mysqli_fetch_assoc($query);

?>

<div class="container mt-5 mb-2">
  <div class="row">
    <div class="col-md-6 m-auto emp_profile p-4 border border-secondary">
      <p class="text-center bg-white p-3"> <span class="emp_name"><?= ucwords($result['fullname']) ?></span>
        <br> <span>(<?= ucwords($result['user_des']) ?></span> <span>Scale <?= ucwords($result['user_scale']) ?>)</span>
      </p>
      <div class="bg-white p-3"> <strong>Job Responsibilities</strong>
        <ul>
          <li><?= ucwords($result['user_res']) ?></li>
        </ul>
      </div>
      <div class="mt-2"> <a href="users_list.php" class="btn btn-secondary">Back</a> </div>
    </div>
  </div>
</div>
<?php include "footer.php" ?>