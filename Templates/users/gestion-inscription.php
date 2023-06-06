<form method="post" action="">
    <legend><?php if(isset($_SESSION["user"])) : ?>Profil<?php else : ?> Inscription <?php endif ?></legend>
    <div class="flexSpace">
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
    </div>
    <div class="flexSpace">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" placeholder="Email" class="form-control" id="email" name="email" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->utilisateurEmail ?><?php endif ?>">
            <?php if(isset($messageErrorLogin['email'])) : ?> <p class="champvide"><?= $messageErrorLogin['email'] ?></p> <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="Login" class="form-label">Pseudo</label>
            <input type="text" placeholder="Pseudo" class="form-control" id="Login" name="login" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->utilisateurPseudo ?><?php endif ?>" >
            <?php if(isset($messageErrorLogin['login'])) : ?> <p class="champvide"><?= $messageErrorLogin['login'] ?></p> <?php endif ?>
        </div>
    </div>
    <div class="mb-3">
    <label for="Password" class="form-label">Mot de passe:
        <span id="passwordToggle" onclick="togglePasswordVisibility()">
            <i class="fa fa-eye"></i>
        </span>
    </label>
    <input type="password" placeholder="Mot de passe" class="form-control" id="Password" name="mot_de_passe" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->utilisateurMotdepasse ?><?php endif ?>">
    <?php if(isset($messageErrorLogin['mot_de_passe'])) : ?> <p class="champvide"><?= $messageErrorLogin['mot_de_passe'] ?></p> <?php endif ?>
</div>

    <div class="flexSpace">
    <?php if (isset($_SESSION["user"])) :?><button name="btnModification" class="btn btn-primary" value="btnModification">Sauvegarder les changements</button><?php endif ?>
        <?php if (!isset($_SESSION["user"])) :?><button name="btnInscription" class="btn btn-primary" value="envoyer">M'inscrire</button><?php endif ?>
        </div>
        <div class="flexSpace">
            <?php if (isset($_SESSION["user"])) :?><button name="btnDeconnexion" class="btn btn-primary" value="btnDeconnexion">Déconnexion</button><?php endif ?>
            <p><?php if (isset($_SESSION["user"])) :?><button name="btnSuppression" class="btn btn-primary" value="btnSuppression">Supprimer</button><?php endif ?></p>
        </div>
</form>