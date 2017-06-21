<?php
//print_r($_POST);
//1.데이터베이스 접속 require_once('conn.php');
$conn = mysqli_connect('localhost', 'root', '1187614g', 'indoor', '3307');
//2.저자가 user테이블에 존재하는지 여부를 체크
$id = mysqli_real_escape_string($conn, $_POST['id']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
// id와 password가 일치하는 행이 있는지 검색
$sql = "SELECT * FROM topic WHERE id = '{$id}' AND password = '{$password}'";
$result = mysqli_query($conn, $sql);

if($result->num_rows > 0){
  header("Location: loging.php");
}
else
{
  header("Location: logfailing.php");
}
?>
