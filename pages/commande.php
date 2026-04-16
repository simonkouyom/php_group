<?php
session_start();
include("../config/db.php")

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form de commande</title>
</head>

<body>
    <header>
        <div class="logo">
            Logo
        </div>
        <nav>
            <a href="">Boutique</a>
            <a href="../index.php">Accueil</a>
            <a href="./connexion.php">Se connecter</a>
        </nav>
    </header>

    <div class="container">
        <?php
        if (isset($_SESSION['email'])) { ?>
            <div class="p1">
                <div class="form-control">
                    <label for="nom">Le type de produit</label>
                    <select name="type" id="type">
                        <option value="">Choisit un type</option>

                    </select>
                    <small></small>
                </div>
                <div class="form-control">
                    <label for="produit">le produit</label>
                    <select name="produit" id="produit">
                        <option value="">Choisit un produit</option>
                    </select>
                    <small></small>
                </div>
                <div class="form-control">
                    <label for="quantité">La quantité</label>
                    <input type="text" name="quantité" id="quantité">
                    <small></small>
                </div>
                <button type="button" id="btn-suivant">Suivant</button>
            </div>
            <div class="p2" style="display: none;">
                <div class="form-control">
                    <label for="tel">Votre numéro du téléphone</label>
                    <input type="tel" name="tel" id="tel">
                    <small></small>
                </div>
                <div class="form-control">
                    <label for="adresse">Adresse de livraison</label>
                    <input type="text" name="adresse" id="adresse">
                    <small></small>
                </div>
                <div class="form-control">
                    <label for="quantité">Moyen de payement</label>
                    <p>NB: le payement se fait à la livraison</p>
                    <select name="" id="">
                        <option value="">choisit un moyen de payement</option>
                    </select>
                    <small></small>
                </div>
                <div class="bouton">
                    <button type="submit">Valider</button>
                    <button type="reset">Anuler</button>
                </div>
                <p><button type="button" id="btn-precedant">Precédant</button></p>
            </div>

        <?php
        } else { ?>
            <div class="from">
                <form action="">
                    <h1>faite votre commande</h1>
                    <div class="p1">
                        <div class="form-control">
                            <label for="nom">Vote nom</label>
                            <input type="text" name="nom" id="nom">
                            <small></small>
                        </div>
                        <div class="form-control">
                            <label for="email">Vote adresse mail</label>
                            <input type="email" name="email" id="email">
                            <small></small>
                        </div>
                        <div class="form-control">
                            <label for="type">Le type de produit</label>
                            <select name="type" id="type">
                                <option value="">Choisit un type</option>
                            </select>
                            <small></small>
                        </div>
                        <div class="form-control">
                            <label for="produit">le produit</label>
                            <select name="produit" id="produit">
                                <option value="">Choisit un produit</option>
                            </select>
                            <small></small>
                        </div>
                        <div class="form-control">
                            <label for="quantité">La quantité</label>
                            <input type="number" name="quantité" id="quantité">
                            <small></small>
                        </div>

                        <button type="button" id="btn-suivant">Suivant</button>
                    </div>


                    <div class="p2" style="display: none;">
                        <div class="form-control">
                            <label for="tel">Votre numéro du téléphone</label>
                            <input type="tel" name="tel" id="tel">
                            <small></small>
                        </div>
                        <div class="form-control">
                            <label for="adresse">Adresse de livraison</label>
                            <input type="text" name="adresse" id="adresse">
                            <small></small>
                        </div>
                        <div class="form-control">
                            <label for="quantité">Moyen de payement</label>
                            <p>NB: le payement se fait à la livraison</p>
                            <select name="" id="">
                                <option value="">choisit un moyen de payement</option>
                            </select>
                            <small></small>
                        </div>
                        <div class="bouton">
                            <button type="submit">Valider</button>
                            <button type="reset">Anuler</button>
                        </div>
                        <p><button type="button" id="btn-precedant">Precédant</button></p>
                    </div>
                </form>
            </div>
        <?php
        }
        ?>
    </div>
    <script src="../script/commande.js"></script>

</body>

</html>