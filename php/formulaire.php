
<?php 


$error=0;

if(!empty($_POST)) {

    if(empty($_POST['nom'])) {
        echo "Le champ nom est vide";
        $error++;
        $_SESSION['nameError'] = 'Erreur: Le nom est manquant <br><br>';
        header('Location:contact.php');
    }
    else if(empty($_POST['prenom'])) {
        echo "Le champ prenom est vide";
        $error++;
        header('Location:contact.php');

    }
    else if(empty($_POST['mail'])) {
        echo "Le champ mail est vide";
        $error++;
        header('Location:contact.php');
    }
    else if(empty($_POST['sexe'])) {
        echo "Le champ Sexe est vide";
        $error++;
        header('Location:contact.php');

    }       
    else if(!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,}$#i",$_POST['mail'])){
        echo "L'adresse mail entrée est incorrecte";
        $error++;
        header('Location:contact.php');

    }
    else if(empty($_POST['DateDeNaissance'])) {
        echo "Le champ date de naissance est vide";
        $error++;
        header('Location:contact.php');
    }
    else if(empty($_POST['SujetDuMail'])) {
        echo "Le champ sujet est vide";
        $error++;
        header('Location:contact.php');
    }
    else if(empty($_POST['user_message'])) {
        $error++;
        $_SESSION['messageError'] = 'Erreur: Le contenu du message est vide <br>';
        header('Location:contact.php');
        }

    else if($error==0){

        $eMail="youssef9320010@gmail.com"; 
        $Sujet='=?UTF-8?B?'.base64_encode($_POST['SujetDuMail']).'?=';
        $Message=htmlentities($_POST['user_message'],ENT_QUOTES,"UTF-8");
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
    
                if(mail($eMail,$Sujet,nl2br($Message),$nom,$prenom)){
                    echo "Le mail à été envoyé avec succès!";

                    } else {
                        echo '<br> <a class="button" href="contact.php "style="color:black;font-size:1.3rem;text-align:right;"> Retourner dans la page précédente</a>'; 
                        echo "<br> Une erreur est survenue, le mail n'a pas été envoyé";
                    }
        
        
                }                
                 
}


                    ?>