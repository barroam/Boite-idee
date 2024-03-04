
<?php session_start();
 include('base_donnee.php')?>
 <?php require('header.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 

<div class="ajout"><a href="ajout_idee.php" class="btn_ajout_idee ">Ajouter des idées</a> </div>
<!--Voici le Bouton qui te permettre d'ajouter-->
   <!--affiche le message si l'inscription est reussi ou pas  -->
   <?php if (isset($_SESSION['message'])) : ?>
                    <h1><?= $_SESSION['message']; ?></h1>
                <?php 
            unset($_SESSION['message']);
            endif; ?>
<div class="cont">
<?php 
$query = "SELECT * FROM Idee ";
$query_run = $connexion->prepare($query);
$query_run->execute();
$result = $query_run->fetchAll(PDO::FETCH_ASSOC);
//var_dump($result);
if($result)
{
    foreach ($result as $row) {
        ?>
        
        <div class="block">
        <h3 class="idee"> Idee N°<?= $row['id'] ;?></h3>      
    <h2 class="titre">Titre: <?= $row['titre'] ;?></h2>
    <h3 class="categorie">Catégorie:<?= $row['categorie'] ;?></h3>
    <p class="description"><?= $row['descript'] ;?></p>
    <h4 class="date_envoi"><?= $row['date_envoi'] ;?></h4>
    <div class="modifie_supprimer">
    <div><a href="modifie_idee.php?id=<?= $row['id'] ;?>" class="btn_modifier_idee ">Modifier </a> </div>
    <form action="base_donnee.php" method="POST">
    <button type="submit" name="supprimer_idee" value="<?= $row['id'] ;?>" class="btn_supprimer_idee" >Supprimer </button>
    </form>
    </div>
</div>


        <?php
    }
}
else {
  ?>

<div class="cont">
    <h2 class="titre">ERREUR</h2>
    <h3 class="categorie">ERREUR</h3>
    <p class="description">ERREURp>
    <h4 class="date_envoi">ERREUR</h4>
</div>

<?php
}





?> 
</div>



















</body>
<style>
    .ajout{
        display: flex;
        justify-content: flex-end;
    }
    .btn_ajout_idee{
        list-style: none;
        text-decoration: none;
        width: auto;
       padding: 1rem;
       margin:  1% ;
        background-color: blue;
        border-radius: 5% ;
        cursor: pointer;
    }
    .modifie_supprimer{
        display: flex;
        justify-content:flex-end ;
        gap: 2%;
        margin: 3%;
align-items: flex-end;

    }
    .btn_modifier_idee{
        list-style: none;
        text-decoration: none;
        width: auto;
       padding: 1rem;
       margin:  1% ;
        background-color: blue;
        border-radius: 2% ;
        cursor: pointer;
    }
.btn_supprimer_idee{
    list-style: none;
        text-decoration: none;
        width: auto;
       padding: 1rem;
       margin:  1% ;
        background-color: blue;
        border-radius: 2% ;
        cursor: pointer;
       
}
    .cont{
        display: flex;
        flex-wrap: wrap;
      
        
    }
    .block{
        margin: 1%;
        padding: 1%;
    align-items: center;
        width: 25%;
        min-height:17em; ;
        background-color:#8080ff ;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

    }
  
</style>
</html>