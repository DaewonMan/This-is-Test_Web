<?php
  require_once('dbconn.php'); //db 접속
  $id = $_GET['id'];
  if(empty($_GET['event'])) // posting 일 때
  {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $story = mysqli_real_escape_string($conn, $_POST['story']);

    $sql = "INSERT INTO `diary`(`id`, `date`, `title`, `story`) VALUES('{$id}', '{$date}', '{$title}', '{$story}')";
    mysqli_query($conn, $sql);
  }
  else // delete일 때
  {
    $list = $_GET['list'];
    $sql = "DELETE FROM `diary` WHERE `list` = '{$list}'"; // 해당 리스트의 열을 삭제한다.
    mysqli_query($conn, $sql);
  }
  header("Location: loging.php?id=".$id);
?>
