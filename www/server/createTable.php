<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "1";
      $dbname = "myfirst";

      $conn = mysqli_connect($servername,$username,$password,$dbname);
      if(!$conn){
        die("连接失败：".mysqli_connect_error());
      }

      $sql = "CREATE TABLE MyGuest(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname  VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP
      )";

      if(mysqli_query($conn,$sql)){
        echo "数据表 MyGuests 创建成功";
      }else{
        echo "创建数据表错误：". mysqli_connect_error();
      }

    ?>
  </body>
</html>
