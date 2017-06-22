<?php
  $conn = mysqli_connect('localhost', 'root', '1187614g', 'indoor', '3307'); //db 접속
  $id = $_GET['id'];
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $date = mysqli_real_escape_string($conn, $_POST['date']);
  $story = mysqli_real_escape_string($conn, $_POST['story']);

  $sql = "INSERT INTO `diary`(`id`, `date`, `title`, `story`) VALUES('{$id}', '{$date}', '{$title}', '{$story}')";
  mysqli_query($conn, $sql);

  header("Location: loging.php?id=".$id);
?>
