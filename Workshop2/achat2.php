<?php
session_start();
require_once("con_base.php");
if (($_SESSION['id']) > 0) {

    $sql = " select * from produit where Nom='maillot2'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
} else {
    header('Location: connexion.php');
}

?>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style2.css" />
    <title>Paged'accueil</title>
</head>
<style>

</style>

<body>
    <div id="bloc_page">
        <header>
            <div id="titre_principal">
                <div id="logo">
                    <img src="images/logo.png" alt="logo de l'entreprise" />
                    <h1>Footshop</h1>
                </div>
                <h2>Boutique</h2>
            </div>

            <nav>
                <ul>
                    <li><a href="paged'accueil.php">Accueil</a></li>
                    <li><a href="Boutique.php">Boutique</a></li>
                    <li><a href="Espaceadhérent.php">Espace adhérent</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                    <li><a href="Statistiques.php">L'Equipe</a></li>


                </ul>
            </nav>
        </header>
    </div>
    <section>
        <div class="box">

            <div id="selection">
                <form action="panierd.php" method="POST">

                    <div class="element"><img src="images/Maillot2.jpg" " border=1 >
                    <strong style="color: red; font-size: 60px">Prix: <?php echo $row['Prix'] ?> Euros</strong>
                    <p style="font-size: 25px; color:blue">T-Shirt de l'équipe de France</p>
                    <p>Quantité: <input type="number" name="quantite"></p><br>
                    </div>
                    <input id="ID" name="ID" type="hidden" value="<?php echo $row['ID']?>">
                    <input type="submit" value="Acheter">
                </form>
            </div>


        </div>


    </section>

</body>

</html>