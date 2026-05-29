<?php
$range = 30;
$output = "";

for($i = 1; $i<=$range; $i++){
    if($i % 2 == 0) $output = $i . " is an even number";
    else $output = $i . " is an odd number";
    if($i % 3 == 0) $output = $output . " Hello";
    if($i % 5 == 0) $output = $output . " World";
    echo $output . "\n";
}
$letters = array("a","b","c","d");
foreach($letters as $letter){
    echo $letter;   
}
$numbers = [1,2,3,4,5,6];
foreach($numbers as $number){
    echo "My number is " . $number ." but my index is " . $number-1;
}
for($i = 0; $i < count($numbers); $i++ ){
    echo "". $numbers[$i] ."";
}
?>