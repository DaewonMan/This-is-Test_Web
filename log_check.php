<?php
  $conn = mysqli_connect('localhost', 'root', '1187614g', 'indoor', '3307'); //db 접속
  $id = mysqli_real_escape_string($conn, $_POST['id']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $sql = "SELECT * FROM topic WHERE id = '{$id}' AND password = '{$password}'"; //id와 password가 일치하는지 알아내는 sql
  $result = mysqli_query($conn, $sql); //sql를 실행 후 결과 반환

  if($result->num_rows > 0) //일치하는 회원이 있다면
  {
    header("Location: loging.php?id=$id"); //log in 한다
  }
  else
  {
    header("Location: logfailing.php"); //log in 실패
  }
?>
