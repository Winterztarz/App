<?php
  $bodyID = "delete";
  $title = "You sure?";
  include 'includes/header.php';
  if (!empty($_GET['taskID'])) {
    $taskID = $_REQUEST['taskID'];
  }
  if (!empty($_POST)) {
      $taskID = $_POST['taskID'];
      $query = "DELETE FROM tasks WHERE id = $taskID";
      $deleteTaskQuery = mysqli_query($connection, $query);
      header("Location: index.php");
  }
?>

<section>
  <form action="delete.php" method="post">
    <input type="hidden" name="taskID" value="<?php echo $taskID; ?>">
    <h2>Är du säker på att du vill radera detta inlägg?</h2>
    <input type="submit" name="deleteTask" value="Ja">
    <a href="index.php">Nej</a>
  </form>
</section>
</body>
</html>
