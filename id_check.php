<?php
  require_once('dbconn.php'); //db 접속
  $id = mysqli_real_escape_string($conn, $_POST['id']); //사용자로부터 입력받은 id값을 서버로 부터 받아서 db에 존재여부 검색
  $sql = "SELECT * FROM `user` WHERE `id` = '{$id}'";
  $result = mysqli_query($conn, $sql); //sql문의 결과를 반환

  if($result->num_rows > 0) //중복된 아이디 값이 있을 경우
  {
    header("Location: join.php?event=overlap");
  }
  else
  {
    header("Location: join.php?event=unique&id=".$id);
  }
?>
