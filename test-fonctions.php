<?php
include "affichage.php";
$nom_produit = "T-shirt femme";
$couleur = "Rouge";
$disponible = true;
$quantite= 10;
$prix = 15.50;


affichage_titre($nom_produit);
afficher_description($couleur,$prix);
affichage_titre($nom_produit);
afficher_produit($nom_produit,$couleur,$prix,$disponible);

include "gestion-produit.php";
update_dispo($quantite);
restockage($quantite,5);
achat($quantite,3);

afficher_produit($nom_produit, $couleur, $prix, $disponible);
achat($quantite,5);
update_dispo($quantite);
afficher_produit($nom_produit, $couleur, $prix, $disponible);
achat($quantite,5);
update_dispo($quantite);
afficher_produit($nom_produit,$couleur,$prix,$disponible);
restockage($quantite,5);
update_dispo($quantite);
afficher_produit($nom_produit,$couleur,$prix,$disponible);

include ("../EX_02/chaine.php");
$str1 = "La maîtrise des fondamentaux du code et de la programmation dans les domaines du business, du marketing et de la communication est un avantage sérieux et utile." ;

afficher_caractere($str1)
?>