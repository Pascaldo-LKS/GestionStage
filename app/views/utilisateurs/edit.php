<!DOCTYPE html>
<html>

<head>
    <title>Modifier un utilisateur</title>
</head>
<?php /** @var array $utilisateur */ 
/** @var array $etudiants */ ?>
<body>

<h1>Modifier un utilisateur</h1>

<form method="POST"
      action="index.php?page=utilisateur/update">

    <input type="hidden"
           name="id_utilisateur"
           value="<?= $utilisateur['id_utilisateur']; ?>">


    <label>Nom utilisateur :</label>

    <input type="text"
           name="nom_utilisateur"
           value="<?= $utilisateur['nom_utilisateur']; ?>"
           required>

    <br><br>


    <label>Rôle :</label>

    <select name="role" required>

        <option value="Administrateur"
            <?= $utilisateur['role'] == 'Administrateur' ? 'selected' : ''; ?>>
            Administrateur
        </option>

        <option value="Etudiant"
            <?= $utilisateur['role'] == 'Etudiant' ? 'selected' : ''; ?>>
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

            <option
                value="<?= $etudiant['id_etudiant']; ?>"
                <?= $etudiant['id_etudiant'] == $utilisateur['id_etudiant'] ? 'selected' : ''; ?>
            >

                <?= $etudiant['nom']; ?>

                <?= $etudiant['prenom']; ?>

            </option>

        <?php endforeach; ?>

    </select>

    <br><br>


    <button type="submit">
        Modifier
    </button>

</form>

<br>

<a href="index.php?page=utilisateur/index">
    Retour à la liste
</a>

</body>

</html>