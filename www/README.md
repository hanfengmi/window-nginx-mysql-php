# PHP
> PHP 脚本在服务器上执行，然后将纯 HTML 结果发送回浏览器。

### 基本的 PHP 语法
> PHP 脚本可以放在文档中的任何位置。  


1. echo输出
> PHP 脚本以 <?php 开始，以 ?> 结束

2. 注释
> // 单行注释   
> /*
多   
行  
注  
释
*/
3. 变量
> $x = 1;   
$y = 2;
$z = $x+$y;

> 变量可以是很短的名称（如 x 和 y）或者更具描述性的名称（如 age、carname、totalvolume）。

> PHP变量规则：

> 变量以 $ 符号开始，后面跟着变量的名称      
> 变量名必须以字母或者下划线字符开始     
> 变量名只能包含字母数字字符以及下划线（A-z、0-9 和 _ ）    
> 变量名不能包含空格   
> 变量名是区分大小写的（$y 和 $Y 是两个不同的变量）

> PHP 是一门弱类型语言

> php也有作用域

3.global关键字
> **global用于函数内访问的全局变量**

    $x = 5;
    $y = 6;
    $z = 1
    function test(){
        global $x,$y;
        $y = $x+$y+$z;//会报错，找不到z
    }
    test();
    echo $y;

>PHP将所有的全局变量储存在一个名字叫做$GLOBALS[index]的数组中。index保存变量名称，这个函数可以在函数内部访问，也可以直接来更新全局变量。

    $x=5;
    $y=10;
    function test2(){
      $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    test2();
    echo $y;
