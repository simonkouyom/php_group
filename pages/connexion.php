<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}else{
    $id=0;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/connexion.css">
    <title>Page d'inscription</title>
</head>

<body>

    <div class="container">
        <?php
        if ($id == 1) { ?>
            <span class="control" style="display: none;">1</span>
            <div class="form-inscription">
                <div class="info">
                    <p>
                        Pour menéficier de tous les avanges , Veuillez vous inscrire
                    </p>
                    <p class="option">
                    <p>Vous avez déjà un compte ? <a href="./connexion.php?id=0">Se conecter</a></p>
                    </p>
                </div>
                <form id="inscription">
                    <input type="number" name="test" value="0" id="test" style="display: none;">
                    <div class="form-control">
                        <label for="pseudo">Pseudo</label>
                        <input type="text" name="pseudo" id="pseudo" placeholder="exp: Simon">
                        <small></small>
                    </div>
                    <div class="form-control">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="exp: Simon@gmail.com">
                        <small></small>
                    </div>
                    <div class="form-control">
                        <label for="mdp">Mot de passe</label>
                        <input type="password" name="mdp" id="mdp" placeholder="exp: Audrey12">
                        <small></small>
                    </div>
                    <button type="submit">S'inscrire</button>
                    
                </form>
            </div>
        <?php
        } else { ?>
            <span class="control" style="display: none;">0</span>
            <div class="form-connexion">
                <div class="info">
                    <p>Vous êtes mieux servit que chez Vous, Veullez vous connecter</p>
                    <p class="option">
                    <p>Vous n'avez pas de compte ? <a href="./connexion.php?id=1">S'inscrire</a></p>
                    </p>
                </div>
                <form id="connexion">
                    <input type="number" name="test" value="1" id="test" style="display: none;">
                    <div class="form-control">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="exp: Simon@gmail.com">
                        <small></small>
                    </div>
                    <div class="form-control">
                        <label for="mdp">Mot de passe</label>
                        <input type="password" name="mdp" id="mdp" placeholder="Votre mot de passe">
                        <small></small>
                    </div>
                    <button type="submit">Se connecter</button>
                </form>
            </div>
        <?php
        }
        ?>

    </div>

    <script src="../script/connexion.js"></script>
</body>

</html>