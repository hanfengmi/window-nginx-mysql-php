<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>getData</title>
  </head>
  <body>
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "1";
      $dbname = "myfirst";

      $conn = mysqli_connect($servername,$username,$password,$dbname);
      if(!$conn){
        die("连接失败: " . mysqli_connect_error());
      };

      $sql = "SELECT id,firstname,lastname FROM MyGuest";
      $result = mysqli_query($coon,$sql);
      if(mysqli_num_rows($result) > 0){

      }
    ?>
  </body>
</html>
