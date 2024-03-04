<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
  <div class="logo_titre_navbar"> <img class="logo" src="img/6b2d58e4-8dd5-43cd-8a02-6eb38f24e74b.png" alt="">
  <h1 class="titre_navbar">Innovation Tech Solution</h1></div>
  
  <ul>
  <li><a class="nav-page" href="accueil.php">Accueil</a> </li>
    <li><a  class="nav-page"  href="index.php"> Boite d'idée</a></li>
    <li><a  class="nav-page"  href="index.php"> Apropos</a></li>
  </ul>

</nav>
</body>
<style>
body{
    margin: 00;
    padding: 00;
    box-sizing: border-box;
}
      nav{
display: grid;
grid-template-columns: repeat(2,1fr);
background-color:#3AC1DF;
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
    color: #fff;
  }
  .nav-page{
    font-size:1.5rem;
  }
  nav ul{
display: flex;
justify-content: space-around;
margin-right: 35%;
list-style: none;
gap: 20%;
  }
  nav ul a{
    text-decoration: none;
    color: #fff;
   
  }
  .titre_navbar:hover{
color: #09136D;
  }
  .nav-page:hover{
color: #09136D;
  }
</style>
</html>