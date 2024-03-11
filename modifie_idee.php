<?php include('base_donnee.php') ?>
<?php require('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1 class="titre">Modifier </h1>
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
               <input  class="ajout" type='hidden' name='id' value="<?= $result[0]["id"];?>"  class="form-control">

                    <label for="tire">titre</label>
                    <input  class="ajout" type='text' name='titre' value="<?= $result[0]["titre"];?>"  class="form-control">
           
                    <label for="description">description</label>
                    <textarea  class="ajout" type="text" name="descript"  value=""   id="10" cols="50" rows="20"><?= $result [0]["descript"];?></textarea>
        
                        <button  class="ajout_b" type="submit" name="save_modifie">Modifier</button>
                      
               </form>
    </div>
</body>
<style>
    .titre{
        align-items: center;
        text-align: center;

    }
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
</style>
</html>