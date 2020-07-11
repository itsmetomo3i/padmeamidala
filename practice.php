<?php
$a = 3;
$b = 7;
echo $a+$b;
echo "\n";
$array_month = ["January", "February", "March", "April","May", "June","July","August","September", "October","November","December"];
echo $array_month[7];
echo "\n";
$hello = "Hello ";
$name = "Tomomi";
$world = "'s World !!";
echo $hello.= $name.= $world;
echo "\n";
$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost;
echo "\n";

$height = 160;

if ($height > 140){
    echo "150cm 未満の方はご乗車できません。";
} else {
    echo "ご乗車になれます。";
}
echo "\n";
//name変数を定義して、文字列をドットでつなげる
$name = "山田";
echo "私は". $name . "です";
echo "watashi".$name. "desu";
