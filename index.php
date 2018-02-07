<?php
$title = "List App";
$bodyClass = "d-flex justify-content-center align-items-center";
include 'includes/header.php';

$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);
$num_rows = mysqli_num_rows($result);
 ?>


    <video loop muted autoplay>
      <source src="vid/vidvidvid.mp4" type="video/mp4">
    Your browser does not support the video tag.
    </video>


<main class="col-12 col-sm-8 col-lg-4 animated fadeInDown text-center">
  <h1>List</h1>
  <img src="img/listLogo.svg" class="img-fluid" alt="List">
  <p> An online to-do list with <span><?php echo $num_rows;  ?></span> members! </p>
  <a class="button" href="login.php">Log in</a>
  <a class="button" href="register.php">Register</a>
</main>


<?php include 'includes/footer.php' ?>
