<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>BEPS </title>
    <link rel="stylesheet" href="../css/animaux.css">
	  <link rel="stylesheet" href="../css/headerfooter.css">


  </head>

  <body >
    <!-- Voici notre en‑tête principale utilisée dans toutes les pages
         de notre site web -->
      
    <header style="color: #698F7D;">
      <div id="cercle"> </div>    
      <a href="../index.php ><img id="logo" name="logo" src="img/logo2.png" alt="logo du site" /></a>
      <a href="Connexion.php" ><img id="personnel" name="personnel" src="img/espacepersonnel.png" alt="Espace personnel" /></a>
     <!--  <ul id="horizontal2" style="list-style-type: none">
        <li><a href="Association.html"></a></li>
        <li><a href="#">Participer</a></li>|
        <li><a href="annonces.html">Annonces</a></li>
      </ul> -->
    <!-- menu horizontal --> 
    <nav>
      <ul id="horizontal" style="list-style-type: none">
        <li><a href="Association.html">Notre association</a></li>
        <li><a href="annonces.html">Annonces</a></li>
        <li><a href="forum.html">Forum</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>

     </nav>
  </header>
  
    <!-- Ici nous mettons le contenu de la page -->
    <div id="principal" >
        <div id="informations">
          <img id="profil" name="profil" src="img/profil.png" alt="logo du profil" />
            <div id="partie1">
                <div id="nomuser">
                    <label id="label_utilisateur">Nom</label>
                </div>
                <div id="nom">
                    <label id="label_prenom">Type d'animal : </label>
                    <input type="text" size="40" pattern="[A-Za-zÀ-ÿ ]+" id="nom" name="nom_contact" required>

                </div>
                <div id="nom">
                    <label id="label_prenom">Race : </label>
                    <input type="text" size="40" pattern="[A-Za-zÀ-ÿ ]+" id="nom" name="nom_contact" required>

                </div>
                <div id="date">
                    <label id="label_date">Date de Naissance</label>
                    <input type="date" id="startdate" name="startdate" />

                </div>
            </div>
            <div id="partie2">

                <label id="adresse">Identifiant :</label>
                <textarea style="width: 550px;" cols="43" id="message" name="message_contact" required></textarea>
                
            </div>
            <div id="partie3">
                <label for="logement">Type de logement : </label>
                <label for="Maison">Maison</label>
                <input type="radio" id="Maison" name="Maison">
                <label for="Appartement">Appartement</label>
                <input type="radio" id="Appartement" name="Maison">
            </div>
            <div id="partie4">
              <label for="logement">Je possede : </label>
              <label for="Maison">Un jardin</label>
              <input type="radio" id="Jardin" name="Appartement">
              <label for="Appartement">Une terrasse</label>
              <input type="radio" id="Terrasse" name="Appartement">
              <label for="Appartement">Un balcon</label>
              <input type="radio" id="Balcon" name="Appartement">
          </div>
          <div id="partie5">

            <label id="label_enfants">Enfants au domicile :   </label>
            <button id="moins" >-</button> 
            <input id='compteur' type="text" value="0">
            <button id="plus" >+</button> 
            
          </div>
          <div id="partie6">

            <label id="label_enfants">Animaux au domicile :</label>
            <button id="moins" >-</button> 
            <input id='compteur' type="text" value="0 NAC*">
            <button id="plus" >+</button> 
            <button id="moins" >-</button> 
            <input id='compteur' type="text" value="0 chien(s)">
            <button id="plus" >+ </button> 
            <button id="moins" >-</button> 
            <input id='compteur' type="text" value="0 chat(s)">
            <button id="plus" >+</button> 
            
          </div>
        </div>
    </div>

    <br><br><br><br>

 
    

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
          <li><a href="Association.html">Notre association</a></li>|
          <li><a href="annonces.html">Annonces</a></li>|
          <li><a href="forum.html">Forum</a></li>|
          <li><a href="contact.html">Contact</a></li>
        </ul>
  
       </nav>
     </div>

    </footer>

  </body>
</html>