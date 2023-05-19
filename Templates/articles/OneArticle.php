<?php foreach ($articleees as $article) : ?>
    <div class="article">
        <?php if (isset($article->articleTitre)) : ?>
            <h2 class="article-title"><?= $article->articleTitre ?></h2>
        <?php endif; ?>

        <?php if (isset($article->articleDescription)) : ?>
            <p class="article-description"><?= $article->articleDescription ?></p>
        <?php endif; ?>

        <?php if (isset($article->articleTexte)) : ?>
            <p class="article-text"><?= $article->articleTexte ?></p>
        <?php endif; ?>

        <?php if (isset($article->articleImage)) : ?>
            <img src="<?= $article->articleImage ?>" alt="Article Image" class="article-image">
        <?php endif; ?>

        <?php if (isset($article->articleDate)) : ?>
            <p class="article-date">Date de publication : <?= $article->articleDate ?></p>
        <?php endif; ?>

        <?php if (isset($article->utilisateurId)) : ?>
            <p class="article-author">Auteur : <?= $article->utilisateurId ?></p>
        <?php endif; ?>
    </div>
<?php endforeach; ?>