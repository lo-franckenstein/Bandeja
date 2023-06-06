<?php if($uri === "/forum") : ?>
    <div class="article-container">
        <?php foreach ($articles as $article) : ?>
            <div class="article">
                <h2 class="article-title"><?= $article->articleTitre ?></h2>
                <h2 class="article-title">Par <?= $article->utilisateurPseudo ?></h2>
                <img src="<?= $article->articleImage ?>" alt="Article Image" class="article-image">
                <a href="voirArticle?articleId=<?= $article->articleId ?>">Voir plus...</a>
            </div>
        <?php endforeach ?>
    </div>
<?php endif ?>

<?php if($uri === "/recherche-joueurs") : ?>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Personne recherchant</th>
                    <th>Lien pour voir plus</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $article) : ?>
                    <tr>
                        <td><?= $article->articleTitre ?></td>
                        <td><?= $article->articleDescription ?></td>
                        <td><?= $article->utilisateurPseudo ?></td>
                        <td><a href="voirArticle?articleId=<?= $article->articleId ?>">Voir plus...</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
<?php endif ?>

<?php if($uri === "/market") : ?>
    <div class="article-container">
        <?php foreach ($articles as $article) : ?>
            <div class="article">
                <h2 class="article-title"><?= $article->articleTitre ?></h2>
                <img src="<?= $article->articleImage ?>" alt="Article Image" class="article-image">
                <h2 class="article-title">Par <?= $article->utilisateurPseudo ?></h2>
                <a href="voirArticle?articleId=<?= $article->articleId ?>">Voir plus...</a>
            </div>
        <?php endforeach ?>
    </div>
<?php endif ?>

<?php if($uri === "/faq") : ?>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Lien pour voir plus</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $article) : ?>
                    <tr>
                        <td><?= $article->articleTitre ?></td>
                        <td><?= $article->utilisateurPseudo ?></td>
                        <td><a href="voirArticle?articleId=<?= $article->articleId ?>">Voir plus...</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
<?php endif ?>

