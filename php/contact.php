
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>BEPS </title>
    <link rel="stylesheet" href="../css/contact.css">
		<link rel="stylesheet" href="../css/headerfooter.css">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
		<meta http-equiv="content-language" content="FR"/>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </head>

  <body>

    <header style="color: #698F7D;">
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
   
    <div id="principal" >
      <div id="titre">
        <p id="contacter">Nous contacter ?</p>
      </div>
      <div id="contact">
        <form method=post action="contact.php" id="formulaire">
          
                <div class="nom">

                  <input type="text" size="40" pattern="[A-Za-zÀ-ÿ ]+" id="nom" name="nom_contact" required>
                  <label id="label_nom">Nom</label> 
                </div>
                <div id="text">

                  <p> Et retrouvez-nous sur les reseaux sociaux !</p>
                  
                  <div id="facebook">
                    <a href="https://www.facebook.com/"><img id="fb" name="logo" src="../img/fb.png" alt="logo de facebook"/> <p id="nomreseau"> Bien être Par Solidarité </p></a> 

                  </div>
                  <div id="instagram">
                    <a href="https://www.instagram.com/?hl=fr"><img id="insta" name="logo" src="../img/insta.png" alt="logo de insta" />   <p id="nomreseau"> bienetreparsolidarite </p> </a>

                  </div>
                  <div id="tiktok">
                    <a href="https://www.facebook.com/"><img id="tk" name="logo" src="../img/Tiktok.png" alt="logo de Tiktok"/>  <p id="nomreseau"> bien_etre_par_solidarite </p></a>
                     
                  </div>

                </div>
                <div class="prenom">
                  <input type="text" size="40" pattern="[A-Za-zÀ-ÿ ]+" id="prenom" name="prenom_contact" required>
                  <label id="label_prenom">Prénom</label>
                </div>
                <div class="mail">
                  <input type="text" size="40" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}" id="email" name="email_contact" required>
                  <label id="label_mail">Mail</label>
                </div>                
                
                <div class="objet">
                  <input type="text" size="40" id="objet" name="objet_contact" required>
                  <label id="label_objet" >Objet</label>
                </div>
                
                <div class="message">
                  <textarea cols="43" id="message" name="message_contact" required></textarea>
                  <label id="label_message" >Message</label>
                </div>
              <h4>	
                <input type="submit" value="Envoyer" onclick="verif();">
              </h4>
        </form>
      </div>
    </div>

  <br><br>

  <br><br>
  <?php 
		
    if(!empty($_POST)){
      $nom = $_POST['nom_contact'];
      $prenom = $_POST['prenom_contact'];
      $email = $_POST['email_contact'];
      $objet = $_POST['objet_contact'];
      $message = $_POST['message_contact'];
      $boo=true;
      
  ?> 
      <script> //On replit les informations du formulaire qui sont bien rentrées 
      document.getElementById("nom").value="<?php echo $nom ?>";
      document.getElementById("prenom").value="<?php echo $prenom ?>";
      document.getElementById("email").value="<?php echo $email ?>";
      document.getElementById("objet").value="<?php echo $objet ?>";
      document.getElementById("message").value="<?php echo $message ?>";
      </script>
  <?php
      $pattern_mail = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}$/';

      if ($nom=="") {
  ?>
        <script>
          document.getElementById("nom").value=''; 
          document.getElementById("nom").style.backgroundColor='#F0B3AC'; 
          document.getElementById("nom").placeholder="Dupont";
          document.getElementById("label_nom").style.top="-20px";
        </script>
        <?php
        $boo=false;
      }
      if ($prenom=="") {
        ?>
        <script>
          document.getElementById("prenom").value=''; 
          document.getElementById("prenom").style.backgroundColor='#F0B3AC'; 
          document.getElementById("prenom").placeholder="Marie";
          document.getElementById("label_prenom").style.top="-20px";
        </script>
        <?php
        $boo=false;
      }
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      ?>
        <script>
          document.getElementById("email").value='';
          document.getElementById("email").style.backgroundColor='#F0B3AC';
          document.getElementById("email").placeholder="dupontmarie@gmail.com";
          document.getElementById("label_email").style.top="-20px";
        </script>
      <?php
        $boo=false;
      }
      if ($objet=="") {
        ?>
        <script>
          document.getElementById("objet").value=''; 
          document.getElementById("objet").style.backgroundColor='#F0B3AC'; 
        </script>
        <?php
        $boo=false;
      }
      if ($message=="") {
        ?>
        <script>
          document.getElementById("message").value=''; 
          document.getElementById("message").style.backgroundColor='#F0B3AC'; 
        </script>
        <?php
        $boo=false;
      }
      
      if ($boo==true)
      {
        $sujet = "Demande de contact de $nom $prenom";
        $mess = "
            Nom : $nom \r\n
            Prenom : $prenom \r\n
            Email : $email \r\n
            Objet : $objet \r\n
            Message : $message";
        if (mail('youssef9320010@gmail.com', $sujet, $mess)) {
          ?>
            <script>
              alert("Votre mail a bien été envoyé");
              //On vide les valeurs du formulaire
            
              document.getElementById("nom").value="";
              document.getElementById("prenom").value="";
              document.getElementById("email").value="";
              document.getElementById("objet").value="";
              document.getElementById("message").value="";
            </script>
          <?php
        }
        else {
          ?>
            <script>
              alert("Impossible d'envoyer le mail");
            </script>
          <?php
        }
      }
      
    }

    ?>

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