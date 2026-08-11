<!DOCTYPE html>
<html>

<head>
    <title>Liste des utilisateurs</title>
</head>
<?php /** @var array $utilisateurs */  ?>
<body>
    
<a href="index.php?page=auth/logout">
    Se déconnecter
</a>

<br><br>
<h1>Liste des utilisateurs</h1>

<a href="index.php?page=utilisateur/create">
    Ajouter un utilisateur
</a>

<br><br>

<table border="1">

    <tr>
        <th>ID</th>
        <th>Nom utilisateur</th>
        <th>Rôle</th>
        <th>ID Étudiant</th>
        <th>Actions</th>
    </tr>

    <?php foreach($utilisateurs as $utilisateur): ?>

    <tr>

        <td>
            <?= $utilisateur['id_utilisateur']; ?>
        </td>

        <td>
            <?= $utilisateur['nom_utilisateur']; ?>
        </td>

        <td>
            <?= $utilisateur['role']; ?>
        </td>

        <td>
            <?= $utilisateur['id_etudiant']; ?>
        </td>

        <td>

            <a href="index.php?page=utilisateur/edit&id=<?= $utilisateur['id_utilisateur']; ?>">
                Modifier
            </a>

            |

            <a href="index.php?page=utilisateur/delete&id=<?= $utilisateur['id_utilisateur']; ?>"
               onclick="return confirm('Voulez-vous supprimer cet utilisateur ?');">
                Supprimer
            </a>

        </td>

    </tr>

    <?php endforeach; ?>

</table>

</body>

</html>