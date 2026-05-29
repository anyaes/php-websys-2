<?php
$numbers = [3,6,7,1,5,5,7,8,8,4,5,7,8,9,10];
$length = count($numbers);
$secondleast = 0;

#bubble sort - if the number is greater than the next, swap them
for($i = 0; $i < $length; $i++){
    for($j = 0; $j < $length-$i-1; $j++){
        if($numbers[$j]>$numbers[$j+1]){
            $temp = $numbers[$j];
            $numbers[$j] = $numbers[$j+1];
            $numbers[$j+1] = $temp;
        }
    }
}

for($i = 0; $i < $length; $i++){
    if($numbers[$i]==$numbers[$i+1]){
        continue;
    } else{
        $secondleast = $numbers[$i];
    }
}
?>