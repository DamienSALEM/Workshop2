<?php
session_start();
require_once("con_base.php");
if (isset($_COOKIE['concookie']) && ($_SESSION['id']!==0)){
    header('Location: Espacead.php');
}

if (count($_POST)>0){

    $sql=" select ID, Nom, Prenom, Password from connexion where Nom='" .  htmlspecialchars($_POST["nom"]) . "' and Prenom='" .  htmlspecialchars($_POST["prenom"]) . "' and Password='" .($_POST["mdp"]) . "'";
    //$result=$PDO->query($sql);
    //$result=null;
    //$PDO=null;
    // voir bind value, prepare and execute.
    $result= mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $reponse=$row[0];
    if ($reponse!==NULL){
        $_SESSION['id']=$row['ID'];
        $_SESSION['prenom']=$row['Prenom'];
        $_SESSION['nom']=$row['Nom'];
        setcookie("concookie",$row['ID'],time()+3600);
        header('Location: Espacead.php');
    }
    else{
        echo "Erreur de connexion";
    }
}

?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
<div id="bloc_page">
    <?php
    require_once('nav.php')
    ?>
    <form id="form" method="POST" action="">
        <p>Nom: <input type="text" name="nom"> Prenom: <input type="text" name="prenom"></p>
        <p>Password: <input id="mdp" type="password" name="mdp"></p>
        <input type="button" value="envoie" onclick='subplus()'>
        
    </form>
    <div><a href="inscription.php">Cliquez ici pour s'inscrire</a></div>
</div>

</body>
<script src="sha256.js">//import la fonction sha256 pour le hachage de mot de passe sans que le mdp passe par internet</script>
<script>
    function subplus(){
        var mdp= document.getElementById("mdp").value
        mdp=sha256(mdp)
        document.getElementById("mdp").value=mdp
        document.getElementById("form").submit()
    }
</script>
</html>