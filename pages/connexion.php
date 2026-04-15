<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'inscription</title>
</head>

<body>
    <div class="container">

        <div class="form-inscription">
            <div class="info">
                <p>
                    Pour menéficier de tous les avanges , Veuillez vous inscrire
                </p>
                <p class="option">
                    <p>Vous avez déjà un compte ? <button type="button" id="btn-con">S'inscrire</button></p>
                </p>
            </div>
            <form action="">
                <div class="form-control">
                    <label for="pseudo">Pseudo</label>
                    <input type="text" name="pseudo" id="pseudo" placeholder="exp: Simon">
                </div>
                <div class="form-control">
                    <label for="mdp">Mot de passe</label>
                    <input type="password" name="mdp" id="mdp" placeholder="exp: Audrey12">
                </div>
                <button type="submit">S'inscrire</button>
            </form>
        </div>
        <div class="form-connexion">
            <div class="info">
                <p>Vous êtes mieux servit que chez Vous, Veullez vous connecter</p>
                <p class="option">
                    <p>Vous n'avez pas de compte ? <button type="button" id="btn-ins">S'inscrire</button></p>
                </p>
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
    </div>
</body>

</html>