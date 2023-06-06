<div>
    <?php ?>
    <form method='post' action="">
        <label for="message" class="form-label"></label>
        <textarea type="text" rows="5" cols="33" placeholder="Votre message" class="form-control" id="message" name="message" value=""></textarea>
        <?php if(isset($messageErrorLogin['Image'])) : ?> <p class="champvide"><?= $messageErrorLogin['Image'] ?></p> <?php endif ?>
        <button name="btnSendMessage" class="btn btn-primary" value="btnSendMessage"><i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i></button>
    </form>
</div>
