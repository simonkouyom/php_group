<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body class="page-index">
    <header>
        <div class="logo"><img src="Image/logo.jpeg" alt="ShopEasy logo"></div>
        <nav>
            <a href="./pages/marcher.php">Boutique</a>
            <a href="./pages/commande.php">Commander</a>
            <a href="./pages/connexion.php?id=0">Connexion</a>
        </nav>
    </header>

    <main class="container">
        <section class="hero">
            <div class="hero-copy">
                <span class="eyebrow">Bienvenue</span>
                <h1>Faites des achats faciles et rapides</h1>
                <p>Découvrez des produits frais, commandez en un clic et suivez votre livraison sans effort.</p>
                <div class="hero-buttons">
                    <a class="button-primary" href="./pages/marcher.php">Voir la boutique</a>
                    <a class="button-secondary" href="./pages/connexion.php?id=0">Se connecter</a>
                </div>
            </div>
            <div class="hero-stats">
                <article>
                    <strong>120+</strong>
                    <span>Produits</span>
                </article>
                <article>
                    <strong>24h</strong>
                    <span>Livraison rapide</span>
                </article>
                <article>
                    <strong>98%</strong>
                    <span>Satisfaction</span>
                </article>
            </div>
        </section>

        <section class="highlights">
            <article class="highlight-card">
                <h2>Offres du jour</h2>
                <p>Profitez des promotions et réductions exclusives disponibles maintenant.</p>
                <a href="./pages/marcher.php">Voir les offres</a>
            </article>
            <article class="highlight-card accent">
                <h2>Commande rapide</h2>
                <p>Passez votre commande en quelques minutes et recevez-la rapidement.</p>
                <a href="./pages/commande.php">Commander</a>
            </article>
            <article class="highlight-card">
                <h2>Support dédié</h2>
                <p>Une question ? Notre équipe est prête à vous répondre.</p>
                <a href="./pages/connexion.php?id=0">Nous contacter</a>
            </article>
        </section>

        <section class="product-showcase">
            <div class="product-card">
                <div class="product-image"></div>
                <div class="product-details">
                    <p class="product-label">Produit en vedette</p>
                    <h3>Biscuit gourmand</h3>
                    <p class="product-price">500 FCFA</p>
                    <a class="button-tertiary" href="./pages/commande.php">Commander</a>
                </div>
            </div>
        </section>

        <section class="cta-grid">
            <div class="cta-card">
                <h2>Connexion</h2>
                <p>Accédez à votre compte et profitez de vos avantages.</p>
                <a href="./pages/connexion.php?id=0">Se connecter</a>
            </div>
            <div class="cta-card accent">
                <h2>Inscription</h2>
                <p>Créez un compte pour suivre vos commandes et recevoir des promos.</p>
                <a href="./pages/connexion.php?id=1">S'inscrire</a>
            </div>
        </section>
    </main>
</body>
</html>