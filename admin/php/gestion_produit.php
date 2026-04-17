<?php
session_start();
include("../../config/db.php");
if (isset($_POST["d_promo"])) {
    $pro= $_POST["produit"];
    $pu= $_POST["pu"];
    $d_limite= $_POST["d_promo"];
    if(!empty($pro) && !empty($pu) && !empty($d_limite)){
        $isert= $conn->prepare("INSERT INTO promo(Id_prod, Prix_p, D_limite) VALUES(?,?,?)");
        if($isert->execute([$pro, $pu, $d_limite])){
            echo "Promotion debuté avec suucès";
        }else{
            echo "Une erreur s'est produite veuillez réessayer";
        }
    }else{
        echo "Veuillez remplir tous les champs";
    }
} else {
    $pro = $_POST["produit"];
    $pu = $_POST["pu"];
    $qte= $_POST["qte"];
    if(!empty($pro) && !empty($qte)){
        if(!empty($pu) && ($pu > 0)){
            $update= $conn->prepare("UPDATE produit SET Prix= ? , Qte=? WHERE Id_prod=?");
            if($update->execute([$pu, $qte, $pro])){
                echo "Approvisionnement effectué avec succès";
            }else{
                echo "Une erreur s'est produite veuillez réessayer";
            }
        }else{
           $update= $conn->prepare("UPDATE produit SET Qte=? WHERE Id_prod=?");
            if($update->execute([$qte, $pro])){
                echo "Approvisionnement effectué avec succès";
            }else{
                echo "Une erreur s'est produite veuillez réessayer";
            } 
        }
    }else{
        echo "Veuillez remplir tous les champs";
    }
}
