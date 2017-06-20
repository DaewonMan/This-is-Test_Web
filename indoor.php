<?php
//print_r($_POST);
//1.데이터베이스 접속 require_once('conn.php');
$conn = mysqli_connect('localhost', 'root', '1187614g', 'indoor', '3307');
//2.저자가 user테이블에 존재하는지 여부를 체크
$id = mysqli_real_escape_string($conn, $_POST['id']);
//$sql = "SELECT * FROM `user` WHERE `name` = '".$author."'";
$sql = "SELECT * FROM `user` WHERE `name` = '{$id}'";
$result = mysqli_query($conn, $sql);
//var_dump($result->num_rows);
if($result->num_rows > 0){
  //3.존재한다면 user의 id값을 알아낸다
  //$row = mysqli_fetch_assoc($result);
  //$user_num = $row['num'];

}
else{
  //4.존재하지 않다면 저자를 user 추가 후 id을 알아낸다.
  $sql = "INSERT INTO user(num, id) VALUES(NULL, '{$id}')";
  $result = mysqli_query($conn, $sql);
  //$user_num = mysqli_insert_id($conn);
  //5.제목, 저자, 본문 들을 topic 테이블에 추카
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $age = mysqli_real_escape_string($conn, $_POST['age']);
  $intro = mysqli_real_escape_string($conn, $_POST['intro']);
  $sql = "INSERT INTO `topic`(`num`, `id`, `password`, `name`, `age`, `intro`)
   VALUES (NULL, '{$id}', '{$password}', '{$name}', '{$age}', '{$intro}')";
  mysqli_query($conn, $sql);
  //6. 사용자를 index.php로 이동
}

header("Location: main.php");
?>
