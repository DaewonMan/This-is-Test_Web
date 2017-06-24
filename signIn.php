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
        if(!empty($_GET['event']) && $_GET['event'] == "logfail") // 로그인 실패시 실패 메세지 출력
        {
          echo "<script>alert('Login Failure!!!')</script>";
        }
        ?>
        <form class="" action="log_check.php" method="post"> <?php //사용자가 입력한 정보를 서버쪽으로 전송할 때 쓰는 입력양식 ?>
          <p>
            <label for="id">[ID] :</label>
            <input id="id" type="text" name="id">
            <label for="password">[PASSWORD] :</label>
            <input id="password" type="password" name="password">
          </p>
          <p>
            <input type="submit" value="Login">
          </p>
        </form>
      </article>
    </div>
  </body>
</html>
