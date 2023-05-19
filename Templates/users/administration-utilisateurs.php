<div class="table-container">
    <br>
    <h2 class='list-users'>Liste des utilisateurs</h2> <br>
    <table>
        <thead>
            <tr>
                <th>Pseudo</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($utilisateurs as $utilisateur) : ?>
                <tr>
                    <td><?= $utilisateur->utilisateurPseudo ?></td>
                    <td><?= $utilisateur->utilisateurNom ?></td>
                    <td><?= $utilisateur->utilisateurPrenom ?></td>
                    <td><?= $utilisateur->utilisateurEmail ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
