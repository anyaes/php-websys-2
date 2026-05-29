<?php

$title = "Indexing System";
$limiter = 5;
$showtitle = false;

for ($i = 0; $i <= $limiter; $i++){
    if($i == 0 and $showtitle) {
        echo $title . " \n";
    } else{
        echo "The index is ", $i, "\n";
    }
}

?>

