function verif()
{
var firstname=f.firstname.value ;
var lastname=document.getElementById("lastname").value  ; 
var emailid=document.getElementById("emailid").value ; 
var password=document.getElementById("password").value ; 
var password2=document.getElementById("password2").value ; 
var date=document.getElementById("party").value ;
var cat=document.getElementById("cat").value ; 

if (firstname=="")
{ 
    alert ("firstname est obligatoire") ; 
    //text="please entrer votre mail " ; 
    //error_message.innerHTML=text  ; 
    return false  ;
}
if (lastname=="")
{ 
    alert ("lastname est obligatoire") ; 
    //text="please entrer votre mail " ; 
    //error_message.innerHTML=text  ; 
    return false  ;
}
if (lastname=="")
{ 
    alert ("lastname est obligatoire") ; 
    //text="please entrer votre mail " ; 
    //error_message.innerHTML=text  ; 
    return false  ;
}
if (emailid=="")
{ 
    alert ("emailid est obligatoire") ; 
  
    return false  ;
}

/*var patt =/^[^ ]+@[esprit]+\.[com]{2,2}$/ ; 
if (!mail.match(patt))
{
  alert("if faut ajouter @esprit.tn a la fin de chaine  ")  ;
  return false  ;
} */
if (password=="")
{ 
    alert("password est obligatoire")
}
if (password.length <8 )
{
    alert("longeur password minimum 8 ")    ;     

    return false  ;
}
if (password2=="")
{ 
    alert("password2 est obligatoire")
}
if (f.cat.selectedIndex==0)
{ 
    alert("categorie obligatoire ") ; 
}

}