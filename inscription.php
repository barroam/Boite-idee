

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
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
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .container h2 {
            text-align: center;
        }
        
        .container input[type="text"],
        .container input[type="email"],
        .container input[type="password"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
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
</head>
<body>
    <div class="container">
        <h2>Inscription</h2>
        <form action="index.php" method="post">
            <input type="text" name="nom_complet" placeholder="Nom complet" required><br>
            <input type="email" name="email" placeholder="Adresse email" required><br>
            <input type="password" name="mot_de_passe" placeholder="Mot de passe" required><br>
            <input type="text" name="profession" placeholder="Votre profession"><br>
            <input type="text" name="fonction" placeholder="Votre fonction"><br>
            <input type="text" name="telephone" placeholder="Numéro de téléphone"><br>
            <button type="submit">S'inscrire</button>
        </form>
    </div>
</body>
</html>
