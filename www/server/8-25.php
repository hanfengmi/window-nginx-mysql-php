<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>php+mysql</title>
  </head>
  <body>
    <?php
    // phpinfo();exit();
    $servername = "localhost";
    $username = "root";
    $password = "1";

    $conn = mysqli_connect($servername, $username, $password);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    echo "连接成功";
    ?>
  </body>
</html>
