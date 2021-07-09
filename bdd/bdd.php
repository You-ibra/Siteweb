<?php
session_start();
	//connexion à la bdd
	function connexion(&$bdd) {
		include ('bddData.php');
		try {
			$bdd = new PDO("mysql:host=".$host.";dbname=".$db.";charset=utf8;port=".$port, $user, $password);
			//gère les erreurs en mode exception
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return true;
		} catch (PDOException $e) {
			echo "Erreur connexion : ".$e->getMessage();
			return false;
		}
	}
	
	//déconnexion à la bdd
	function deconnexion(&$bdd) {
		$bdd = null;
	}
	
	
	function connexionUtilisateur($_POST2){
		try {
			if (connexion($bdd)) {
				$utilisateur = $bdd->query('SELECT * FROM utilisateur');
		
		while ($donnees = $utilisateur->fetch()) //Dans cette boucle while, on va regarder toutes les lignes de particulier pour les comparer aux informations de connexion, on stock la ligne dans la variable $reponse_par
			{
				if ($donnees['login']==$_POST2['login'] && $_POST2['mdp']==$donnees['mdp']) { 
					$boo=1;
					$_SESSION['login']=$_POST2['login']; //On remplit donc notre $_SESSION avec le login de l'utilisateur
				}
			}
		if($boo==1) {
				header("Location:../index.php"); //Donc on envoit l'utilisateur à la page correspondant au session de type particulier
		}
		else {
			?>
			<script>
			alert("Mot de passe ou identifiant incorrecte");
			document.location.href = 'connexion.php';
			</script>
			<?php
			}
		}
		} catch (PDOException $e) {
			echo "Erreur : ".$e->getMessage();
		} finally {
			deconnexion($bdd);
		}
	}
	
	function inscriptionUtilisateur($_POST2){
		try {
			if (connexion($bdd)) {
				$utilisateur = $bdd->query('SELECT * FROM utilisateur');
				while ($donnees = $utilisateur->fetch()) {
					if ($donnees['login']==$_POST2['login']){
						?>
						<script>
						alert("Le login existe déjà veuillez en choisir un autre");
						document.location.href = 'inscription.php';
						</script>
						<?php
					}
				}
				
			$req = $bdd->prepare("INSERT INTO utilisateur (login, mdp, nom, prenom, genre, date_naissance, adresse, ville, code_postal, email) VALUES(:login, :mdp, :nom, :prenom, :genre, :date_naissance, :adresse, :ville, :code_postal, :email)");
			$req->execute(array(
				'login' => $_POST2['login'],
				'mdp' => $_POST2['mdp'],
				'nom' => $_POST2['nom'],
				'prenom' => $_POST2['prenom'],
				'genre' => $_POST2['sexe'],
				'date_naissance' => $_POST2['date'],
				'adresse' => $_POST2['adresse'],
				'ville' => $_POST2['ville'],
				'code_postal' => $_POST2['code'],
				'email' => $_POST2['email']
			));
			$_SESSION['login']=$_POST2['login'];	
			if (empty($_SESSION['pageappelconnexion'])){ //le particulier n'est pas en train d'acheter
				header("Location:../index.php"); //Donc on envoit l'utilisateur à la page correspondant au session de type particulier
			}else{ //le particulier est en train d'acheter
				header("Location: ".$_SESSION['pageappelconnexion']);
			}
          } 
		} catch (PDOException $e) {
			echo "Erreur : ".$e->getMessage();
		} finally {
			deconnexion($bdd);
		}
	} 
	
	function afficherProfil($login) {
			try {
			if (connexion($bdd)) {
				$requete = 'SELECT * FROM utilisateur WHERE login="'.$_SESSION['login'].'"';
							$sql = $bdd->query($requete);
							while ($ligne = $sql->fetch()){ //parcourt la bdd
								?>
								<div class="date">
										<input type="date" name="date" id="date" value="<?php echo $ligne['date_naissance']; ?>" >
										<label>Date de naissance</label>
									</div>
						
									<div class="date">
										<input type="text" size="40" pattern="[A-Za-zÀ-ÿ ]+" id="nom" name="nom" value="<?php echo $ligne['nom']; ?>" required>
										<label>Nom</label>							
									</div>
									
									<div class="date">
										<input type="text" size="40" pattern="[A-Za-zÀ-ÿ ]+" id="prenom" name="prenom" value="<?php echo $ligne['prenom']; ?>"required>
										<label id="label_prenom">Prénom</label>
									</div>
					
									<div class="date">
										<input type="text" size="40" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}" name="email" id="email" value="<?php echo $ligne['email']; ?>"required>
										<label id="label_email">Mail</label>
									</div>
									<div class="date">
										<input type="text" name="adresse" id="adresse" size=40  value="<?php echo $ligne['adresse']; ?>" required="">
										<label id="label_nom">Adresse</label>
									</div>
									<div class="date">
										<input type="text" name="ville" id="ville"  size=40  value="<?php echo $ligne['ville']; ?>"required="">
										<label id="label_ville">Ville</label>
									</div>
											
									<div class="date">
										<input type="number" name="code" id="code" pattern="[0-9]{5}"required value="<?php echo $ligne['code_postal']; ?>"size=30>
										<label id="label_code">Code postal</label>
									</div>
									<div class="date">
										<input type="text" name="login"  id="login" size=40 value="<?php echo $ligne['login']; ?>" required="">
										<label id="label_login">Login</label>
									</div>	
						<?php
							}
				}
		} catch (PDOException $e) {
			echo "Erreur : ".$e->getMessage();
		} finally {
			deconnexion($bdd);
		}
	}
	
	function modifInfo($_POST2) {
		
		try {
			if (connexion($bdd)) {
				$requeteupdate = 'UPDATE utilisateur SET 
					login="'.$_POST2["login"].'",
					nom="'.$_POST2["nom"].'",
					prenom="'.$_POST2["prenom"].'",
					date_naissance="'.$_POST2["date"].'",
					adresse="'.$_POST2['adresse'].'",
					ville="'.$_POST2['ville'].'",
					code_postal="'.$_POST2['code'].'",
					email="'.$_POST2['email'].'"
					WHERE login="'.$_SESSION["login"].'"';
				$sqlupdate = $bdd->exec($requeteupdate);  
				$_SESSION['login']=$_POST2['login'];
			}
		} catch (PDOException $e) {
			echo "Erreur : ".$e->getMessage();
		} finally {
			deconnexion($bdd);
		}
	} 
	
?>
