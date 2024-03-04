<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
<div class="item"><img class="size" src="img/téléchargement.png" alt=""></div>
<div class="item"><img class="size " src="img/téléchargement (1).png" alt=""></div>
<div class="item"> <img src="img/téléchargement2.png" alt=""></div>
<div class="item"> <img src="img/téléchargement3.png" alt=""></div>
<div class="item2"></div>
<div class="item"> <img src="img/téléchargement4.png" alt=""></div>
<div class="item"> <img src="img/téléchargement7.png" alt=""></div>
<div class="item"> <img src="img/téléchargement8.png" alt=""></div>
<div class="item"> <img src="img/téléchargement9.png" alt=""></div>

    </div>
</body>
<style>
    .container{
        display: grid;
        grid-template-columns: repeat(3,1fr);
        grid-template-rows: repeat(3,1fr);
    }
  .item{
    height: 5rem;
    width: auto;
  }


</style>
</html>