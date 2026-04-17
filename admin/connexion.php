<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin authentification</title>
</head>

<body>
    <div class="container">
        <form id="admin">
            <h1>Authentification</h1> 
            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Votre Email">
            </div>
            <div class="form-control">
                <label for="mdp">Mot de passe</label>
                <input type="password" name="mdp" id="mdp" placeholder="Votre mot de passe">
            </div>
            <button type="submit">Se connecter</button>
        </form>
    </div>

    <script src="./script/connexion.js"></script>
</body>

</html>