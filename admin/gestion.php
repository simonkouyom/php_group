<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/admin-gestion.css">
</head>

<body class="admin-dashboard">
    <div class="page-shell">
        <header>
            <div class="logo"><img src="../Image/logo.jpeg" alt="Admin logo"></div>
            <nav>
                <a href="#overview">Vue globale</a>
                <a href="#produits">Produits</a>
                <a href="#ajouter">Ajouter</a>
            </nav>
        </header>

        <div class="page-body">
            <aside>
                <div class="sidebar-title">Navigation</div>
                <ul>
                    <li><a href="#overview">Vue globale</a></li>
                    <li><a href="#produits">Produits</a></li>
                    <li><a href="#ajouter">Ajouter</a></li>
                    <li><a href="#gerer">Gérer</a></li>
                    <li><a href="#commandes">Déconnexion</a></li>
                </ul>
            </aside>

            <main class="page-main">
                <section id="overview" class="dashboard-overview">
                    <div class="overview-header">
                        <div>
                            <p class="eyebrow">Tableau de bord</p>
                            <h1>Vue globale</h1>
                        </div>
                        <div class="overview-actions">
                            <button class="primary-action">Nouveau produit</button>
                        </div>
                    </div>

                    <div class="overview-grid">
                        <article class="status-card">
                            <h2>Commandes en attente</h2>
                            <p>5</p>
                        </article>
                        <article class="status-card">
                            <h2>Alerte de stock</h2>
                            <p>3</p>
                        </article>
                        <article class="status-card">
                            <h2>Commandes validées</h2>
                            <p>12</p>
                        </article>
                        <article class="status-card">
                            <h2>Ventes du mois</h2>
                            <p>8</p>
                        </article>
                    </div>
                </section>

                <section id="produits" class="dashboard-products">
                    <div class="panel-header">
                        <div>
                            <p class="eyebrow">Produits</p>
                            <h2>Liste des produits</h2>
                        </div>
                        <div class="panel-buttons">
                            <button class="secondary-action">Liste des produits</button>
                            <button class="secondary-action">Approvisionnement</button>
                        </div>
                    </div>
                    <div class="table-wrap">
                        <table>
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Type</th>
                                    <th>PU</th>
                                    <th>Qté</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Biscuit</td>
                                    <td>Aliment</td>
                                    <td>100</td>
                                    <td>15</td>
                                    <td class="actions-cell">
                                        <button type="button" class="modifier">Modifier</button>
                                        <button type="button" class="supprimer">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

                <section id="ajouter" class="dashboard-forms">
                    <div class="form-panel">
                        <h2>Valider l'approvisionnement</h2>
                        <form action="">
                            <div class="form-control">
                                <label for="produit">Produit</label>
                                <select name="produit" id="produit">
                                    <option value="">Choisissez un produit</option>
                                </select>
                            </div>
                            <div class="form-control radio-group">
                                <p>Voulez-vous conserver le prix ?</p>
                                <label><input type="radio" name="conserver" value="oui"> Oui</label>
                                <label><input type="radio" name="conserver" value="non"> Non</label>
                            </div>
                            <div class="form-control">
                                <label for="pu">Prix unitaire</label>
                                <input type="number" id="pu" name="pu" placeholder="Prix">
                            </div>
                            <div class="form-control">
                                <label for="qte">Quantité</label>
                                <input type="number" id="qte" name="qte" placeholder="Quantité">
                            </div>
                            <div class="form-actions">
                                <button type="submit">Valider</button>
                                <button type="reset" class="cancel">Annuler</button>
                            </div>
                        </form>
                    </div>

                    <div class="form-panel">
                        <h2>Ajouter un nouveau produit</h2>
                        <form action="">
                            <div class="form-control">
                                <label for="nouveau-produit">Nom du produit</label>
                                <input type="text" name="produit" id="nouveau-produit">
                            </div>
                            <div class="form-control">
                                <label for="prix-produit">Prix unitaire</label>
                                <input type="number" id="prix-produit" name="pu" placeholder="Prix">
                            </div>
                            <div class="form-control">
                                <label for="qte-produit">Quantité</label>
                                <input type="number" id="qte-produit" name="qte" placeholder="Quantité">
                            </div>
                            <div class="form-actions">
                                <button type="submit">Valider</button>
                                <button type="reset" class="cancel">Annuler</button>
                            </div>
                        </form>
                    </div>
                </section>

                <section id="gerer" class="dashboard-latest">
                    <div class="panel-header">
                        <div>
                            <p class="eyebrow">Commandes</p>
                            <h2>Dernières commandes</h2>
                        </div>
                    </div>
                    <div class="panel-card">
                        <p>Les 5 dernières commandes apparaîtront ici.</p>
                    </div>
                </section>
            </main>
        </div>
    </div>
</body>

</html>