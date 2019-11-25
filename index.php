<html>

<head>
<title>Accueil</title>
<link href="sources/livreor.css" rel="stylesheet">
</head>


<body class="accueil">

<header>
    <ul> 
	
<?php
session_start();
if(!empty($_POST['deco']))
{
	unset($_SESSION['login']);
	unset($_SESSION['password']);
	unset($_SESSION['profil']);
}




if((isset($_SESSION['login']))&&(isset($_SESSION['password'])))
{
?>
<li><a href="sources/profil.php">Modifier Profil </a></li>
<li><a href="sources/commentaire.php">Commentaires</a></li>
<li><a href="sources/livre-or.php">Livre d'Or</a></li>

<?php

}       
?>			
		
<?php
if((isset($_SESSION['login']))&&(isset($_SESSION['password'])))
{
?>
<div class="bouton">
<form class="déconnexion" method="post" action="index.php">
<input type="submit" name="deco" value="Déconnexion">
</form>
</div>
<?php
}

else
{
?>
	<li><a href="sources/connexion.php">Se connecter</a></li>	
	<li><a href="sources/inscription.php">S'inscrire</a></li>
	<li><a href="sources/commentaire.php">Commentaires</a></li>
	<li><a href="sources/livre-or.php">Livre d'Or</a></li>
	
	</ul>
<?php	
}	

?>

</header>

<?php
if(isset($_SESSION['delete']))
{	
?>
<div class="commentairedelete">
<?php
	echo "Commentaire bien supprimé !";	
?>
</div>
<?php
	unset($_SESSION['delete']);	
	header('Refresh: 2;URL=index.php');	
}
?>

<div class="logoaccueil">
<img src="img/logo.png" width="15%">

<div class="textpresentation">
<p>ARMA III est un jeu de tir tactique sorti en 2013. Il est la suite de la simulation d'infanterie ARMA II.</p>
<p>Le jeu se déroule sur deux îles, la principale étant Altis, la seconde Stratis.</p>
<p>Les îles sont fortement inspirées de deux îles grecques du nom de Lemnos et Agios Efstràtios,</p>
<p>bien que leurs superficies soient légèrement plus faibles que les îles originales</p>
</div>


</div>


<div class="remerciementcommentaire">

</div>

<article class="presentationdurp">

<img src="img/armarp.jpg" width="40%">

<div class="textrp">
<h1>Le Roleplay</h1>
<p>Des serveurs Roleplay !</p>
<p>Arma 3 n'est pas seulement un jeu de tir, il propose également des serveurs de type "Roleplay"</p>
<p>Ces serveurs sont créers par les joueurs eux-mêmes, vous pouvez créer votre propre personnage, et vivre votre vie.</p>
<p>Libre à vous de faire ce que vous voulez, créer une entreprise, rejoignez la police, les pompiers où travaillez à votre compte.</p>
<p>Interagissez avec les autres joueurs afin de poussez le roleplay encore plus loin.</p>
<p>Acheter des voitures, des maisons et pleins d'autres choses !</p>
</div>



</article>


<article class="presentationdurp2">

<div class="textrp2">
<h1>De nombreux serveurs de qualités !</h1>
<p>Plusieurs serveurs vous sont proposés afin d'écrire votre histoire.</p>
<p>Un serveur Français <a href="https://arma3lifefrance.fr/"><strong>"Arma 3 LifeFrance"</strong></a> vous proposera le meilleur des RP</p>
<p>La vie se passe à "Belle-Île-en-Mer"</p>
<p>De nombreux choix de jeu seront à votre disposition</p>
<p>ainsi que de nombreuses rencontres </p>
<p>A vous de jouer !</p>
</div>

<img src="img/photoserveurrp.jpg" width="50%">


</article>


<article class="serveursimages">

<h1>Photos du serveur !</h1>

<div class="photos">
<img src="img/photo1.jpg" width="32%">
<img src="img/photo2.jpg" width="32%">
<img src="img/photo3.jpg" width="32%">
</div>

</article>

<footer>


<p class="page">
Arma III &emsp;&emsp;&emsp;&emsp;
2019 © Adrien.G Tous droits réservés.  
</p>
</footer>




</body>


</html>