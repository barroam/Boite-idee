<?php require('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 class="titre">Ajouter </h1>
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
                    <button class="ajout_b" type="submit" name="save_ajout">S'inscrire</button>
               </form>
    </div>
</body>
<style>
    .titre{
        text-align: center;
    }
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
            margin: 4% auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            color: #fff;
            background-color: black;
    }
    .ajout{
        width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
    }
    .ajout_b{
        width: 98%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;    
    }
    .ajout_b:hover{
        background-color: #E6E6E6;
    }

    .titre_label{
        color: white;
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
        list-style: none;
        text-decoration: none;
        width: auto;
       padding: 1rem;
       margin:  2% ;
        border-radius: 5% ;
        cursor: pointer;
        color: #fff;
        background-color: #000;
        text-align: center;
        float: right;
        margin-right: 5%;
    }
    
   
</style>
</html>
<?php require('footer.php'); ?>