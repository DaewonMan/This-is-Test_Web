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
          $id = "";

          if(!empty($_GET['event']) && $_GET['event'] == "overlap") // id 중복시 중복하다는 메세지 출력
          {
            //echo '<script type="text/javascript">alert("overlap")</script>';
            echo "<script>alert('Overlap!!!')</script>";
          }
          else if(!empty($_GET['event']) && $_GET['event'] == "unique") // id가 유일할 때 유일하다는 메세지 출력
          {
            echo "<script>alert('Unique!!!')</script>";
          }
          else if(!empty($_GET['event']) && $_GET['event'] == "lack") // 기입사항을 하나라도 입력 안 했을 시
          {
            echo "<script>alert('Please fill in all things.')</script>";
          }
          else if(!empty($_GET['event']) && $_GET['event'] == "checkoverlap") // 아이디 중복 검사를 안했을 시
          {
            echo "<script>alert('Please check overlap of id.')</script>";
          }

          if(!empty($_GET['id'])) // id가 중복확인이 되었다면
            $id = $_GET['id'];

        ?>
        <form class="" action="id_check.php" method="post">
          <p>
            <label for="id">[ID] :</label>
            <?php echo '<input id="id" type="text" name="id" value="'.$id.'">'; ?>
            <input type="submit" name="confirm" value="confirm">
            <?php //<button type="button" onclick="">confirm</button> ?>
            <?php //<input type="button" value="confirm repetition"> ?>
          </p>
        </form>
        <?php
          echo '<form class="" action="indoor.php?id='.$id.'" method="post">';
        ?>
          <p>
            <label for="password">[PASSWORD] :</label>
            <input id="password" type="password" name="password">
          </p>
          <p>
            <label for="name">[NAME] :</label>
            <input id="name" type="text" name="name">
            <label for="age">[AGE] :</label>
            <input id="age" type="number" name="age">
          </p>
          <p>
            <label for="intro">[Self-Introduction]</label>
            <textarea id="intro" name="intro" rows="8" cols="80"></textarea>
          </p>
          <p>
            <input type="submit" value="Sign up">
          </p>
        </form>
      </article>
    </div>
  </body>
</html>
