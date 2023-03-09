<div class="flex space-evenly wrap">
    <form method="post" action="">
        <fieldset>
            <legend>Se connecter</legend>
            <div class="mb-3">
                <label for="Login" class="form-label">Login</label>
                <input type="text" placeholder="Login" class="form-control" id="Login" aria-describedby="emailHelp" name="txtLogin" required>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Mot de passe</label>
                <input type="password" placeholder="Mot de passe" class="form-control" id="Password" name="txtMot_de_passe" required>
            </div>
            <div>
                <button name="btnEnvoi" class="btn btn-primary">Se connecter</button>
            </div>
        </fieldset>
    </form>
    <div>
        <h3 class="text-danger">Pas encore inscrit ?</h3>
        <a href="inscription" class="btn btn-secondary">Clique</a>
    </div>
</div>
