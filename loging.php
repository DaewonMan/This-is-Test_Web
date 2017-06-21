<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <?php
        $conn = mysqli_connect('localhost', 'root', '1187614g', 'indoor', '3307'); //db 접속
        $id = mysqli_real_escape_string($conn, $_GET['id']); //외부로부터 들어오는 정보를 보안적으로 세탁하여 검색
        $sql = "SELECT name FROM `topic` WHERE `id` = '{$id}'"; //유저의 이름을 알아내는 sql문
        $result = mysqli_query($conn, $sql); //sql의 결과를 할당
        $row = mysqli_fetch_assoc($result); //sql의 결과를 배열의 형태로 변환 후 할당
        echo '<h1><a href="loging.php?id='.$_GET['id'].'">The World of '.$row['name'].'</a></h1>';
      ?>
    </header>
    <nav>
      <?php
        echo 'First item';
      ?>
    </nav>
    <div>
      <butt>
        <a href="main.php">Sign Out</a>
      </butt>
      <article>

      </article>
    </div>
  </body>
</html>
