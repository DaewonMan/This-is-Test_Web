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
          echo 'We can not find your information!!!';
        ?>
      </article>
    </div>
  </body>
</html>
