<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    欢迎 <?php echo $_POST["fname"]; ?>!<br>
          <?php echo $_POST["lname"]; ?>!<br>
    你的邮箱是 <?php echo $_POST["email"]; ?>  岁。

    <?php
      $servername = "localhost";
      $username = "root";
      $password = "1";
      $dbname = "myfirst";

      $fname = $_POST["fname"];
      $lname = $_POST["lname"];
      $email = $_POST["email"];

      $conn = mysqli_connect($servername, $username, $password,$dbname);
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      $sql = "INSERT INTO MyGuest (firstname,lastname,email)
      VALUES ('$fname','$lname','$email')";

      if(mysqli_query($conn,$sql)){
        echo "新纪录插入成功";
      }else{
        echo "Error:".$sql."<br>".mysqli_error($conn);
      }
    ?>
  </body>
</html>
