<?php
  $conn = mysqli_connect('localhost', 'root', '1187614g', 'indoor', '3307'); //db접속
  $id = mysqli_real_escape_string($conn, $_POST['id']); //사용자로부터 입력받은 id값을 서버로 부터 받아서 db에 존재여부 검색
  $sql = "SELECT * FROM `user` WHERE `name` = '{$id}'";
  $result = mysqli_query($conn, $sql); //sql문의 결과를 반환

  if($result->num_rows > 0){
    //중복된 아이디 값이 있을 경우

  }
else{
  $sql = "INSERT INTO user(num, id) VALUES(NULL, '{$id}')"; //id가 없다면 추가한다
  mysqli_query($conn, $sql); //user 테이블에 추가하도록 동작하는 함수

  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $age = mysqli_real_escape_string($conn, $_POST['age']);
  $intro = mysqli_real_escape_string($conn, $_POST['intro']);
  $sql = "INSERT INTO `topic`(`num`, `id`, `password`, `name`, `age`, `intro`)
   VALUES (NULL, '{$id}', '{$password}', '{$name}', '{$age}', '{$intro}')";
  mysqli_query($conn, $sql); //topic 테이블에 추가하도록 하는 함수

}

header("Location: main.php");
?>
