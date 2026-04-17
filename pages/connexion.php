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
    <title>Connexion / Inscription</title>
    <link rel="stylesheet" href="../css/connexion.css">
</head>

<body class="page-connexion">

    <div class="container">
        <div class="auth-grid">
            <aside class="auth-panel">
                <p class="eyebrow">Espace client</p>
                <h1>Bienvenue dans votre espace</h1>
                <p>Gérez vos commandes, suivez vos livraisons et découvrez vos meilleures offres sans perdre de temps.</p>
                <ul class="feature-list">
                    <li>Tableau de bord simple</li>
                    <li>Suivi en temps réel</li>
                    <li>Offres personnalisées</li>
                </ul>
                <div class="trust-badge">Sécurisé & fiable</div>
            </aside>

            <main class="auth-form">
                <div class="auth-tabs">
                    <a href="./connexion.php?id=0" class="tab-link<?php echo $id == 0 ? ' active' : ''; ?>">Connexion</a>
                    <a href="./connexion.php?id=1" class="tab-link<?php echo $id == 1 ? ' active' : ''; ?>">Inscription</a>
                </div>

                <?php
                if ($id == 1) { ?>
                    <div class="form-inscription">
                        <div class="info">
                            <p class="form-tag">Étape 1 sur 2 · Inscription rapide</p>
                            <h2>Créez votre compte client</h2>
                            <p>Rejoignez nos clients satisfaits pour profiter d’un suivi de commande instantané et de promotions exclusives.</p>
                        </div>
                        <form action="">
                            <div class="form-control">
                                <label for="pseudo">Pseudo</label>
                                <input type="text" name="pseudo" id="pseudo" placeholder="exp: Simon">
                            </div>
                            <div class="form-control">
                                <label for="email">Adresse e-mail</label>
                                <input type="email" name="email" id="email" placeholder="Votre email">
                            </div>
                            <div class="form-control">
                                <label for="mdp">Mot de passe</label>
                                <input type="password" name="mdp" id="mdp" placeholder="Créez un mot de passe sécurisé">
                            </div>
                            <div class="form-control">
                                <label for="confirm-mdp">Confirmer le mot de passe</label>
                                <input type="password" name="confirm-mdp" id="confirm-mdp" placeholder="Confirmez le mot de passe">
                            </div>
                            <div class="form-benefits">
                                <span>Suivi de commande en temps réel</span>
                                <span>Promotions réservées aux membres</span>
                                <span>Paiement sécurisé et rapide</span>
                            </div>
                            <button type="submit">S'inscrire</button>
                        </form>
                    </div>
                <?php
                } else { ?>
                    <div class="form-connexion">
                        <div class="info">
                            <p>Vous êtes mieux servi que chez vous. Veuillez vous connecter.</p>
                        </div>
                        <form action="">
                            <div class="form-control">
                                <label for="pseudo">Pseudo</label>
                                <input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo">
                            </div>
                            <div class="form-control">
                                <label for="mdp">Mot de passe</label>
                                <input type="password" name="mdp" id="mdp" placeholder="Votre mot de passe">
                            </div>
                            <button type="submit">Se connecter</button>
                        </form>
                    </div>
                <?php
                }
                ?>
            </main>
        </div>
    </div>
</body>

</html>