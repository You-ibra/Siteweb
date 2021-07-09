<?php
include ('../bdd/bdd.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>BEPS </title>
	  <link rel="stylesheet" href="../css/connexion_inscription.css">
    <link href="../css/headerfooter.css" rel="stylesheet">

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
    <!-- Ici nous mettons le contenu de la page -->
    <form action="resp_connexion.php" method="POST" id="form"> 
        <div id="principal2">
            <div class="middle">
                <h1>CONNEXION</h1>
                <div class="login">
                    <input type="text" id="login_connexion" name="login" required>
                    <label>Login</label>
                    <span></span>
                </div>
                <div class="password">
                    <input type="password" id="mdp" name="mdp" required >
                    <label>Mot de passe</label>
                    <br>
                    <input type="checkbox" id="affiche_mdp">Afficher le mot de passe
                </div> 
                <div class="boutton">
                    <input type="submit" value="Se connecter" onclick="sumbit()">
                    <input type="submit" value="Pas de compte ?" name="valider" onclick="document.location.href = 'inscription.php'" /> 
                </div>
            </div>         
        </div>
    </form><br><br><br>
     


    </div>

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