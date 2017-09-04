<?php
    $servername = "localhost";
    $username = "root";
    $password = "1";
    $dbname = "myfirst";

    $fname = $_POST["fname"];
    $pass = $_POST["password"];

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
      die("连接失败：".mysqli_connect_error());
    }

    $sql = "SELECT * FROM MyGuest where firstname = '$fname' AND password = '$pass' ";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
        echo "登录";
      }

    }else{
      echo "0 结果".$fname;
    }
?>
