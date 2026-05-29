<?php
# 3 variables, 2 numbers, operators
# $op = readline("Enter operator: "); -- like python actually
$op = "-";
$x = 6;
$y = 5;
$result = 0;

if($op == "+"){
    $result = $x+$y;
} elseif($op == "-"){
    $result = $x-$y;
} elseif($op == "*"){
    $result = $x*$y;
} elseif($op == "/"){
    $result = $x/$y;
}
echo $result;
?>