<!DOCTYPE html>
<html lang="fr">
<head>




    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <header class="cont_header">
  <nav>
  <div class="logo_titre_navbar"> <img class="logo" src="img/6b2d58e4-8dd5-43cd-8a02-6eb38f24e74b.png" alt="">
  <h1 class="titre_navbar">Innovation Tech Solution</h1></div>
  
  <ul>
  <li><a class="nav-page" href="accueil.php">Accueil</a> </li>
    <li><a  class="nav-page"  href="index.php"> Boite d'idée</a></li>
    <li><a  class="nav-page"  href="index.php"> Apropos</a></li>
  </ul>

</nav>

  </header>


</body>
<style>
body{
    margin: 00;
    padding: 00;
    box-sizing: border-box;
   background-color:#072247 ; 
}

nav{
display: grid;
grid-template-columns: repeat(3,1fr);
background-color: #EFCA33;
margin: 4%;

}
.logo_titre_navbar{
  display: flex;
  gap: 10%;
  margin-left: 15%;
}
.logo{
    width: 3rem;
    height: auto;
    margin: 1%;
  }
  .titre_navbar{
    color: #000;

  }
  .nav-page{
    font-size:1.5rem;
  }
  nav ul{
display: flex;
justify-content: space-around;

list-style: none;
gap: 10%;
  }
  nav ul a{
    text-decoration: none;
    color: #000;
    font-weight: 600;
   
  }
  .titre_navbar:hover{
color: #09136D;
  }
  .nav-page:hover{
color: #09136D;
  }
</style>
</html>