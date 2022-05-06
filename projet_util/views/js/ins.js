let button = document.querySelector("#yes");
button.addEventListener('click', (e) => {
    e.preventDefault();
///////////////////////////////////////////////////////////////////////
// setting error codes
let errorPrenom = document.getElementById("errorPrenom");
errorPrenom.style.color = "red";
let errorNom = document.getElementById("errorNom");
errorNom.style.color = "red";
let errorEmail = document.getElementById("errorEmail");
errorEmail.style.color = "red";
let errorMdp = document.getElementById("errorMdp");
errorMdp.style.color="red";
let errorMdp2 = document.getElementById("errorMdp2");
errorMdp2.style.color="red";
/////////////////////////////////////////////////////////////
//nom
let nom = document.getElementById("nom").value;
if (nom == "") {
    errorNom.innerText = 'Veuiller saisir un nom valide';
}
else if (nom.charAt(0).toUpperCase() != nom.charAt(0)) {
    console.log(nom);
    errorNom.innerText = 'Veuiller ecrire une maj au debut';
}
else{
    errorNom.innerText = '';
}
//prenom
let pre = document.getElementById("prenom").value;

if (pre == "") {
errorPrenom.innerText = 'Veuiller saisir un prenom valide';
}
else if (pre.charAt(0).toUpperCase() != pre.charAt(0)) {
errorPrenom.innerText = 'Veuiller ecrire une maj au debut';
}
else 
errorPrenom.innerHTML='';
// email
let email=document.getElementById("email").value;
if(email=="")
errorEmail.innerHTML = 'Veuiller ecrire un email valide !'
else 
errorEmail.innerHTML = '';
// mot de pass
let mdp=document.getElementById("password").value;
let mdp2=document.getElementById("password2").value;
if(mdp.length<=8)
errorMdp.innerHTML="Votre mot de passe doit contenir au moins 8 caracteres";
else if (mdp.search(/[0-9]/)==-1)
errorMdp.innerHTML="Votre mot de passe doit contenir au moins un nombre";    
else if (mdp.search(/[A-Z]/)==-1)
errorMdp.innerHTML="Votre mot de passe doit contenir au moins une lettre maj";    
else if (mdp.search(/[a-z]/)==-1)
errorMdp.innerHTML="Votre mot de passe doit contenir au moins une lettre min";    
else 
errorMdp.innerHTML="";    
if(mdp!=mdp2)
errorMdp2.innerHTML="Votre mot de passe n'est pas le meme";  
else 
errorMdp2.innerHTML="";  
console.log(errorMdp2.innerHTML);
if((errorMdp.innerHTML==="") && (errorEmail.innerHTML==="") && (errorPrenom.innerHTML==="") && (errorNom.innerHTML==="") && (errorMdp2.innerHTML===""))
{
 document.getElementById("form").submit();
}
}
);