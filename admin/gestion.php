<?php
session_start();
include("../config/db.php");
$users = $conn->query("SELECT * FROM users ");

$pro = $conn->prepare("SELECT * FROM produit ORDER BY Nom_prod");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./gestion.css">
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
    <section>
        <aside>
            <ul>
                <p>Menu</p>
                <li class="li active" id="globale">globale</li>
                <li class="li non_active" id="produit">Produits</li>
                <li class="li non_active" id="ajouter">Ajouter </li>
                <li class="li non_active" id="gerer">Gerer</li>
                <li class="li" id="deconexion">Deconnexion</li>
            </ul>
        </aside>
        <div class="container">
            <h1>Tableau de bord Admin</h1>



            <main class="globale main_active">
                <div class="info_important">
                    <h1>Vue Globale</h1>
                    <div class="div0">
                        <div class="card">
                            <p>commandes en attente</p>
                            <p class="number">2</p>
                        </div>
                        <div class="card">
                            <p>alerte de stock</p>
                            <p class="number">8</p>
                        </div>

                    </div>
                    <div class="div1">
                        <div class="card">
                            <p>commande valider</p>
                            <p class="number">7</p>
                        </div>
                        <div class="card">
                            <p>Vente du moi</p>
                            <p class="number">4</p>
                        </div>
                    </div>
                </div>

                <div class="cmd_derniere">
                    <h1>Les 5 dernières commandes</h1>
                </div>
            </main>



            <main class="produit main">
                <div class="head_produit">
                    <button type="button" class="pd btn-active" id="list">Liste des produit</button>
                    <button type="button" class="pd" id="aprovis">Approvisionnement</button>
                    <button type="button" class="pd" id="promo">Promotion</button>
                </div>
                <div class="list">
                    <?php
                    $pro->execute();
                    if ($pro->rowCount() > 0) { ?>
                        <table>
                            <tr>
                                <th>Nom</th>
                                <th>Type</th>
                                <th>Pu</th>
                                <th>Qte</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            while ($p = $pro->fetch()) { ?>
                                <tr>
                                    <td><?= $p["Nom_prod"] ?></td>
                                    <td><?= $p["Cat"] ?></td>
                                    <td><?= $p["Prix"] ?></td>
                                    <td><?= $p["Qte"] ?></td>
                                    <td>
                                        <button type="button" class="suspendre" value="<?= $p["Id_prod"] ?>">Suspendre</button>
                                        <button type="button" class="supprimer" value="<?= $p["Id_prod"] ?>">Supprimer</button>
                                    </td>
                                </tr>
                            <?php
                            } ?>
                        </table>
                    <?php
                    }
                    ?>



                </div>
                <div class="aprovis form_produit">
                    <form id="form-aprovis">
                        <h1>Valider l'approvisionnement</h1>
                        <div class="form-control">
                            <label for="pro">Produit</label>
                            <select name="produit" id="pro">
                                <option value="">Choisissez une produit</option>
                                <?php
                                $pro->execute();
                                while ($pr = $pro->fetch()) { ?>
                                    <option value="<?= $pr["Id_prod"] ?>"><?= $pr["Nom_prod"] ?></option>
                                <?php
                                }
                                ?>

                            </select>
                        </div>
                        <div class="from-control">
                            <p>Voulez-vous conservé le prix ?</p>
                            <input type="radio" name="conserver" id="oui"><label for="oui">Oui</label>
                            <input type="radio" name="conserver" id="non"><label for="non">Non</label>
                        </div>
                        <div class="form-control pu" style="display: none;">
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
                <div class="promo form_produit">
                    <form id="form-promo">
                        <h1>mettre un produit en Promotion</h1>
                        <div class="form-control">
                            <label for="pro">Produit</label>
                            <select name="produit" id="pro">
                                <option value="">Choisissez une produit</option>
                                <?php
                                $pro->execute();
                                while ($pr = $pro->fetch()) { ?>
                                    <option value="<?= $pr["Id_prod"] ?>"><?= $pr["Nom_prod"] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="from-control">
                            <label for="pu">Prix Promotionnel</label>
                            <input type="number" id="pu" name="pu" placeholder="prix">
                        </div>
                        <div class="from-control">
                            <label for="d_promo">Date limite</label>
                            <input type="date" id="d_promo" name="d_promo">
                        </div>
                        <button type="submit">Valider</button><button type="reset">Anuler</button>
                    </form>
                </div>

            </main>

            <main class="ajouter main">
                <div class="form">
                    <form id="form-ajout">
                        <h1>Ajouter un nouveau produit</h1>
                        <div class="form-control">
                            <label for="produit">nom du Produit</label>
                            <input type="text" name="produit" id="produit">
                        </div>
                        <div class="form-control">
                            <label for="cat">Catégorie</label>
                            <select name="cat" id="cat">
                                <option value="">Choisie le type</option>
                                <option value="A">Alimentaire</option>
                                <option value="B">Vêtement</option>
                                <option value="C">Electronique</option>
                            </select>
                        </div>
                        <div class="form-control">
                            <label for="pu">Prix Unitaire</label>
                            <input type="number" id="pu" name="pu" placeholder="prix">
                        </div>
                        <div class="form-control">
                            <label for="qte">Quantité</label>
                            <input type="number" id="qte" name="qte" placeholder="Quantité">
                        </div>
                        <div class="form-con">
                            <label for="image">Ajouter les images</label>
                            <input type="file" name="images[]" id="image" multiple accept="image/*">
                        </div>
                        <button type="submit">Valider</button><button type="reset">Anuler</button>
                    </form>
                </div>
            </main>

            <main class="gerer main">
                <div class="head_gestion">
                    <button type="button" class="btn-gerer" id="cmd">Commandes</button>
                    <button type="button" class="btn-gerer" id="users">Les clients</button>
                </div>
                <div class="users">
                    <?php
                    if ($users->rowCount() > 0) { ?>
                        <table>
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Confirmer</th>
                                <th>Action</th>
                            </tr>

                            <?php
                            while ($u = $users->fetch()) { ?>
                                <tr>
                                    <td><?= $u["Pseudo"] ?></td>
                                    <td><?= $u["Email"] ?></td>
                                    <td><?= $r = ($u["Confirmer"]) ? "Oui" : "Non" ?></td>
                                    <td>
                                        <button type="button" value="<?= $u["Ref_user"] ?>" class="bloquer">Bloquer</button>
                                        <button type="button" value="<?= $u["Ref_user"] ?>" class="suprimer">Suprimer</button>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    <?php
                    }
                    ?>
                </div>
                <div class="cmd">

                </div>
            </main>

        </div>
    </section>

    <script src="./script/gestion.js"></script>
    <script src="./script/form_ajout.js"></script>
    <script src="./script/gestion_produit.js"></script>
</body>

</html>