function verif_forme_email() {
    var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}$/; //pattern représente toutes les formes possibles que peut avoir un email
    var mail=document.getElementById("email").value;
    var boo = true;
    
    if (!pattern.test(mail))
    {
        document.getElementById("email").style.backgroundColor='#F0B3AC'; //On modifie la couleur du background de notre champ-texte
		document.getElementById("email").placeholder="dupontmarie@gmail.com";
		document.getElementById("label_email").style.top="-20px";
        boo=false;
         
        
    }
    else {
		 document.getElementById("email").style.backgroundColor='#F2D7D5';
		 boo=true; 
	}

	return boo;
}

function verif_info(){
	
	var nom=document.getElementById("nom").value;
	var prenom=document.getElementById("prenom").value;
	var objet=document.getElementById("objet").value;
	var message=document.getElementById("message").value;
	var metier=document.getElementById("metier").value;
	var boo=true;
	
	if (nom=="") {
		document.getElementById("nom").style.backgroundColor='#F0B3AC'; 
		document.getElementById("nom").placeholder="Dupont";
		document.getElementById("label_nom").style.top="-20px";
		boo=false;
	} 
	else{ 
		document.getElementById("nom").style.backgroundColor='#F2D7D5';
	}
	
	if (prenom=="") {
		document.getElementById("prenom").style.backgroundColor='#F0B3AC'; 
		document.getElementById("prenom").placeholder="Marie";
		document.getElementById("label_prenom").style.top="-20px";
		boo=false;
	} 
	else{
		document.getElementById("prenom").style.backgroundColor='#F2D7D5';
	}
	
	
	
	if (objet=="") {
		document.getElementById("objet").style.backgroundColor='#F0B3AC';
		document.getElementById("objet").placeholder="Entrez votre objet";
		document.getElementById("label_objet").style.top="-20px";
		boo=false;
	} 
	else {
		document.getElementById("objet").style.backgroundColor='#F2D7D5';
	}
	
	if (message=="") {
		document.getElementById("message").style.backgroundColor='#F0B3AC'; 
		document.getElementById("message").placeholder="Entrez votre message";
		document.getElementById("label_message").style.top="-20px";
		boo=false;
	} 
	else {
		document.getElementById("message").style.backgroundColor='#F2D7D5';
	}
	
	
	return boo;
	
}

function verif() {
	var nom=document.getElementById("nom").value;
	var prenom=document.getElementById("prenom").value;
	var mail=document.getElementById("email").value;
	var objet=document.getElementById("objet").value;	
	var message=document.getElementById("message").value;
	var boo=verif_info();
	var boo2=verif_forme_email();
	var form=document.getElementById("formulaire");
		if (boo==true  && boo2==true) { //Toutes les informations ont été bien rentrées
			form.submit();
		} 
		
		else {
			alert("Veuillez rentrer toutes vos informations");
		}
}

