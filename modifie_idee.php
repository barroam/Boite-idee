<?php include('base_donnee.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>Modifier données dans la base de données</h3>
<a href="index.php" class="btn_retour end">Retour</a>
<div class="container">

<?php 
if (isset($_GET['id'])) 
{
    $id_user = $_GET['id'];

 $query = "SELECT * FROM Idee WHERE id=:id_user LIMIT 1";
 $query_run = $connexion->prepare($query);
 $data = [':id_user' => $id_user ];

  $query_run->execute($data);

$result = $query_run->fetchAll(PDO::FETCH_ASSOC);//executer la raquette par association



}
?>
               <form action="base_donnee.php" method="POST">
               <input type='hidden' name='id' value="<?= $result[0]["id"];?>"  class="form-control">

                    <div class="ajout">
                    <label for="tire">titre</label>
                    <input type='text' name='titre' value="<?= $result[0]["titre"];?>"  class="form-control">
                    </div>
                    <div class="ajout">
                    <label for="description">description</label>
                    <textarea type="text" name="descript"  value=""   id="10" cols="50" rows="20"><?= $result [0]["descript"];?></textarea>
                    </div>
                    <div class="ajout">
                    
                    </div>
                    <!-- <div class="ajout">
                    <label for="date_envoi">date d'envoi</label>
                    <input type="DateTime-local" name="date_envoi" >
                    </div> -->
                    <div class="ajout">
                        <button type="submit" name="save_modifie">S'inscrire</button>
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