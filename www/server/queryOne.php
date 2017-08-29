<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>查找</title>
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
      }else{
        echo "连接成功"."<br>";
      }

      $sql = "SELECT * FROM MyGuest ";
      $result = mysqli_query($conn,$sql);

      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
          echo "id:".$row["id"]."- Name:".$row["firstname"]." ".$row["lastname"]."<br>";
        }
      }else{
        echo "0 结果";
      }

      mysqli_close($conn);
    ?>
  </body>
</html>
