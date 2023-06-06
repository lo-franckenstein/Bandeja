    <div class="article a">
        <?php if (isset($article->articleTitre)) : ?>
            <h2 class="article-title at"><?= $article->articleTitre ?></h2>
        <?php endif; ?>

        <?php if (isset($article->articleDescription)) : ?>
            <p class="article-description ad"><?= $article->articleDescription ?></p>
        <?php endif; ?>
        <div class="flex">
        <?php if (isset($article->articleTexte)) : ?>
            <p class="article-text att"><?= $article->articleTexte ?></p>
        <?php endif; ?>

        <div class="place"></div>

        <?php if (isset($article->articleImage)) : ?>
            <img src="<?= $article->articleImage ?>" alt="Article Image" class="article-image ai">
        <?php endif; ?>
        </div>

        <?php if (isset($article->articleDate)) : ?>
            <p class="article-date ada">Date de publication : <?= $article->articleDate ?></p>
        <?php endif; ?>

        <?php if (isset($article->utilisateurId)) : ?>
            <p class="article-author aa">Auteur : <?= $article->utilisateurPseudo ?></p>
        <?php endif; ?>
    </div>