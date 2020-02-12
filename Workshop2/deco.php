<?php
  // Suppression du cookie designPrefere
  setcookie('concookie');
  // Suppression de la valeur du tableau $_COOKIE
  unset($_COOKIE['concookie']);
  unset($_SESSION['id']);
  unset( $_SESSION['prenom']);
  unset($_SESSION['nom']);
  header('location: connexion.php');
?>
