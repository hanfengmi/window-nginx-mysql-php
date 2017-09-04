<?php
      $servername = "localhost";
      $username = "root";
      $password = "1";
      $dbname = "myfirst";

      $fname = $_POST["fname"];
      $pass = $_POST["password"];

      $conn = mysqli_connect($servername, $username, $password,$dbname);
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      $sql = "INSERT INTO MyGuest (firstname,password)
      VALUES ('$fname','$pass')";

      if(mysqli_query($conn,$sql)){
        echo "新纪录插入成功";
      }else{
        echo "Error:".$sql."<br>".mysqli_error($conn);
      }


?>
