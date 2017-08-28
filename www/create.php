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
    //创建数据库
    $sql = "CREATE DATABASE myDB2";
    if(mysqli_query($conn,$sql)){
      echo "数据库创建成功";
    }else{
      echo "Error creating database: " . mysqli_error($conn);
    }
    ?>
  </body>
</html>
