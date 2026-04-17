<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <header>
        <div class="logo">
            Logo
        </div>
        <nav>
            <a href="">Marcher</a>
            <a href="../index.php">Accueil</a>
            <a href="./connexion.php">Se connecter</a>
            <p id="panier">1</p>
        </nav>
    </header>
    <div class="container">
        <div class="haader">
            <input type="text" id="search" placeholder="rechercher">
            <button type="button" id="btn-search">Rechercher</button>
        </div>

        <div class="produit">
            <h1>Les produits disponible</h1>
            <div class="card">
                <img src="" alt="">
                <p class="nom">Nom</p>
                <p class="prix">Prix</p>
                <p class="promo">Prix promo</p>
                <p class="cmd">
                    <button type="button" class="btn-cmd">Commander</button>
                    <button type="button" class="apanier" value="<?= 1 ?>">Ajouter au panier</button>
                </p>
            </div>
        </div>
    </div>

    <script src="../script/marcher.js"></script>
</body>
</html>