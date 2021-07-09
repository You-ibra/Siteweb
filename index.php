


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>BEPS </title>
    <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/headerfooter.css">


  </head>

  <body >
    <!-- Voici notre en‑tête principale utilisée dans toutes les pages
         de notre site web -->
      
    <header style="color: #698F7D;">
      <div id="cercle"> </div>    
      <a href="index.php" ><img id="logo" name="logo" src="img/logo2.png" alt="logo du site" /></a>
      <a href="php/Connexion.php" ><img id="personnel" name="personnel" src="img/espacepersonnel.png" alt="Espace personnel" /></a>
     <!--  <ul id="horizontal2" style="list-style-type: none">
        <li><a href="Association.html"></a></li>
        <li><a href="#">Participer</a></li>|
        <li><a href="annonces.html">Annonces</a></li>
      </ul> -->
    <!-- menu horizontal --> 
    <nav>
      <ul id="horizontal" style="list-style-type: none">
        <li><a href="php/Association.php">Notre association</a></li>
        <li><a href="php/annonces.php">Annonces</a></li>
        <li><a href="php/forum.php">Forum</a></li>
        <li><a href="php/contact.php">Contact</a></li>
      </ul>

     </nav>
  </header>
  
    <!-- Ici nous mettons le contenu de la page -->
   <div id="principal" >
      <div id="contact">
        <h1>Trouver votre annonce !</h1>
        <form method=get action="#" id="formulaire">
                <div class="dateD">
                  <input type="date" name="date" id="date">
                  <label>Date de début</label>
                </div>
                <div class="dateF">
                  <input type="date" name="date" id="date">
                  <label>Date de fin</label>
                </div>
                <div class="nom">

                  <label id="label_nom"></label>							
                </div>
                
                <div class="metier">
                  <select id="metier" name="metier_contact">
                    <option id="" value=""></option>
                    <option value="apprenti">Chien</option>
                    <option value="artisan">Chat</option>
                  </select>
                  <label id="lab">Animal</label>
                </div>
                
                <div class="message">
                  <textarea cols="43" id="message" name="message_contact" required></textarea>
                  <label id="label_message" >Ville</label>
                </div>
              <h4>	
                <input type="button" value="Trouver" onclick="verif()">
              </h4>
        </form>
      </div>
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
        <img id="logosuivre" name="logo" src="img/NOUS SUIVRE.png" alt="nous suivre"/>
        <img id="logores" name="logo" src="img/logos.png" alt="nous suivre"/>
     </div>
     <div class="information">
      <nav id="navbar">
        <ul id="horizontal2" style="list-style-type: none">
          <li><a href="php/Association.php">Notre association</a></li>|
          <li><a href="php/annonces.php">Annonces</a></li>|
          <li><a href="php/forum.php">Forum</a></li>|
          <li><a href="contact.php">Contact</a></li>
        </ul>
  
       </nav>
     </div>

    </footer>

  </body>
</html>