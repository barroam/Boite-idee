<?php session_start() ?>


<?php
$serveur = "localhost" ;
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "Boite_idee";


try {
    //creation d'une connexion
    $connexion = new PDO("mysql:host=$serveur;dbname=$base_de_donnees",$utilisateur,$mot_de_passe);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Configuration pour gérer la connexion en cas d'erreur SQL
} catch (PDOException $e) {
    die("Erreur de connexion:".$e->getMessage());
}




if (isset($_POST['save_inscription'])) {
    //
    function validate($verifie){
        $verifie = trim($verifie);
        $verifie = stripcslashes($verifie);
        $verifie = htmlspecialchars($verifie);
        return $verifie;}
    
    //Récuperer le donner d'inscription
  
   $nom_complet  = validate($_POST['nom_complet']);
   $email        = validate($_POST['email']);
   $mot_de_passe = validate(password_hash($_POST['mot_de_passe'],PASSWORD_DEFAULT));    
   $profession   = validate($_POST['profession']);  
   $fonction     = validate($_POST['fonction']);
   $telephone    = validate($_POST['telephone']); 


   if (empty($nom_complet)) {
    header("Location:inscription.php?error= votre nom complet est incorrect ");
    exit();
}elseif (empty($mot_de_passe)) {
    header("Location:inscription?error= Votre motde passe est incorrect");
    exit();
}
elseif (empty($email)) {
    header("Location:inscription?error= Votre email est incorrect");
    exit();}
//insertion des donnéees de Users dans la base de données
//la requette 
$query = "INSERT INTO Users (nom_complet,email,mot_de_passe,profession,fonction,telephone) VALUES ( :nom_complet, :email, :mot_de_passe, :profession, :fonction, :telephone)";
// execution de la requette
$query_run = $connexion->prepare($query);
//les données a recevoir dans la base de donnée
$data = [
  
        ':nom_complet'  => $nom_complet,
        ':email'=> $email,
        ':mot_de_passe' => $mot_de_passe,
        ':profession' => $profession,
        ':fonction' => $fonction,
        ':telephone' => $telephone,

];
$query_execute = $query_run->execute($data);

if ($query_execute) {
    $_SESSION['message'] = "Inscription reussi";
    header('Location:index.php');
    exit(0);
} else {
    $_SESSION['message'] = "Inscription incorrect";
    header('Location:inscription.php');
    exit(0);
}
}

//Récuperer les données ajouter de l'idée 


if (isset($_POST['save_ajout'])) {
    //
    
    function validate($verifie){
        $verifie = trim($verifie);
        $verifie = stripcslashes($verifie);
        $verifie = htmlspecialchars($verifie);
        return $verifie;}
    
    //Récuperer le donner d'inscription
  
   $titre  = validate($_POST['titre']);
   $descript = validate($_POST['descript']);
   $categorie = validate($_POST['categorie']);
   $date_envoi = validate($_POST['date_envoi']);
   
//    var_dump($titre,$descript,$categorie,$date_envoi);
//    die('ajout idee');

   $query = "INSERT INTO Idee (titre,descript,categorie,id_user,date_envoi) VALUES ( :titre, :descript, :categorie, :id_user, :date_envoi)";
  $query_run = $connexion->prepare($query);

  $data = [
  ':titre'=> $titre, 
  ':descript' => $descript, 
  ':categorie' => $categorie,
  ':date_envoi' => $date_envoi,
  ':id_user' => 1
  
  ];

$query_execute = $query_run->execute($data);


if ($query_execute) {
    $_SESSION['message'] = "Inscription reussi";
    header('Location:index.php');
    exit(0);
} else {
    $_SESSION['message'] = "Inscription incorrect";
    header('Location:index.php');
    exit(0);
}
    }



//la modification des données de l'idée

  if (isset($_POST['save_modifie'])) {
    // extract($_POST);
    // Valider et nettoyer les données
    $id = intval($_POST['id']);
    $titre = htmlspecialchars($_POST['titre']);
    $descript = htmlspecialchars($_POST['descript']);
    // $id_utilisateur = intval($_POST['id_utilisateur']);
    // $id_categorie = intval($_POST['id_categorie']);

    // Mise à jour avec une requête préparée
    $query = "UPDATE Idee SET titre = ?, descript = ? WHERE id = ?";
    $stmt = $connexion->prepare($query);

    // Exécution de la requête avec gestion des erreurs
    if ($stmt->execute([$titre, $descript, $id])) {
        // Redirection en cas de succès
        $_SESSION['message'] = "Modification reussi";
        header('Location: index.php');
        exit();
    } else {
        // Gestion de l'erreur en cas d'échec
        echo "Erreur lors de la mise à jour de l'idée.";
    }
}
?>

<?php
//   $id = validate($_POST['id']);
//    $titre  = validate($_POST['titre']);
//    $descript = validate($_POST['descript']);
//    $date_envoi = validate($_POST['date_envoi']);
//     try {
        
//         $query = "UPDATE Idee SET titre=:titre,descript=:descript,date_envoi=:date_envoi WHERE id=:id LIMIT 1";
//         $query_run =$connexion->prepare($query);

//         $data= [
//             ':titre' => $titre ,
//             ':descript' => $descript,
//             ':date_envoi' => $date_envoi,
//             ':id' => $id   
//         ];
       
//         $query_execute = $query_run->execute($data);
//         var_dump($query_execute);
//         die();
//         if ($query_execute) {
//             $_SESSION['message'] = "Modification reussi";
//             header('Location:index.php');
//             exit(0);
//         } else {
//             $_SESSION['message'] = "Modification incorrect";
//             header('Location:index.php');
//             exit(0);
//         }

//     } catch (PDOException $e) {
//         echo $e->getMessage();
//     }
//   

  /**/


  // la partie suppression 
  if (isset($_POST['supprimer_idee'])) {
    $id_user_delete = $_POST['supprimer_idee'];
    $id_user = $_POST['id'];
    try {
       $query="DELETE FROM Idee WHERE id=:id_user";
       $query_run = $connexion->prepare($query);
       $data = [':id_user' =>$id_user_delete ];
       $query_run->execute($data);

       if ($query_run) {
        $_SESSION['message'] = "Suppression reussi reussi";
        header('Location:index.php');
        exit(0);
    } else {
        $_SESSION['message'] = "Suppression incorrect";
        header('Location:index.php');
        exit(0);
    }

    } catch (PDOException $e) {
        echo $e->getMessage() ;
    }
  }
?>



