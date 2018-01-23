<?php
  $bodyID = "register";
  $title = "Register";
  include "includes/header.php";
  session_start();

  if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (usernameExists($username)) {
      echo "användarnamnet finns redan";
    }
    else {

          $username = mysqli_real_escape_string($connection, $username);
          $password = mysqli_real_escape_string($connection, $password);

          $hashFormat = "$2y$10$";
          $password = crypt($password, $hashAndSalt);


          $query = "INSERT INTO users(username, password) ";
          $query .= "VALUES ('$username', '$password')";

          $result = mysqli_query($connection, $query);


            header("Location: login.php");
      }
    }
 ?>


    <form class="login animated bounceInDown" action="register.php" method="post">
      <h2> Register </h2>
        <input type="text" name="username" placeholder="Username" required autofocus>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" name="register" value="Register">
    </form>

  </body>
</html>
