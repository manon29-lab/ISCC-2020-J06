<?php
function update_dispo($quantite) {
    if ($quantite > 0) {
        return true;
    }
    else {
        return false;
    }
}


function restockage($quantité, $nb_ajout) {
    echo "<p>" . $nb_ajout . "produits ont été ajoutés au stock. </p>" ;
    return ($quantité-1 + $nb_ajout) ;

}

function achat ($quantité, $nb_achat) {
    echo "<p>" . $nb_achat . "produits ont été achetés. </p>";
    return ($quantité-1 - $nb_achat);
}

?>