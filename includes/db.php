<?php
  $connection = mysqli_connect('localhost', 'root', 'root', 'appdb');

  if (!$connection) {
    die('failed to connect to datebase.' . mysqli_error($connection));
  }
 ?>
