<?php
function compter ($maximum){

    $compteur=1;
    while ($compteur<=$maximum){
        echo "$compteur <br>";
        $compteur = $compteur + 1;

    }
} ;

function compter_for ($maximum) {

    for ($compteur = 1;
    $compteur <=$maximum;
    $compteur = $compteur + 1 ){
        echo "$compteur <br>" ;
    
    }
    }

    compter (10);

    compter_for (10);

?>