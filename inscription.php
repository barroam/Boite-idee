
<?php session_start() ?>
<?php require('header.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>  
</head>

<body>
<a class="btn-retour" href="connexion.php">Retour</a>
    <div class="container">
        <h2>Inscription</h2>
        <form action="base_donnee.php" method="POST">
      
        <?php if (isset($_GET['error'])) {?>
                <p class="error"> <?php echo $_GET['error'];?></p>
            <?php
            }
            ?>
            <input  class="saisi" type="text" name="nom_complet" placeholder="Nom complet" required><br>
            <input class="saisi" type="text" name="email" placeholder="Adresse email" required><br>
            <input class="saisi" type="password" name="mot_de_passe" placeholder="Mot de passe" required><br>
            <input class="saisi" type="text" name="profession" placeholder="Votre profession"><br>
            <input class="saisi" type="text" name="fonction" placeholder="Votre fonction"><br>
            <input class="saisi" type="text" name="telephone" placeholder="Numéro de téléphone"><br>
            <button type="submit" name="save_inscription">S'inscrire</button>
          
        </form>
    </div>
</body>

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
           
        }
        
        .container {
            max-width: 30rem;
            margin: 100px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            color: #fff;
            background-image: url(img/Designer\ \(5\).jpeg);
            background-size:  cover;
            background-position: center; 
            background-repeat: no-repeat;
        }
        
        .container h2 {
            text-align: center;
        }
        
      .saisi{
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        .container button {
            width: 100%;
            padding: 10px;
            background-color:#54A7E4;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .container button:hover {
            background-color: #fff;
            color: #000;
        }
        .btn-retour{
            display: flex;
            justify-content: end;
            align-items: start;
            text-decoration:none ;
           font-weight: 900;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            padding: 0.51%;
            margin: 1%;
            float: right;
        }
        .btn-retour:hover{
            background-color: #fff;
            color: #EFA475;
        }
  </style>

</html>
