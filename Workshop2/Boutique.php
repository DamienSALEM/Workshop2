<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.2.css" />
    <title>Paged'accueil</title>
</head>
<style>
	
	#feed{
		width: 100%;
		margin-left: 150px;
        margin-right:50px;
       

	}
	.h1{
		font-family: Helvetica;
		color : black;
		text-align: center;	
	}
    .view 
	{
        position: relative;
        width: 270px;
        height: 270px;            
		border: 1px solid rgb(0, 0, 0);
            /*La propriété CSS overflow est une propriété raccourcie qui définit comment gérer le dépassement du contenu d'un élément dans son bloc. 
            Elle définit les valeurs des propriétés overflow-x et overflow-y.*/
        overflow: hidden;
            /*Pour caché l'élément ".mask" qui contient la description de l'article */
        float: left;
        margin: 70px;
    }
    .view img 
	{
        width: 300px;
        height: 300px;
    }
	.mask 
	{
        position: absolute;
        left: 0;
        top: 300px;            /*Pour positionner l'élément ".mask" au dessous de l'article */
        background: rgba(0, 0, 0, 0.8);
        color: white;
        text-align: center;            width: 270px;
        height: 300px;
        /* transition sur la propriété top qui change de 200px à 0 pendant le hover  */
        transition: top 0.40s linear;        
	}

    .mask a {
        text-decoration: none;            color: white;
        font-size: 1.5em;
        font-family: Helvetica, sans-serif;
        background: #000;            padding: 5px 10px 5px 10px;
        border-radius: 5px;
        

    }
	/* changement de la position du ".mask" pendant le survol sur .view */
	.view:hover>.mask 
	{
        top: 0;
    }

</style>
<body style="background-color:powderblue;">
    <header>

        <div id="logo">
            <img src="images/logo.png" alt="logo de l'entreprise" />
            <h1>FootPassion</h1>
        </div>



        <nav>
            <ul>
                <li><a href="paged'accueil.php">Accueil</a></li>
                <li><a href="Boutique.php">Boutique</a></li>
                <li><a href="Espaceadhérent.php">Espace adhérent</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="Statistiques.php">L'équipe</a></li>
            </ul>
        </nav>
    </header>
    </div>
    <br> <br> <br> <br> <br>
    <section>
			   <div id ="feed">
			<article class="view">
				<img src="images/maillot1.jpg" alt="" />
				<div class="mask">
                <br> <br> <br> <br>
					<h2>Maillot blanc</h2>
                    <h1>30€</h1>
                  
					<a href="achat1.php"> ACHETER </a>
				</div>
			</article>
			<article class="view">
				<img src="images\short.jpg" alt="" />
				<div class="mask">
                <br> <br> <br> <br>
					<h2>short homme </h2>
                    <h1>30€</h1>

					<a href="achat2.php"> ACHETER </a>
				</div>
			</article>
			<article class="view">
				<img src="images\shortfemme.jpg" alt="" />
				<div class="mask">
                <br> <br> <br> <br>
					<h2>short femme</h2>
                    <h1>30€</h1>
                  
					<a href="achat3.php"> ACHETER </a>
				</div>
			</article>
			<article class="view">
				<img src="images\maillot2.jpg" alt="" />
				<div class="mask">
                <br> <br> <br> <br>
					<h2>Maillot des bleus</h2>
					<h1>30€</h1>
					<a href="achat4.php"> ACHETER</a>
				</div>
			</article>
	</div>
		</section>
	







</body>

</html>