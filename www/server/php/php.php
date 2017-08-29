<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- <?php
      // echo $_SERVER["REQUEST_METHOD"]."<br />";
      // echo $_SERVER["REQUEST_URI"]."<br />";
      // echo $_SERVER["SERVER_SOFTWARE"]."<br />";
      // echo $_SERVER["REMOTE_ADDR"]."<br />";
      // echo $_SERVER["SERVER_ADDR"]."<br />";
      // echo $_SERVER["REQUEST_TIME"]."<br />";
    ?> -->
<!-- <form>
    <input type="text" name="num1">

    <select name="fh">
        <option value="jia"> + </option>
        <option value="jian"> - </option>
        <option value="c"> x </option>
        <option value="chu"> / </option>
        <option value="qy"> % </option>

    </select>

    <input type="text" name="num2">

    <input type="submit" value="运算" />


</form>

<?php

    // $num1 = $_GET['num1'];
    // $num2 = $_GET['num2'];
    // $fh = $_GET['fh'];
    //
    // if(!is_numeric($num1) || !is_numeric($num2)){
    //
    //     echo '请输入数值类型';
    // }
    //
    // if($fh == 'jia'){
    //     echo $num1 . '+' . $num2 . '=' . ($num1+$num2);
    // }
    //
    // if($fh=='jian'){
    //     echo $num1 . '-' . $num2 . '=' . ($num1-$num2);
    // }
    //
    // if($fh=='c'){
    //     echo $num1 . 'x' . $num2 . '=' . ($num1*$num2);
    // }
    // if($fh=='chu'){
    //     echo $num1 . '/' . $num2 . '=' . ($num1/$num2);
    // }
    // if($fh=='qy'){
    //     echo $num1 . '%' . $num2 . '=' . ($num1%$num2);
    // }
?> -->
<?php


    $testJSON=array('name'=>'123','value'=>'456');
    echo json_encode($testJSON);

    $testJSON=array('name'=>'123','value'=>'456');
    echo json_encode($testJSON);

    $arr3=array("data"=>"this is all","name"=>"ham");
    echo json_encode($arr3);

//     $testJSON=array('name'=>'中文字符串','value'=>'test');
// 　　echo json_encode($testJSON);


 ?>





































  </body>
</html>
