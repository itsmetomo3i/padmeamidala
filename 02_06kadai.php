<?php
$name ="tomomi";
if($name == "tika") {
    echo "私はあなたの名前です";
} else {
    echo "私はあなたの名前ではありません";
}
$total =1;
echo "\n";
for ($i = 1; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";

$fruit = array("orange","apple","cherry","mango","lemon");
foreach ($fruit as $fruit) {
    echo $fruit;
}

$start = 1;
$end =100;
for($i = $start; $i <= $end; $i++) {
    if($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}
