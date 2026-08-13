<?php
    $title = "Modifiern l'znnée";

require_once __DIR__ . '/../layouts/header.php';
require_once __DIR__ . '/../layouts/menu-admin.php';
?>
<main>
    <div class="page-content">
        <div class="page-header">

              <h1>Ajouter une année</h1>

            <p>  Enregistrer une nouvelle année.  </p>

        </div>
        <div class="form-card">
    
        <form method="POST" action="index.php?page=annee/store">

            <div class="form-group">
                <label  for="libelle">Année acdémique :</label>

                <input type="text" name="libelle" required/>
            </div>
                <div class="form-actions">

                    <a href="index.php?page=annee/index" class="btn btn-secondary">  Annuler </a>

                    <button type="submit" class="btn btn-primary">  Enregistrer </button>

                </div>
            
        </form>
     </div>  
      <?php require_once __DIR__ . '/../layouts/footer.php'; ?>
</main>
