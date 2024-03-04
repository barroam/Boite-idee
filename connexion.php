<?php require('header.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a class="btn-retour" href="connexion.php">Retour</a>

<div class="container">
        <h2>Connexion</h2>
        <form action="index.php" method="post">
            <input type="email" name="email" placeholder="Adresse email" required><br>
            <input type="password" name="mot_de_passe" placeholder="Mot de passe" required><br>
            <button type="submit">Se connecter</button>
            <a href="inscription.php">S'inscrire</a>
        </form>
    </div>
</body>
<style>
body{
            font-family: Arial, sans-serif;
            background-color: #000;
            margin: 0;
            padding: 0;
            background-image: url(img/Designer\ \(6\).jpeg);
            background-size:  cover;
            background-position: center; 
            background-repeat: no-repeat;
        }
        
        .btn-retour{
            display: flex;
            justify-content: end;
            align-items: start;
            text-decoration:none ;
        
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            padding: 0.51%;
            margin: 1%;
            float: right;
            font-weight: 900;
        }
        .btn-retour:hover{
            color:#474A4B;
background-color: #fff;
        }
        .container {
            max-width: 30rem;
            margin: 100px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .container h2 {
            text-align: center;
            color: #fff;
        }
        .container a {
            text-align: center;
            color: #fff;
            text-decoration: none;
            font-weight: 400;
            float: right;
            margin: 1%;
            font-weight: 900;
            padding: 1%;
        }
        .container a:hover {
color: #474A4B;
background-color: #fff;
padding: 2%;
        }
        
        
       
        .container input[type="email"],
        .container input[type="password"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            border: #000 1px;
        }
        
        .container button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .container button:hover {
            background-color: #0056b3;
        }
    </style>
</html>