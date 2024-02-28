
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="styles.css">
</head>
<div class="banner">
  <h1>Bienvenue sur notre site!</h1>
</div>
    <body>
    <div class="login-container">
        <h2>Connexion</h2>
        <form method="post" action="index.php">
            <?php if (isset($_GET['error'])) {?>
                <p class="error"> <?php echo $_GET['error'];?></p>
            <?php
            }
            ?>
        <div class="form-group">
                <label for="nom_complet">Nom Complet:</label>
                <input type="text" id="nom_complet" name="nom_complet" >
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" >
            </div>
            <div class="form-group">
                <label for="mot_de_passe">Mot de passe :</label>
                <input type="mot_de_passe" id="mot_de_passe" name="mot_de_passe" >
            </div>
            <button type="submit">Se connecter</button>
        </form>
    </div>
</body>
</html>