<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boite à idée</title>
</head>
<body>
<body>

<header>
  <nav>
    <div class="page">
    <a href="accueil.php">Accueil</a>   <a href="index.php">Boite à Idées</a>
    </div>
      <div class="connexion">
      <a href="connexion.php">Connexion</a>
      <a href="inscription.php">Inscription</a>
      </div>
     
    
  </nav>
</header>




</body>
<style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
}

header {
  background-image: url(img/Design\ sans\ titre.png);
  background-repeat:  no-repeat;
  
  background-color: #007bff;
  padding: 10px 0;
  color:#fff;
}

nav{
    display: flex;
    justify-content: space-between;
    padding: 2%;
}
.page{
   display: flex;
   

}
 a{
    text-align: center;
    margin: 1%;
    list-style: none;
    text-decoration: none;
    color: #fff;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-weight: bold;
width: 100%;
}
.connexion{
    display: flex;
    flex-direction:column;
    align-items: end;
}
/* background-color: #D1F5E9;*/
</style>
</html>