<?php
include("../../config/db.php");
if (isset($_POST["email"])) {
    $email = htmlspecialchars($_POST["email"]);
    $mdp = htmlspecialchars($_POST["mdp"]);
    if (!empty($email) && !empty($mdp)) {
        $emailadmin = "simonkouyom2@gmail.com";
        $mdphash = '$2y$10$5xnnK3XyvL3lTGDtMLZmCOPoDxebjfSekMvf027/4nolcoVDmTLFq';
        if (($emailadmin == $email) && (password_verify($mdp, $mdphash))) {
            echo "success";
        } else {
            echo "error";
        }
    } else {
        echo "Veillez remplir tous les champs";
    }
}
