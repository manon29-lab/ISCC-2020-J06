<?php

$maximum = 100 ; 

function compter_dizaine ($maximum) {
    for ($minimum = 1; $minimum <= $maximum; $minimum+=1 ){
        echo "$minimum <br>" ;
        
if ($minimum %10 == 0 && $minimum!= 100) {
    echo "<p>Ceci est une dizaine. </p> <br>" ;
}

if ($minimum % 100 == 0) {
    echo "<p>Ceci est une centaine. </p> <br>" ;

}
 } }

compter_dizaine(100) ;
?>