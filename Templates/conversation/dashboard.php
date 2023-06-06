<div class="listeUsers">
    <h1>Avec qui tu veux lancer une conversation?</h1>
    <?php foreach ($Allutilisateurs as $utilisateur) : ?>
        <a href="/creerconversation?utilisateurId=<?= $utilisateur->utilisateurId?>"><?= $utilisateur->utilisateurPseudo ?></a>
    <?php endforeach ?>
</div>