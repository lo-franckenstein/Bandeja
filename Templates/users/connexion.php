
<form method="post" action="">
    <div class="form">
        <label for="Pseudo" class="form-label">Pseudo:</label> <br>
        <input type="text" class="form-input input1" id="Pseudo" value="" name="nom">
        <?php if(isset($messageErrorLogin['pseudo'])) : ?> <p class="champvide"><?= $messageErrorLogin['pseudo'] ?></p> <?php endif ?>
    </div>
    <div class="form">
        <label for="Password" class="form-label">Mot de passe:
            <span id="passwordToggle" onclick="togglePasswordVisibility()">
                <i class="fa fa-eye"></i>
            </span>
        </label> <br>
        <input type="password" class="form-input input2" id="Password" value="" name="mot_de_passe">
        <?php if(isset($messageErrorLogin['nom'])) : ?> <p class="champvide"><?= $messageErrorLogin['mot_de_passe'] ?></p> <?php endif ?>
    </div>
    <div class="formbutton">
        <button name="btnConnexion" class="btn" value="btnConnexion">Se connecter</button>
    </div>
    <div class="form formsupp">
        <a href="inscription">Pas encore inscrit?</a>
        <a href="mdpforget">Mot de passe oublié?</a>
    </div>
</form>
