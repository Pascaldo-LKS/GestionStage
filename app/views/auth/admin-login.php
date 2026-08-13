<?php
$title = "Connexion administrateur";
?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title><?= $title; ?> - GestionStage</title>

    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            min-height: 100%;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f4f6f9;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .login-container {
            width: 100%;
            max-width: 420px;
            background: #ffffff;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.10);
        }

        .login-container h1 {
            margin: 0 0 25px;
            text-align: center;
            font-size: 26px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            margin-bottom: 7px;
            font-weight: 600;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        .form-group input:focus {
            outline: none;
            border-color: #007bff;
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 6px;
            background: #007bff;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-login:hover {
            background: #0056b3;
        }

        .erreur {
            background: #ffe5e5;
            color: #c00;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 6px;
            text-align: center;
        }

        @media (max-width: 480px) {

            body {
                padding: 15px;
            }

            .login-container {
                padding: 25px 20px;
            }

            .login-container h1 {
                font-size: 22px;
            }
        }
    </style>

</head>

<body>

<div class="login-container">

    <h1>Connexion administrateur</h1>

    <?php if(isset($erreur)): ?>

        <div class="erreur">
            <?= htmlspecialchars($erreur); ?>
        </div>

    <?php endif; ?>


    <form method="POST"
          action="index.php?page=auth/authenticate-admin">

        <div class="form-group">

            <label for="nom_utilisateur">
                Nom utilisateur
            </label>

            <input
                type="text"
                id="nom_utilisateur"
                name="nom_utilisateur"
                required
                autocomplete="username"
            >

        </div>


        <div class="form-group">

            <label for="mot_de_passe">
                Mot de passe
            </label>

            <input
                type="password"
                id="mot_de_passe"
                name="mot_de_passe"
                required
                autocomplete="current-password"
            >

        </div>


        <button type="submit" class="btn-login">
            Se connecter
        </button>

    </form>

</div>

</body>

</html>