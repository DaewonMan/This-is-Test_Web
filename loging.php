<?php
  require_once('dbconn.php'); //db 접속
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <?php
        $id = mysqli_real_escape_string($conn, $_GET['id']); //외부로부터 들어오는 정보를 보안적으로 세탁하여 검색
        $sql = "SELECT name FROM `topic` WHERE `id` = '{$id}'"; //유저의 이름을 알아내는 sql문
        $result = mysqli_query($conn, $sql); //sql의 결과를 할당

        $row = mysqli_fetch_assoc($result); //sql의 결과를 배열의 형태로 변환 후 할당
        echo '<h1><a href="loging.php?id='.$_GET['id'].'">The World of '.$row['name'].'</a></h1>';
      ?>
    </header>
    <nav>
      <ol>
        <?php
          $id = mysqli_real_escape_string($conn, $_GET['id']);
          $sql = "SELECT * FROM `diary` WHERE `id` = '{$id}'";
          $result = mysqli_query($conn, $sql); //topic 테이블에 모든 쿼리를 가져온다

          while($row = mysqli_fetch_assoc($result)) //sql문의 결과를 배열의 형태로 가져와서 한 행을 row에 담는다
          {
            echo '<li><a href="loging.php?id='.$row['id'].'&list='.$row['list'].'">'.htmlspecialchars($row['title']).'</a></li>';
          }
        ?>
      </ol>
    </nav>
    <div>
      <butt>
        <a href="main.php">Sign Out</a>
      </butt>
      <article>
        <?php
          $id = mysqli_real_escape_string($conn, $_GET['id']);

          if(empty($_GET['list']))
          {
            echo '<form class="" action="posting.php?id='.$id.'" method="post">
              <p>
                <label for="date">[Date] :</label>
                <input id="date" type="date" name="date">
              </p>
              <p>
                <label for="title">[Title] :</label>
                <input id="title" type="text" name="title">
              </p>
              <p>
                <label for="story">[Story]</label>
                <textarea id="story" name="story" rows="8" cols="80"></textarea>
              </p>
              <p>
                <input type="submit" value="Post up">
              </p>
            </form>';
          }
          else
          {
            $list = mysqli_real_escape_string($conn, $_GET['list']);
            $sql = "SELECT * FROM `diary` WHERE `id` = '{$id}' AND `list` = '{$list}'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
            echo '<div>'.htmlspecialchars($row['date']).'</div>';
            echo "<div>".htmlspecialchars($row['story'])."</div>";

            echo '<form action="posting.php?id='.$id.'&list='.$list.'&event=del" method="post"> //delete 버튼을 누르면 db에 저장된 posting 내용을 삭제한다.
                  <p></p>
                  <input type="submit" value="Delete">
                  </form>';
          }
          ?>

      </article>
    </div>
  </body>
</html>
