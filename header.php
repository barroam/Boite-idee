<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boite à idée</title>
</head>
<body>
<body>
<nav>
  <div class="logo_titre_navbar"> <img class="logo" src="img/6b2d58e4-8dd5-43cd-8a02-6eb38f24e74b.png" alt="">
  <h1 class="titre_navbar">Innovation Tech Solution</h1></div>
  
  <ul>
  <li><a href="index.php"></a> </li>
    <li><a href="index.php"></a> </li>
  </ul>
</nav>

<header>
        <h1>Boîtes à idées innovantes</h1>
        <p>Découvrez des idées créatives dans divers domaines technologiques.</p>
    </header>
    <main>
        <section class="box" id="ai">
            <h2>Intelligence Artificielle</h2>
            <p>Explorez les possibilités infinies de l'intelligence artificielle et ses applications dans divers secteurs.</p>
        </section>
        <section class="box" id="iot">
            <h2>Internet des Objets (IoT)</h2>
            <p>Découvrez comment les objets connectés transforment notre façon de vivre, de travailler et d'interagir avec le monde qui nous entoure.</p>
        </section>
        <section class="box" id="vr">
            <h2>Réalité Virtuelle et Augmentée</h2>
            <p>Plongez dans des mondes virtuels et explorez les possibilités immersives de la réalité virtuelle et augmentée.</p>
        </section>
        <section class="box" id="robotics">
            <h2>Robotique</h2>
            <p>Découvrez les dernières avancées en matière de robotique et comment les robots peuvent améliorer notre quotidien.</p>
        </section>
        <section class="box" id="robotics">
            <h2>Robotique</h2>
            <p>Découvrez les dernières avancées en matière de robotique et comment les robots peuvent améliorer notre quotidien.</p>
        </section>
        <section class="box" id="robotics">
            <h2>Robotique</h2>
            <p>Découvrez les dernières avancées en matière de robotique et comment les robots peuvent améliorer notre quotidien.</p>
        </section>
    </main>
    <footer>
        <p>Contactez-nous pour partager vos idées innovantes : contact@example.com</p>
    </footer>

 <!-- 
  <header>
    <nav>
    <ul>
      <li><a href="accueil.php">Accueil</a></li>
      <li><a href="index.php">Boite à Idées</a></li>
      <li><a href="apropos.php">A propos</a></li>
    </ul>
   </nav>
   

</header>
le navbarr -->
 

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
background-color: wheat;
}
.logo_titre_navbar{
  display: flex;
  gap: 5%;
}
.logo{
    width: 3rem;
    height: auto;
    margin: 1%;
  }
  header {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px;
}

header p {
    font-size: 18px;
}

main {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 20px;
}

.box {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin: 20px;
    padding: 20px;
    width: 300px;
}

.box h2 {
    color: #333;
    font-size: 24px;
}

.box p {
    color: #666;
    font-size: 16px;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px;
}


/* background-color: #D1F5E9;*/
</style>
</html>