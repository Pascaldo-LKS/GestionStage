<!DOCTYPE html>
<html>

<head>
    <title>Ajouter un utilisateur</title>
</head>
<?php /** @var array $etudiants */  ?>
<body>

<h1>Ajouter un utilisateur</h1>

<form method="POST"
      action="index.php?page=utilisateur/store">

    <label>Nom utilisateur :</label>

    <input type="text"
           name="nom_utilisateur"
           required>

    <br><br>


    <label>Mot de passe :</label>

    <input type="password"
           name="mot_de_passe"
           required>

    <br><br>


    <label>Rôle :</label>

    <select name="role" required>

        <option value="">
            -- Choisir un rôle --
        </option>

        <option value="Administrateur">
            Administrateur
        </option>

        <option value="Etudiant">
            Etudiant
        </option>

    </select>

    <br><br>


    <label>Étudiant :</label>

    <select name="id_etudiant">

        <option value="">
            -- Aucun étudiant --
        </option>

        <?php foreach($etudiants as $etudiant): ?>

            <option value="<?= $etudiant['id_etudiant']; ?>">

                <?= $etudiant['nom']; ?>

                <?= $etudiant['prenom']; ?>

            </option>

        <?php endforeach; ?>

    </select>

    <br><br>


    <button type="submit">
        Enregistrer
    </button>

</form>

<br>

<a href="index.php?page=utilisateur/index">
    Retour à la liste
</a>

</body>

</html>