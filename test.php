<nav class="mb-3">
    <a href="add_post.php" class="btn btn-primary">Ajouter un article</a>
</nav>

<table class="table">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Auteur</th>
            <th>Catégorie</th>
            <th>Date de création</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($posts as $post): ?>
            <tr>
                <td><a href="show_post.php?id=<?= $post['id'] ?>"><?= htmlspecialchars($post['post_title']) ?></a></td>
                <td><?= htmlspecialchars(excerpt($post['content'])) ?>[...]</td>
                <td><?= $post['username'] ?></td>
                <td><?= $post['category_title'] ?></td>
                <td><?= $post['created_at'] ?></td>
                <td><a href="edit_post.php?id=<?= $post['id'] ?>">Editer</a> | <a href="delete_post.php?id=<?= $post['id'] ?>">Supprimer</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>