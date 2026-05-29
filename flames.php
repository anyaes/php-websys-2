<?php
$name1 = "MICO GRANDE"; // I, G, R, A, N
$name2 = "YURI BANAAG"; // R, I, A, N, A, A, G

function inFlames($numbers) {
    $flames = ["F", "L", "A", "M", "E", "S"];
    if ($numbers == 0) {
        return "No matches";
    }
    
    $remainder = $numbers % count($flames);
    if ($remainder != 0) {
        return $flames[$remainder - 1];
    } else {
        return end($flames); 
    }
}

function oneName($person1, $person2){
   $count = 0;
   for($i = 0; $i < strlen($person1); $i++){
       for($j = 0; $j < strlen($person2); $j++){
           if($person1[$i]===$person2[$j] && $person1[$i] != " "){
               $count++;
               $person2[$j] = "*";
            }
        }
    }
    return $count;
}

function flamesTotal($name1, $name2){
   $sum = $name1 + $name2;
   return $sum;
}

$total = flamesTotal(oneName($name1,$name2), oneName($name2,$name1));
$name2Total = inFlames(oneName($name1, $name2));
$name1Total = inFlames(oneName($name2, $name1));

echo $name1 . " " . $name1Total . oneName($name2, $name1). "\n" ;
echo $name2 . " " . $name2Total  . oneName($name1, $name2). "\n" ;

echo inFlames($total) . $total . "\n";

?>