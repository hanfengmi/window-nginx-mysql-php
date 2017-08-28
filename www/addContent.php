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
    $dbname = "my-o";

    $conn = mysqli_connect($servername, $username, $password,$dbname);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO MyGuest (firstname,lastname,email)
    VALUES ('han','ke','han_s@123.com')";

    if(mysqli_query($conn,$sql)){
      echo "新纪录插入成功";
    }else{
      echo "Error:".$sql."<br>".mysqli_error($conn);
    }
    ?>
  </body>
</html>
