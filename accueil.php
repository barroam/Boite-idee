<?php require('header.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boite à idée</title>
</head>
<body>
<body>
<div class="cont_message">
        <h1>Bienvenue dans notre Boîte à idées !</h1>
       
        <p>Nous sommes ravis de vous accueillir dans notre communauté <br>
            dédiée à l'innovation et à l'échange d'idées. Chez nous, <br>
            chaque voix compte, chaque idée est précieuse et chaque 
            contribution est valorisée.</p>
</div>
   <div class="container_idee">
    <section class="box_idee texte_idee">
        <h1>Le Pourquoi</h1>
    <p>Une boîte à idées est un outil inclusif et
         collaboratif qui encourage la participation de tous les membres
          de l'organisation. Elle facilite la communication et
          la centralisation des idées, favorisant ainsi l'innovation. <br>
          En offrant un espace pour partager librement des idées, 
          elle stimule la créativité et crée une culture de l'apprentissage 
          continu. Grâce à une gestion efficace des idées, elle permet à 
          l'organisation de capitaliser sur le potentiel intellectuel de 
          ses membres et de 
        rester compétitive dans un environnement en constante évolution.</p>
    </section >
    <section class="box_idee">
<img src="img/téléchargement (1).png" alt="">
    </section>
   </div>



    <main>
        <section class="box glass" id="ai">
            <h2>Inclusivité et diversité </h2>
            <p>Une boîte à idées est un forum ouvert à tous, indépendamment du niveau d'expérience,
                 du titre professionnel ou du domaine d'expertise. Elle encourage la participation 
                 de personnes provenant de différents horizons, favorisant ainsi la diversité des 
                 perspectives. Cette diversité est essentielle pour stimuler la créativité et générer des idées novatrices.</p>
        </section>
        <section class="box glass" id="iot">
            <h2>Facilitation de la communication</h2>
            <p>Une boîte à idées facilite la communication entre les membres de l'organisation en fournissant un canal dédié pour échanger des idées. Elle encourage les discussions constructives et permet aux participants de clarifier leurs idées, de poser des questions et de recevoir des commentaires
                , ce qui peut conduire à des solutions plus robustes et innovantes.</p>
        </section>
        <section class="box glass" id="vr">
            <h2>Encouragement de la participation</h2>
            <p>L'objectif principal d'une boîte à idées est de promouvoir la participation active de chacun. Elle crée un environnement où les individus se sentent encouragés et en sécurité pour partager leurs idées, même les plus audacieuses ou les plus expérimentales. Cela favorise un climat de confiance et de collaboration au sein de l'organisation</p>
        </section>
        <section class="box glass" id="robotics">
            <h2>Centralisation et organisation des idées</h2>
            <p>Découvrez les dernières avancées en matière de robotique et comment les robots peuvent améliorer notre quotidien.</p>
        </section>
        <section class="box glass" id="robotics">
            <h2>Stimulation de l'innovation </h2>
            <p>Elle offre un moyen efficace de centraliser et d'organiser les idées. Les contributions sont enregistrées de manière systématique et peuvent être triées, catégorisées et évaluées en fonction de leur pertinence et de leur faisabilité. Cela permet de préserver les idées pour une utilisation future et de garantir qu'aucune suggestion ne soit perdue ou oubliée.

</p>
        </section>
        <section class="box glass" id="robotics">
            <h2>Culture de l'apprentissage continu</h2>
            <p>Une boîte à idées favorise une culture de l'apprentissage continu en encourageant les individus à partager leurs connaissances, leurs expériences et leurs idées. Elle reconnaît que l'innovation est un processus itératif qui nécessite une réflexion constante et une volonté d'apprendre et de s'améliorer en permanence.</p>
        </section>
    </main>
  

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
 
  color: #fff;
  }

  .cont_message {
    background-color:#072247;
    color: white;
    text-align: center;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin: 0 auto;
    color: #333;
    width: 40%;
    align-items: center;
   display: block;
   align-items: center;
   margin-top: 3rem;

}
.cont_message:hover{

    background-color: #333;
    color: #fff;
}

.cont_message p {
    
    font-size: 18px;
}

.container_idee{
    display: grid;
    grid-template-columns: repeat(2,1fr);
    gap: 5%;
    padding: 3%;
    margin: 0 auto;
}
.texte_idee{
    font-size: 1.3rem;
    padding: 5%;
 
    border-radius: 8px;
  
    margin: 0 auto;
    color: black;
    align-items: center;
    width: 70%;
}
.texte_idee:hover{
    background-color: gray;
    color: #fff;
}
main {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 20px;
}

.box {
    background-color: #000;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin: 1.8rem;
    padding: 1.3rem;
    width: 17rem;
    color: #72520B;
}


.box h2 {
    color: #fff;
    font-size: 24px;
}

.box p {
    color: #fff;
    font-size: 16px;

}



/* background-color: #D1F5E9;*/
</style>
</html>
<?php require('footer.php'); ?>