<?php
/*필요없는 파일
log_check.php에서 event를 signIn.php에 보내줘서 로그인 실패시 메세지창 출력
그러므로 이 소스코드는 불필요
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <h1><a href="main.php">This is test_web</a></h1>
    </header>
    <nav>
      <?php
        echo 'First item';
      ?>
    </nav>
    <div>
      <butt>
        <a href="signIn.php">Sign In</a>
        <a href="join.php">Join</a>
      </butt>
      <article>
        <?php
          echo '<h1>We can not find your information!!!</h1>';
        ?>
      </article>
    </div>
  </body>
</html>
