<?php

function clock()
{
    $hour = 0 ; 
    for ($hour = 0 ; $hour < 24 ; $hour +=1) {
        for ($minute = 00; $minute <=59; $minute += 1) { 
        
        echo "$hour: $minute <br> " ; 


     } 
    
    } 
}

clock();


?>