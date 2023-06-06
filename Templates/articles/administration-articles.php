<div class="1">
    <div class="table-container">
        <br>
        <h2 class='list-articles'>Article de la section Rechercher Joueurs </h2> <br>
        <table>
            <thead>
                <tr>
                    <th class="tha">Pseudo</th>
                    <th class="tha">Titre</th>
                    <th class="tha">Description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articleRecherche as $article) : ?>
                    <tr>
                        <td class="tda"><?= $article->utilisateurPseudo ?></td>
                        <td class="tda"><?= $article->articleTitre ?></td>
                        <td class="tda"><?= $article->articleDescription ?></td>
                        <td class="tda"><?= $article->articleDate ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <div class="table-container">
        <br>
        <h2 class='list-articles'>Article de la section Forum </h2> <br>
        <table>
            <thead>
                <tr>
                    <th class="tda">Pseudo</th>
                    <th class="tda">Titre</th>
                    <th class="tda">Description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articleForum as $article) : ?>
                    <tr>
                        <td class="tda"><?= $article->utilisateurPseudo ?></td>
                        <td class="tda"><?= $article->articleTitre ?></td>
                        <td class="tda"><?= $article->articleDescription ?></td>
                        <td class="tda"><?= $article->articleDate ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

</div>
<div class="2">
    <div class="table-container">
        <br>
        <h2 class='list-articles'>Article de la section FAQ </h2> <br>
        <table>
            <thead>
                <tr>
                    <th class="tda">Pseudo</th>
                    <th class="tda">Titre</th>
                    <th class="tda">Description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articleFaq as $article) : ?>
                    <tr>
                        <td class="tda"><?= $article->utilisateurPseudo ?></td>
                        <td class="tda"><?= $article->articleTitre ?></td>
                        <td class="tda"><?= $article->articleDescription ?></td>
                        <td class="tda"><?= $article->articleDate ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <div class="table-container">
        <br>
        <h2 class='list-articles'>Article de la section Boutique</h2> <br>
        <table>
            <thead>
                <tr>
                    <th class="tda">Pseudo</th>
                    <th class="tda">Titre</th>
                    <th class="tda">Description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articleBoutique as $article) : ?>
                    <tr>
                        <td class="tda"><?= $article->utilisateurPseudo ?></td>
                        <td class="tda"><?= $article->articleTitre ?></td>
                        <td class="tda"><?= $article->articleDescription ?></td>
                        <td class="tda"><?= $article->articleDate ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>