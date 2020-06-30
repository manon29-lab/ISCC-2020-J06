<?php
function affichage_titre ($nom_produit){
echo "<h1>Fiche produit: $nom_produit </h1";
}


function afficher_description ($couleur,$prix)
{echo "<p> $couleur, $prix </p>";}

function afficher_produit ($nom_produit, $couleur, $prix, $disponible) {
echo "<p> nom_produit:" . $nom_produit."</p>";





if ($disponible==false) {
    echo "<p> Le produit" . $nom_produit. "n'est malheureusement plus disponible </p>";

}
}
?>
