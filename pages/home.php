<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body class="page-home">
    <header>
        <div class="logo"><img src="../Image/logo.jpeg" alt="ShopEasy logo"></div>
        <nav>
        <a href="./marcher.php">Boutique</a>
            <a href="./commande.php">Commande</a>
        </nav>
    </header>
    <div class="container">
        <section class="hero">
            <div class="hero-copy">
                <span class="eyebrow">Espace client</span>
                <h1>Bienvenue</h1>
                <p>Gérez vos commandes, découvrez les meilleures offres et suivez vos achats directement depuis votre tableau de bord.</p>
                <div class="hero-actions">
                    <a class="button-primary" href="./marcher.php">Boutique</a>
                    <a class="button-secondary" href="./commande.php">Faire une commande</a>
                    <a class="button-link" href="">Déconnexion</a>
                </div>
            </div>
            <div class="hero-panel">
                <div class="stat-card">
                    <strong>95%</strong>
                    <span>Satisfaction clients</span>
                </div>
                <div class="stat-card">
                    <strong>24h</strong>
                    <span>Livraison rapide</span>
                </div>
                <div class="stat-card">
                    <strong>+120</strong>
                    <span>Produits disponibles</span>
                </div>
            </div>
        </section>

        <section class="feature-grid">
            <article class="feature-card">
                <p class="feature-label">Accès rapide</p>
                <h2>Visiter la boutique</h2>
                <p>Explorez les produits du moment et profitez des meilleures offres.</p>
                <a class="feature-link" href="./marcher.php">Voir la boutique</a>
            </article>
            <article class="feature-card accent">
                <p class="feature-label">Commande</p>
                <h2>Créer une commande</h2>
                <p>Passez une commande en quelques clics et suivez son état.</p>
                <a class="feature-link" href="./commande.php">Commander maintenant</a>
            </article>
            <article class="feature-card">
                <p class="feature-label">Support</p>
                <h2>Aide et contact</h2>
                <p>Besoin d'aide ? Nous sommes là pour vous accompagner.</p>
                <a class="feature-link" href="">Nous contacter</a>
            </article>
        </section>

        <div class="cmd">
            <div class="cmd-header">
                <h1>Mes commandes</h1>
                <span class="badge">Dernière commande : aujourd'hui</span>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Produit</th>
                        <th>Prix</th>
                        <th>Qte</th>
                        <th>Etat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>100</td>
                        <td>Biscuit</td>
                        <td>500</td>
                        <td>5</td>
                        <td>Récupérer</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>