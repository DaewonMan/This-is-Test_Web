<?php
  require_once('dbconn.php'); //db 접속

  if(empty($_GET['id'])) //아이디 중복 검사를 안했을 때
  {
    header("Location: join.php?event=checkoverlap");
  }
  else if(empty($_POST['password'])||empty($_POST['name'])||empty($_POST['age'])||empty($_POST['intro'])) //기입사항 중 하나라도 입력을 안 했을 시
  {
    header("Location: join.php?event=lack");
  }
  else
  {
    $id = mysqli_real_escape_string($conn, $_GET['id']); //사용자로부터 입력받은 id값을 서버로 부터 받아서 db에 존재여부 검색
    $sql = "INSERT INTO user(num, id) VALUES(NULL, '{$id}')"; //id가 없다면 추가한다
    mysqli_query($conn, $sql); //user 테이블에 추가하도록 동작하는 함수

    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $intro = mysqli_real_escape_string($conn, $_POST['intro']);

    $sql = "INSERT INTO `topic`(`num`, `id`, `password`, `name`, `age`, `intro`)
     VALUES (NULL, '{$id}', '{$password}', '{$name}', '{$age}', '{$intro}')";
    mysqli_query($conn, $sql); //topic 테이블에 추가하도록 하는 함수

    header("Location: main.php?event=Welcome!!!");
  }
?>
