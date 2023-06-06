<form method='post' action="">
    <div class="justify-content-space-between">
        <div class="form-check">
            <input class="form-check-input" type="radio" id="forumRadio" name="articleType" value="forum">
            <label class="form-check-label" for="forumRadio">
                Forum |
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="rechercheJoueursRadio" name="articleType" value="rechercheJoueurs">
            <label class="form-check-label" for="rechercheJoueursRadio">
                Recherche Joueurs |
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="faqRadio" name="articleType" value="faq">
            <label class="form-check-label" for="faqRadio">
                FAQ |
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="boutiqueRadio" name="articleType" value="boutique">
            <label class="form-check-label" for="boutiqueRadio">
                Boutique |
            </label>
        </div>
    </div>
    <div class="mb-3">
        <label for="Titre" class="form-label">Titre</label>
        <input type="text" placeholder="Titre" class="form-control" id="Titre" name="Titre" value="">
        <?php if(isset($messageErrorLogin['Titre'])) : ?> <p class="champvide"><?= $messageErrorLogin['Titre'] ?></p> <?php endif ?>
    </div>
    <div class="mb-3" id="descriptionField" style="display: none;">
        <label for="Description" class="form-label">Description courte</label>
        <input type="text" placeholder="Description courte" class="form-control" id="Description" name="Description" value="">
        <?php if(isset($messageErrorLogin['Description'])) : ?> <p class="champvide"><?= $messageErrorLogin['Description'] ?></p> <?php endif ?>

    </div>
    <div class="mb-3" id="textField" style="display: none;">
        <label for="Contenu" class="form-label">Contenu de l'article</label>
        <textarea type="text" placeholder="Contenu de l'article" class="form-control" id="Contenu" name="Contenu" value="" rows="5" cols="33"></textarea>
        <?php if(isset($messageErrorLogin[''])) : ?> <p class="champvide"><?= $messageErrorLogin['Contenu'] ?></p> <?php endif ?>
    </div>
    <div class="mb-3" id="pictureField" style="display: none;">
        <label for="Image" class="form-label">Lien vers l'image d'illustration de l'article</label>
        <input type="link" placeholder="Lien vers l'image" class="form-control" id="Image" name="Image" value="">
        <?php if(isset($messageErrorLogin['Image'])) : ?> <p class="champvide"><?= $messageErrorLogin['Image'] ?></p> <?php endif ?>
    </div>
    <div class="flexSpace">
        <button name="btnCréerArticle" class="btn btn-primary" value="btnCréerArticle">Envoyer mon article</button>
    </div>
</form>

<script>
    var forumRadio = document.getElementById("forumRadio");
    var rechercheJoueursRadio = document.getElementById("rechercheJoueursRadio");
    var faqRadio = document.getElementById("faqRadio");
    var boutiqueRadio = document.getElementById("boutiqueRadio");

    var descriptionField = document.getElementById("descriptionField");
    var textField = document.getElementById("textField");
    var pictureField = document.getElementById("pictureField");

    forumRadio.addEventListener("change", function() {
        if (forumRadio.checked) {
            MontrerTout();
        } else {
            CacherToutChamps();
        }
    });

    rechercheJoueursRadio.addEventListener("change", function() {
        if (rechercheJoueursRadio.checked) {
            MontrerTitreDescription();
        } else {
            CacherToutChamps();
        }
    });

    faqRadio.addEventListener("change", function() {
        if (faqRadio.checked) {
            MontrerTitreDescription();
        } else {
            CacherToutChamps();
        }
    });

    boutiqueRadio.addEventListener("change", function() {
        if (boutiqueRadio.checked) {
            MontrerDescriptionImage();
        } else {
            CacherToutChamps();
        }
    });

    function MontrerTout() {
        descriptionField.style.display = "block";
        textField.style.display = "block";
        pictureField.style.display = "block";
    }

    function MontrerTitreDescription() {
        descriptionField.style.display = "block";
        textField.style.display = "none";
        pictureField.style.display = "none";
    }

    function MontrerDescriptionImage() {
        descriptionField.style.display = "block";
        textField.style.display = "none";
        pictureField.style.display = "block";
    }

    function CacherToutChamps() {
        descriptionField.style.display = "none";
        textField.style.display = "none";
        pictureField.style.display = "none";
    }
</script>
