<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
    <header>
        <div class="logo">
            logo
        </div>
        <nav>
            <a href="">Profil</a>
            <a href="">Admin</a>
        </nav>
    </header>
    <aside>
        <ul>
            <li>globale</li>
            <li>Produits</li>
            <li>Ajouter </li>
            <li>Gerer</li>
            <li>Deconnexion</li>
        </ul>
    </aside>
    <div class="container">
        <h1>Tableau de bord Admin</h1>
        <main class="globale">
            <h1>Vue Globale</h1>
            <div class="card">
                commandes en attente
            </div>
            <div class="card">
                alerte de stock
            </div>
            <div class="card">
                commande valider
            </div>
            <div class="card">
                Vente du moi
            </div>
        </main>
        <main class="produit">
            <div class="head_produit">
                <button class="list">Liste des produit</button>
                <button class="aprovisionnement">Approvisionnement</button>
            </div>
            <div class="list">
                <table>
                    <tr>
                        <th>Nom</th>
                        <th>Type</th>
                        <th>Pu</th>
                        <th>Qte</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>Biscuit</td>
                        <td>aliment</td>
                        <td>100</td>
                        <td>15</td>
                        <td>
                            <button type="button" class="modifier">Modifier</button>
                            <button type="button" class="supprimer">Supprimer</button>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="form">
                <form action="">
                    <h1>Valider l'approvisionnement</h1>
                    <div class="form-control">
                        <label for="produit">Produit</label>
                        <select name="produit" id="produit">
                            <option value="">Choisissez une produit</option>

                        </select>
                    </div>
                    <div class="from-control">
                        <p>Voulez-vous conservé le prix ?</p>
                        <input type="radio" name="conserver" id="oui"><label for="oui">Oui</label>
                        <input type="radio" name="conserver" id="non"><label for="non">Non</label>
                    </div>
                    <div class="form-control">
                        <label for="pu">Prix Unitaire</label>
                        <input type="number" id="pu" name="pu" placeholder="prix">
                    </div>
                    <div class="form-control">
                        <label for="qte">Quantité</label>
                        <input type="number" id="gte" name="qte" placeholder="Quantité">
                    </div>
                    <button type="submit">Valider</button><button type="reset">Anuler</button>
                </form>
            </div>

        </main>

        <main class="ajouter">  
            <div class="form">
                
                <form action="">
                    <h1>Ajouter un nouveau produit</h1>
                    <div class="form-control">
                        <label for="produit">nom du Produit</label>
                        <input type="text" name="produit" id="produit">
                    </div>
                    <div class="form-control">
                        <label for="pu">Prix Unitaire</label>
                        <input type="number" id="pu" name="pu" placeholder="prix">
                    </div>
                    <div class="form-control">
                        <label for="qte">Quantité</label>
                        <input type="number" id="gte" name="qte" placeholder="Quantité">
                    </div>
                    <button type="submit">Valider</button><button type="reset">Anuler</button>
                </form>
            </div>
        </main>

        <main class="gerer">
            <button type="button">Commandes</button>
        </main>
        <div class="cmd_derniere">
            <h1>Les 5 dernières commandes</h1>
        </div>
    </div>
</body>

</html>