<!DOCTYPE html>
<html>
<head>
<title>Ajouter un etudiant </title>
</head>
<?php
/** @var array $filieres */
/** @var array $niveaux */
/** @var array $annees */
?>
<body>
<h1>Ajouter un etudiant</h1>

<form method="POST" action="index.php?page=etudiant/store">
    <label> NON :</label>
    <input type="text" name="nom" required>
    <br><br>

    <label> Prenom :</label>
    <input type="text" name="prenom" required>
    <br><br>

    <label> Email :</label>
    <input type="email" name="email" required>
    <br><br>

    <label> Filiere :</label>
    <select  required>
        <option > Choisir une filiere </option>

        <?php foreach($filieres as $filiere) :?>

            <option value="<?= $filiere['id_filiere']; ?>"><?= $filiere['nom_filiere']; ?></option>
            
        <?php endforeach; ?>    
    </select>
                 <br><br>
    <label>Niveau :</label>
    <select  required>
        <option > Choisie ton niveau</option>

        <?php foreach($niveaux as $niveau) :?>

            <option value="<?= $niveau['id_niveau']; ?>"><?= $niveau['nom_niveau']; ?></option>
            
        <?php endforeach; ?>    
    </select>

                 <br><br>
    <label>Année </label>
    <select >
        <option >Quelle année? </option>

        <?php foreach($annees as $annee): ?>

            <option value=""> <?= $annee['libelle']; ?> </option>
            
        <?php endforeach; ?>    
    </select>
    <br><br>
    <button type="submit"> Enregistrer </button>
</form>


</body>
</html>