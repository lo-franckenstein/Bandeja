<div class="mininews">
    <h1>Découvrez les dernières actualités à propos du Padel !</h1>
    <?php foreach ($articles as $article) : ?>
        <div class="mininews-card">
            <img src="<?= $article->articleImage ?>" alt="Image de l'article">
            <h5><?= $article->articleTitre ?></h5>
        </div>
    <?php endforeach ?>
</div>