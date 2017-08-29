<html>
 <head>
  <title>PHP 测试</title>
 </head>
 <body>
   <?php
    echo "hello World";
   ?>

   <h2>
    <?php
      $x = 5;
      $y = 10;
      $z = 2;
      function test(){
        global $x,$y,$z;
        $y = $x+$y+$z;
      }
      test();
      echo $y;
    ?>
   </h2>

   <p>
     <?php
        $x = 1;
        $y = 2;

        function test2(){
          $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        test2();
        echo $y;
      ?>
      hahaha
   </p>

 </body>
</html>
