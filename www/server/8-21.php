<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>php</title>
  </head>
  <body>
    <p>
      <?php
        echo '哈哈哈'
      ?>

    </p>
    <p>
      <?php
        $text1 = "abc";
        $text2 = "ABC";
        $cars = array('Volvo','BMW','Toyota');

        echo $text1;
        echo "<br />";
        echo "再见 $text2 ,学习";
        echo "买了个 {$cars[1]} 的车";
        echo "<br />";
        // 输出必须用双引号
        var_dump($cars)

      ?>

    </p>

    <p>
<?php
  $x = 123;
  var_dump($x);
  echo "<br />";

  $a = 'qwe';
  var_dump($a);
  echo "<br />";

  $fu = 1.213;
  var_dump($fu);
?>
    </p>
    <p>
      <?php

      class Car{
        var $color;
        function Car($color="green"){
          $this->color = $color;
        }

        function what_color(){
          return $this->color;
        }
      }

      ?>

    </p>
    <p>
      <?php
        define("HASN","youyouyou",true);

        echo hasn;
      ?>
    </p>
    <p>
      <?php
      $x = "wojiao";
      $y = "shasha";

      echo $x.$y . "++++" . $y."<br/>";
      echo strlen($x)."<br />";
      echo strpos($x,"o")
      ?>
    </p>

    <p>
      <?php
        $x = array("a"=>"red","b"=>"green");
        $y = array("c"=>"blue","a"=>"red");
        $a = array("1","2","4");
        $b = array("1","2","4","4","6");
        var_dump($y);
        echo "<br />";
        var_dump($a);
        $z = $b + $a;
        var_dump($z);
      ?>
    </p>

    <p>
      <?php
        $color = "red";
        switch($color){
          case "red":
            echo "han"." ".$color;
            break;
          case "blue":
            echo "zhao".$color;
            break;
          case "yellow":
            echo "ke".$color;
            break;
          default:
            echo "啥也不是";
        }
      ?>
    </p>
  </body>
  <script type="text/javascript">
    // echo 输出
    // 输出有两种：echo和print
    /*
      echo ：可以一次输出多个值，多值之间用逗号分隔
      print ：打印一个值，如果字符串成功显示就返回true，否则返回false
      printf_r：可以把字符串和数字简单打印出来，var_dump()函数更适合调试。
      var_dump():判断一个变量的类型与长度,并输出变量的数值,如果变量有值输的是变量的值并回返数据类型。
      此函数显示关于一个或多个表达式的结构信息，包括表达式的类型与值。数组将递归展开值，通过缩进显示其结构。
    */
/*
    php数据类型
    1.字符串
    2.整型
      整数必须至少有一个数字 (0-9);
      整数不能包含逗号或空格;
      整数是没有小数点的;
      整数可以是正数或负数;
      整型可以用三种格式来指定：十进制， 十六进制（ 以 0x 为前缀）或八进制（前缀为 0）;
    3.浮点型
      浮点数是带小数部分的数字，或是指数形式。
    4.布尔型
    5.数组
        数值数组 - 带有数字 ID 键的数组;
        关联数组 - 带有指定的键的数组，每个键关联一个值
        多维数组 - 包含一个或多个数组的数组
    6.对象
*/

  /*
    常量
    define("GREETING", "欢迎访问 Runoob.com",true);
    (变量名，变量值，是否区分大小写)
  */

  /*
    .运算符，将两个字符串变量连在一起
  */

  /*
    strlen()返回字符串的长度;
    count()返回数组的长
  */

  /*
    php数组运算符
    x+y  集合
  */

  /* 遍历数组
    1.普通数组
      for($x=0;$x<count($array);$x++){}
    2.关联数组
      for($age as )

  */



  </script>
</html>
