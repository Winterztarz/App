<?php
  $currentTaskName = $_GET['taskName'];
  $taskID = $_GET['taskID'];
  $title = "Ändra " . $currentTaskName . "?";
  $bodyID = "delete";
  include 'includes/header.php';
  if (isset($_POST['editTask'])) {
    $newTaskName = $_POST['taskName'];
    $taskID = $_POST['taskID'];
    $query = "UPDATE tasks SET title='$newTaskName' WHERE id = '$taskID'";
    $editTaskQuery = mysqli_query($connection, $query);
    header("location: index.php");
  }
 ?>

 <form action="edit.php" method="post">
   <input type="hidden" name="taskID" value="<?php echo $taskID; ?>">
   <input type="text" name="taskName" value="<?php echo $currentTaskName; ?>">
   <input type="submit" name="editTask" value="Ändra">
   <a href="index.php">Nvm</a>
 </form>
 </body>
 </html>
