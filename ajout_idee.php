<?php require('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h class="text_header">insert des données dans la base de données</h3>
<a href="index.php" class="btn_retour end">Retour</a>
<div class="container">
               <form action="base_donnee.php" method="POST">
                    <label class="titre_label" for="tire">titre</label>
                    <input class="ajout" type='text' name='titre' >
                    <label for="description">description</label>
                    <textarea  class="ajout"type="text" name="descript" id="10" cols="50" rows="15"></textarea>
                    <label for="categorie">categorie</label>
                    <input class="ajout" type='text' name="categorie" >
                    <label for="date_envoi">date d'envoi</label>
                    <input class="ajout" type="DateTime-local" name="date_envoi" >
                    <button class="ajout" type="submit" name="save_ajout">S'inscrire</button>
               </form>
    </div>
</body>
<style>
      body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
    .container{
        display: flex;
        justify-content: center;
        text-align: center;
        max-width: 50%;
            margin: 100px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            color: #fff;
    }
    .ajout{
        width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
    }
    .titre_label{
        color: black;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1.5rem;
        text-align: center;
        font-weight: 900;
    }
    .mb-3{
        display:flex ;
        flex-direction: column;
        column-gap: 2%;
        margin: 2%;
    }

    .btn_retour{
        display: flex;
       justify-content: center;
       align-items: flex-end;
        text-decoration: none;
       padding: 1rem;
       margin: 2%;
        background-color: red;
        border-radius: 5% ;
        width: 4%; 
       
    }
   
</style>
</html>