<?php include('base_donnee.php')?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--affiche le message si l'inscription est reussi ou pas  -->
<?php if (isset($_SESSION['message'])) : ?>
                    <h5><?= $_SESSION['message']; ?></h5>
                <?php 
            unset($_SESSION['message']);
            endif; ?>

<!--Voici le Bouton qui te permettre d'ajouter-->
<a href="ajout_idee.php" class="btn_ajout_idee ">Add Student</a>
</body>
<style>
    .btn{
        list-style: none;
        text-decoration: none;
        width: auto;
       padding: 1rem;
       margin: 2%;
        background-color: blue;
        border-radius: 5% ;
        cursor: pointer;
       
    }
</style>
</html>