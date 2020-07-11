<?php

//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function sum ($num){
    $result = $num * 2;
    return $result;
}
echo sum(200);
echo "\n";

//2.$a と $b を仮引数に持ち、　$aと$b　を足した結果を返す関数を作成してください。
function f($a, $b) {
    return $a + $b;
    }
echo (100 + 20);
echo "\n";
//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
$arr = array (1,3,5,7,9);
function multiply ($arr){
    $result = 1;
    foreach($arr as $num){
        $result = $result * $num;
    }
 }
 //From here
echo $array(1,3,5,7,9);
echo "\n";

//4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
$max_number = $arr[0];
foreach($arr as $a){
 if ($max_number < $a){
   //From here
 }
}
return $max_number;
}
echo max_array(1,3,5,7,9);