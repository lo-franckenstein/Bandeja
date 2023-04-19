<div class="menu">

    <form action="post" action="">
        <div class="form">
            <label for="Pseudo" class="form-label">Pseudo</label>
            <input type="text" placeholder="Pseudo" class="form-input" id="Pseudo" value="" name="nom">
            <?php if(isset($messageErrorLogin['pseudo'])) : ?> <p class="champvide"><?= $messageErrorLogin['pseudo'] ?></p> <?php endif ?>
        </div>
        <div class="form">
            <label for="Password" class="form-label">Mot de passe</label>
            <input type="password" placeholder="Password" class="form-input" id="Password" value="" name="mot_de_passe">
            <?php if(isset($messageErrorLogin['nom'])) : ?> <p class="champvide"><?= $messageErrorLogin['mot_de_passe'] ?></p> <?php endif ?>
        </div>
        <div class="form">
            <button name="btnConnexion" class="btn" value="btnConnexion">Se connecter</button>
        </div>
        <div class="form">
            <a href="inscription">Pas encore inscrit?</a>
        </div>
    </form>

</div>