<form method="post" action="">
    <fieldset>
        <legend><?php if(isset($_SESSION["user"])) : ?>Profil<?php else : ?> Inscription <?php endif ?></legend>
        <div class="mb-3">
            <label for="Nom" class="form-label">Nom</label>
            <input type="text" placeholder="Nom" class="form-control" id="Nom" name="nom" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->utilisateurNom ?><?php endif ?>">
            <?php if(isset($messageErrorLogin['nom'])) : ?> <p class="champvide"><?= $messageErrorLogin['nom'] ?></p> <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="Prenom" class="form-label">Prénom</label>
            <input type="text" placeholder="Prénom" class="form-control" id="Prenom" name="prenom" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->utilisateurPrenom ?><?php endif ?>">
            <?php if(isset($messageErrorLogin['prenom'])) : ?> <p class="champvide"><?= $messageErrorLogin['prenom'] ?></p> <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" placeholder="Email" class="form-control" id="email" name="email" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->utilisateurEmail ?><?php endif ?>">
            <?php if(isset($messageErrorLogin['email'])) : ?> <p class="champvide"><?= $messageErrorLogin['email'] ?></p> <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="Login" class="form-label">Login</label>
            <input type="text" placeholder="Login" class="form-control" id="Login" name="login" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->utilisateurMotdepasse ?><?php endif ?>" >
            <?php if(isset($messageErrorLogin['login'])) : ?> <p class="champvide"><?= $messageErrorLogin['login'] ?></p> <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">Mot de passe</label>
            <input type="password" placeholder="Mot de passe" class="form-control" id="Password" name="mot_de_passe" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->utilisateurEmail ?><?php endif ?>">
            <?php if(isset($messageErrorLogin['mot_de_passe'])) : ?> <p class="champvide"><?= $messageErrorLogin['mot_de_passe'] ?></p> <?php endif ?>
        </div>
        <div>
            <button name="btnEnvoi" class="btn btn-primary" value="envoyer">S'inscrire</button>
        </div><p>
            <?php if (isset($_SESSION["user"])) :?><button name="btnSuppression" class="btn btn-primary" value="btnSuppression">Supprimer</button><?php endif ?>
        </p>
    </fieldset>
</form>
