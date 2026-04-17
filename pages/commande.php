<?php
session_start();
include("../config/db.php");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form de commande</title>
    <link rel="stylesheet" href="../css/commande.css">
</head>

<body class="page-commande">
    <header>
        <div class="logo"><img src="../Image/logo.jpeg" alt="ShopEasy logo"></div>
        <nav>
            <a href="">Boutique</a>
            <a href="../index.php">Accueil</a>
            <a href="./connexion.php">Se connecter</a>
        </nav>
    </header>

    <div class="container">
        <section class="page-intro">
            <div>
                <p class="eyebrow">Commande rapide</p>
                <h1>Préparez votre livraison</h1>
                <p>Choisissez votre produit, renseignez votre adresse et validez votre commande en quelques étapes simples.</p>
            </div>
            <div class="hero-badge">Livraison express disponible</div>
        </section>

        <?php
        if (isset($_SESSION['email'])) { ?>
            <div class="form-card form-step-1">
                <div class="form-step">
                    <span class="step-indicator">Étape 1</span>
                    <h2>Choisissez votre produit</h2>
                    <p class="subtext">Sélectionnez le type, le produit et la quantité avant de passer à la livraison.</p>
                </div>
                <div class="form-control">
                    <label for="nom">Type de produit</label>
                    <select name="type" id="type">
                        <option value="">Choisir un type</option>
                    </select>
                    <small></small>
                </div>
                <div class="form-control">
                    <label for="produit">Produit</label>
                    <select name="produit" id="produit">
                        <option value="">Choisir un produit</option>
                    </select>
                    <small></small>
                </div>
                <div class="form-control">
                    <label for="quantité">Quantité</label>
                    <input type="text" name="quantité" id="quantité" placeholder="Nombre d'unités">
                    <small></small>
                </div>
                <button type="button" id="btn-suivant" class="btn btn-primary">Suivant</button>
            </div>
            <div class="form-card form-step-2" style="display: none;">
                <div class="form-step">
                    <span class="step-indicator">Étape 2</span>
                    <h2>Livraison & paiement</h2>
                    <p class="subtext">Indiquez vos coordonnées de livraison et confirmez le mode de paiement.</p>
                </div>
                <div class="form-control">
                    <label for="tel">Numéro de téléphone</label>
                    <input type="tel" name="tel" id="tel" placeholder="+229 1234 5678">
                    <small></small>
                </div>
                <div class="form-control">
                    <label for="adresse">Adresse de livraison</label>
                    <input type="text" name="adresse" id="adresse" placeholder="Rue, quartier, ville">
                    <small></small>
                </div>
                <div class="form-control">
                    <label for="paiement">Moyen de paiement</label>
                    <p class="subtext">Le paiement se fait à la livraison.</p>
                    <select name="paiement" id="paiement">
                        <option value="">Choisir un moyen de paiement</option>
                        <option value="cash">Espèces</option>
                        <option value="mobile">Mobile Money</option>
                    </select>
                    <small></small>
                </div>
                <div class="bouton">
                    <button type="submit" class="btn btn-primary">Valider</button>
                    <button type="reset" class="btn btn-secondary">Annuler</button>
                </div>
                <p><button type="button" id="btn-precedant" class="btn btn-ghost">Précédent</button></p>
            </div>

        <?php
        } else { ?>
            <div class="form-card guest-order">
                <div class="form-step">
                    <span class="step-indicator">Commande invité</span>
                    <h2>Passer une commande rapidement</h2>
                    <p class="subtext">Remplissez vos informations et obtenez votre livraison en un clin d'œil.</p>
                </div>
                <form action="">
                    <div class="form-control">
                        <label for="nom">Votre nom</label>
                        <input type="text" name="nom" id="nom" placeholder="Votre nom complet">
                        <small></small>
                    </div>
                    <div class="form-control">
                        <label for="email">Adresse e-mail</label>
                        <input type="email" name="email" id="email" placeholder="Votre adresse mail">
                        <small></small>
                    </div>
                    <div class="form-control">
                        <label for="type">Type de produit</label>
                        <select name="type" id="type">
                            <option value="">Choisir un type</option>
                        </select>
                        <small></small>
                    </div>
                    <div class="form-control">
                        <label for="produit">Produit</label>
                        <select name="produit" id="produit">
                            <option value="">Choisir un produit</option>
                        </select>
                        <small></small>
                    </div>
                    <div class="form-control">
                        <label for="quantité">Quantité</label>
                        <input type="number" name="quantité" id="quantité" placeholder="Nombre d'unités">
                        <small></small>
                    </div>
                    <button type="button" id="btn-suivant" class="btn btn-primary">Suivant</button>
                </form>
                <div class="order-hint">
                    <p>Besoin d’aide ? Notre équipe est disponible pour vous guider.</p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <script src="../script/commande.js"></script>

</body>

</html>