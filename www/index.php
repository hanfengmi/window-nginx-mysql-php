<?php
//for($i = 1 ; $i < 10 ; $i++ ){
//    for($j=1;$j<=$i;$j++){
//        echo $j . 'x' . $i . '=' .($i*$j) . '   ';
//    }
//    echo '<br />';
//
//}

//goto wan;
//echo "hahah";
//
//wan:
//echo "wuuwuwu";
//
//for ($i=0;$i<100;$i++){
//    echo "第".$i."周返回北京<br />";
//    if($i == 19){
//        goto end;
//    }
//}
//
//end:
//echo "停止回北京";


function woziji($one,$two,$func){
    if(!is_callable($func)){
        return false;
    }
    echo $one + $two + $func($one,$two);
}


function plusx2( $foo , $bar){
    $result = ($foo+$bar)*2;
    return $result;
}

function jian( $x , $y ){
    $result = $x - $y;

    return $result;
}

echo woziji(20,10,'plusx2').'<br />';

echo woziji(20,10,'jian').'<br />';



readfile("E:/WNMP/web/tt.txt");

$filename = "E:/WNMP/web/tt.txt";

$filestring = file_get_contents($filename);
echo '<br />'.$filestring;
?>