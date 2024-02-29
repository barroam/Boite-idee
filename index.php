<?php include('base_donnee.php')?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if (isset($_SESSION['message'])) : ?>
                    <h5><?= $_SESSION['message']; ?></h5>
                <?php 
            unset($_SESSION['message']);
            endif; ?>


</body>
</html>