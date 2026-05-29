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
$numbers = [3,6,7,5,1];

#bubble sort - if the number is greater than the next, swap them
for($i = 0; $i < count($numbers); $i++){
    for($j = 0; $j < count($numbers) - 1; $j++){
        if($numbers[$j] > $numbers[$j + 1]){
            $temp = $numbers[$j];
            $numbers[$j] = $numbers[$j + 1];
            $numbers[$j + 1] = $temp;
        }
    }
}
?>