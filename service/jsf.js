function verifnom(ch) 
    { 
    for (var i=0 ;i<ch.length ; i++) 
    { 
         c=ch.charAt(i) ; 
         if (((c<'A') || (c>'Z')) && ((c<'a') || (c>'z')))  
{ 
alert( " nom est invalide" ) ;
return false ; 
}
    }
}
function verifprenom(ch) 
    { 
    for (var i=0 ;i<ch.length ; i++) 
    { 
         c=ch.charAt(i) ; 
         if (((c<'A') || (c>'Z')) && ((c<'a') || (c>'z')))  
{ 
alert( " prenom est invalide" ) ;
return false ; 
}
    }
}
function verif()
{
var nom=f.nom.value ;
var pr=document.getElementById("prenom").value  ; 
var mail=document.getElementById("mail").value ; 
var tel=document.getElementById("numero").value ; 
var date=document.getElementById("party").value ;
var cat=document.getElementById("cat").value ; 
var id=document.getElementById("id").value ;
c=mail.indexOf("@") ; 
p=mail.indexOf(".") ;
if (id=="")
{ 
    alert ("id est obligatoire") ; 
    return false ;
}
if (nom=="")
{ 
    alert ("nom est obligatoire") ; 
    //text="please entrer votre mail " ; 
    //error_message.innerHTML=text  ; 
    return false  ;
}
verifnom(nom) ; 
if (pr=="")
{ 
    alert ("prenom est obligDDatoire") ; 
    //text="please entrer votre mail " ; 
    //error_message.innerHTML=text  ; 
    return false  ;
}
verifprenom(pr);
if (mail=="")
{ 
    alert ("mail est obligatoire") ; 
  
    return false  ;
}
if ((c==-1)  || (p==-1) )
{ 
alert("@ et . obligatoire") ; 
} else if (c>p) 
{
alert(" position @ est invalie") ;   
//return false ; 
}
//var patt =/^[^ ]+@[gmail]+\.[com]{2,2}$/ ; 
/*if (!mail.match(patt))
{
  alert("if faut ajouter @esprit.tn a la fin de chaine  ")  ;
  return false  ;
} */
if (tel=="")
{ 
    alert("tel est obligatori") ; 
    return false ; 
}
if (tel.length<8 )
{
    alert("longeur tel minimaux 8 ")    ;     

    return false  ;
}
if (f.cat.selectedIndex==0)
{ 
    alert("categorie obligatoire ") ; 
}

} 
 /*function populate(s1,s2)
 { 
     var s1=document.getElementById(s1) ; 
     var s1=document.getElementById(s2) ;
     s2.innerHTML="" ; 
     if (s1.value == "coiffure") 
     {
         var optionArray=['simple|Simple','mariage|Mariage','clair|Clair','autre|Autre'] ;
     }else if (s1.value=='maquillage')
     { 
        var optionArray=['sie|Sle','mage|Mage','clair|Clir','autre|Ae'] ;

     }
     for (var option in optionArray)
     { 
         var pair=optionArray[option].split("|") ; 
         var newoption=document.createElement("option") ; 
         newoption.value=pair[0]  ; 
         newoption.innerHTML=pair[1] ; 
         s2.options.add(newoption) ; 
     }
 }*/ 
 function random_function()
            {
                var a=document.getElementById("cat").value;
                if(a==="coiffure")
                {
                    var arr=["Coupe","Coloration racine majnel (à partir)","Mèche L’Oréal platinium(à partir)","Coiffure chignon","Soin prokératine","keratine"];
                }
                else if(a==="maquillage")
                {
                    var arr=["Maquillage Complet","Maquillage des Yeux","Faux Cils","Cil à Cil","Pose Foulard"];
                }else if(a==="vernis")
                { 
                    var arr=["vernis permanent","gel sur ongles naturels","gel+vernis permanent sur ongles naturels","Capsules+gel+vernis permanent","Design",];
                }else if (a==="sourcil")
                { 
                    var arr=["Restructuration des sourcils","Épilation entretien sourcils","Teinture des sourcils","Brow lift avec teinture","Henné végétal des sourcils","Brow lift"] ; 
                }else if (a==="nottoyage")
                { 
                    var arr=["Soin Spécifique","Soin Anti-Rides GUINOT","Soin D-COOL","Soin BABY GLOW","Soin Eclat"] ; 
                }else if (a=="choisir")
             {
                 var arr=[]; 
             }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                } 
                if (string.selectedIndex==0 )
                { 
                  alert("choisir votre choisir svp") ;  
                }
                document.getElementById("cat2").innerHTML=string;
            }
