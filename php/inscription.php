<?php
include ('../bdd/bdd.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>BEPS </title>
    <link rel="stylesheet" href="../css/connexion_inscription.css">
	  <link rel="stylesheet" href="../css/headerfooter.css">


  </head>

  <body style="background-color:E5E5E5;">
    <!-- Voici notre en‑tête principale utilisée dans toutes les pages
         de notre site web -->
      
         <header style="color: #698F7D;">
      <div id="cercle"> </div>    
      <a href="../index.php" ><img id="logo" name="logo" src="../img/logo2.png" alt="logo du site" /></a>
      <a href="Connexion.php" ><img id="personnel" name="personnel" src="../img/espacepersonnel.png" alt="Espace personnel" /></a>
     <!--  <ul id="horizontal2" style="list-style-type: none">
        <li><a href="Association.html"></a></li>
        <li><a href="#">Participer</a></li>|
        <li><a href="annonces.html">Annonces</a></li>
      </ul> -->
    <!-- menu horizontal --> 
    <nav>
      <ul id="horizontal" style="list-style-type: none">
        <li><a href="Association.php">Notre association</a></li>
        <li><a href="annonces.php">Annonces</a></li>
        <li><a href="forum.php">Forum</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>

     </nav>

  </header>

  <br><br><br>
<form action="resp_inscription.php" method="POST" id="form">
    <div id="principal1">
        <div class="middle">
            <h1>INSCRIPTION</h1>
            <div class="date">
                <input type="date" name="date" id="date">
                <label>Date de naissance</label>
            </div>
            <div class="login">
                <input type="text" name="nom" id="nom" size=40 required>
                <label id="label_nom">Nom</label>
            </div>
            <div class="login">
                <input type="text" name="prenom" id="prenom" size=40 required="">
                <label id="label_prenom">Prenom</label>
            </div>
            <div id="genre" class="genre">
                <label id="lab">Genre</label> <br/>
                <input type="radio" id="sexe_f" name="sexe" value="F" required>Femme
                <input type="radio" id="sexe_h" name="sexe" value="M" required>Homme
                <input type="radio" id="sexe_a" name="sexe" value="A" required>Autre
            </div>		
            <div class="login">
                <input type="text" name="adresse" id="adresse" size=40  required="">
                <label id="label_adresse">Adresse</label>
            </div>
            <div class="login">
                <input type="text" name="ville" id="ville"  size=40 required="">
                <label id="label_ville">Ville</label>
            </div>
                    
            <div class="CodePostal">
                <input type="number" name="code" id="code" pattern="[0-9]{5}"required size=30>
                <label id="label_code">Code postal</label>
            </div>
            <div class="login">
                <input type="text" name="login"  id="login" size=40  required="">
                <label id="label_login">Login</label>
            </div>
            <div class="password">
                <input type="password" name="mdp" id="mdp" size=40 required=""> 
                <label id="label_mdp">Mot de passe</label>
                <br>
                <input type="checkbox" id="affiche_mdp" onclick="affiche()">Afficher le mot de passe
            </div> 
            <div class="mail">
                <input type="text" size="40" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}" name="email" id="email" required>
                <label id="label_email">Mail</label>
            </div>
            <div class="boutton">
                <input type="button" value="Valider mon insciption" id="valider" name="valider" onclick="verif()" />          
                <input type="reset" value="Annuler" id="annuler" name="annuler" /> <br/>
            </div>
        <br/>
        </div>
    </div>
</form> <br><br><br>

<!-- Et voici notre pied de page utilisé sur toutes les pages du site -->
<footer>
  <div id="txt1footer">
    <p>BEPS : la plateforme d’entraide solidaire entre adhérents pour le bien être animal </p>
  </div>
  <div id="mention_legale" style="font-size: 1.1em; text-align : center;">
    <p>&copy; Copyright BEPS.fr All rights reserved </p>
 </div>
 <div id="infos">
    <p id="infospratiques"  style="font-weight:650; font-size: 1em;">INFORMATIONS PRATIQUES</p>
    <p id="mention_legale">Mentions légales</p>
    <p id="confidentalité">Politique de confidentalité</p>
 </div>
  <div id="suivre">
    <img id="logosuivre" name="logo" src="../img/NOUS SUIVRE.png" alt="nous suivre"/>
    <img id="logores" name="logo" src="../img/imageres.png" alt="nous suivre"/>
 </div>
 <div class="information">
  <nav id="navbar">
    <ul id="horizontal2" style="list-style-type: none">
      <li><a href="Association.php">Notre association</a></li>|
      <li><a href="annonces.php">Annonces</a></li>|
      <li><a href="forum.php">Forum</a></li>|
      <li><a href="contact.php">Contact</a></li>
    </ul>

   </nav>
 </div>

</footer>


</body>
</html>