<?php
session_start();
 $title = "Välkommen";
 include "includes/header.php";

 if (isset($_POST['addTask'])) {
   addTask();
 }
 ?>

<?php if ($_SESSION['username']) : ?>

  <nav>
      <a href="logout.php" class="link">Log out <?php echo $_SESSION['username']; ?> </a>
      <h1> App </h1>
  </nav>

<section>
  <h1>To do list</h1>
  <ul>
    <?php
      $id = $_SESSION['id'];
      $query = "SELECT * FROM tasks WHERE user_id = '$id' " ;
      $result = mysqli_query($connection, $query);

      while ($row = mysqli_fetch_array($result)) {
        echo "<li>" . $row['title'] . "</li>";
      }
    ?>
  </ul>
  <form action="index.php" method="post">
    <input type="text" name="taskName">
    <input type="submit" name="addTask" value="Add task">
  </form>
</section>

<?php else : ?>
      <h1>Login required to show this page</h1>
<?php endif; ?>

  </body>
</html>
