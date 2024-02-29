<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<h3>insert des données dans la base de données</h3>
<a href="base_donnee.php" class="btn_retour end">Retour</a>
<div class="container">

               <form action="base_donnee.php" method="POST">
                    <div class="mb-3">
                    <label for="tire">titre</label>
                    <input type='text' name='titre' class="form-control">
                    </div>
                    <div class="mb-3">
                    <label for="description">description</label>
                <textarea type="text" name="descript" id="10" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                    <label for="categorie">categorie</label>
                    <input type='text' name="categorie" class="form-control">
                    </div>
                    <div class="mb-3">
                    <label for="date_envoi">date d'envoi</label>
                    <input type="DateTime-local" name="date_envoi" >
                    </div>
                    
                        <div class="mb-3">
                        <button type="submit" name="save_ajout">S'inscrire</button>
                        </div>
               </form>
    </div>
</body>
<style>
    .container{
        display: flex;
        justify-content: center;
        text-align: center;
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