<?php

session_start();
include("../../config/db.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uploadDir = '../../upload/';
    $produit = htmlspecialchars($_POST["produit"]);
    $cat = $_POST["cat"];
    $pu = htmlspecialchars($_POST["pu"]);
    $qte = htmlspecialchars($_POST["qte"]);
    $cheminsImages = [];

    // Vérifier si des fichiers ont été envoyés
    if (!empty($produit) && !empty($cat) && !empty($pu) && !empty($qte)) {
        if (!empty($_FILES['images']['name'][0])) {
            foreach ($_FILES['images']['tmp_name'] as $key => $tmpName) {
                $nomFichier = basename($_FILES['images']['name'][$key]);
                $cible = $uploadDir . time() . '_' . $nomFichier; // Ajout d'un timestamp pour éviter les doublons

                if (move_uploaded_file($tmpName, $cible)) {
                    $cheminsImages[] = $cible;
                }
            }
            $jsonChemins = json_encode($cheminsImages);
        }

        $insertpro = $conn->prepare("INSERT INTO produit(Nom_prod, Prix, Cat, Qte, urls) VALUES(?,?,?,?,?)");
        if ($insertpro->execute([$produit, $pu, $cat, $qte, $jsonChemins])) {
            echo "Produit ajouter avec succès";
        } else {
            echo "une erreur s'est produite veuillez réessayer";
        }
    }else{
    echo "Veuillez remplir tous les champs";
}
}
