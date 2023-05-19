<form method="post" action="">
        <div class="form">
            <label for="key" class="form-label">Clé</label>
            <input type="text" placeholder="key" class="form-input" id="clé" value="" name="key">
            <?php if(isset($messageErrorLogin['pseudo'])) : ?> <p class="champvide"><?= $messageErrorLogin['clé'] ?></p> <?php endif ?>
        </div>
        <div class="form">
            <button name="btnCoKey" class="btn" value="btnCoKey">Se connecter avec la clé</button>
        </div>
</form>