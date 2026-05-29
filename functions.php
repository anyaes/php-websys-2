<?php
$str = "Hello World";

function getSum(){ // do sum talk loud do sum
    $num1 = 13;
    $num2 = 64;
    
    $sum = $num1 + $num2;
    
    echo "I will return the sum. ";

    return $sum;
}

function doSomn($num1, $num2){
    $sum = $num1 + $num2;
    
    return $sum;
}

echo "hello " . getSum();
echo doSomn(32,34);
$x = 411;
$y = 111;
$talkloud = doSomn($x,$y);
echo $talkloud;
?>