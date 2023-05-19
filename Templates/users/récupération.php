<div class="menu">
    <form method="post" action="">
        <div class="form">
            <label for="email" class="form-label">Email</label>
            <input type="email" placeholder="email" class="form-input" id="email" value="" name="email">
            <?php if(isset($messageErrorLogin['pseudo'])) : ?> <p class="champvide"><?= $messageErrorLogin['email'] ?></p> <?php endif ?>
        </div>
        <div class="form">
            <button name="btnOubli" class="btn" value="btnOubli">Récupérer le mot de passe</button>
        </div>
    </form>
</div>