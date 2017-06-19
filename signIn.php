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
        <form class="" action="indoor.php" method="post"> <?php //사용자가 입력한 정보를 서버쪽으로 전송할 때 쓰는 입력양식 ?>
          <p>
            <label for="id">[ID] :</label>
            <input id="id" type="text" name="id">
          </p>
          <p>
            <label for="password">[PASSWORD] :</label>
            <input id="password" type="text" name="password">
          </p>
          <p>
            <input type="submit" value="Login">
          </p>
        </form>
      </article>
    </div>
  </body>
</html>
