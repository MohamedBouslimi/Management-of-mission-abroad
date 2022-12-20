
@extends('layouts.app')
@section('content') 


<link rel="stylesheet" href="style.css"> 


    <script src="{{ asset('frontend/js/calcul.js')}}" defer></script> 
    <body>

<div class='regform'><h2>formulaire d'inscription </h2> </div> 
<div class="main">

<form name="form1" action="form" method="post"  >  
@csrf

<table> 
  
<tr><td><div class='name'>Nom:</div></td><td><input type="text" name="nom" class='firstname' required></td></tr>
    
<tr><td>Prenom:</td><td><input type="text" class='lastname' name="prenom" required></td></tr> 

                
     

<tr><td>Date de naissance:</td><td><input type="date" name="naissance"required></td></tr> 

<tr><td>Numéro de carte d'identité:</td><td><input type="text" name="carte"required></td></tr> 

<tr><td>Postulé par:</td><td><input type="text" name="postule"required></td></tr>  
 
<tr><td>à la date:</td><td><input type="date" name="date"required></td></tr> 

<tr><td>Nationalité:</td><td><input type="text" name="national"required></td></tr> 

<tr><td>A effectuer la mission:</td><td><input type="text" name="effectuer"required></td></tr>

<tr><td>Le thème de la mission:</td><td><input type="text" name="theme"required></td></tr>

<tr><td>Date de depart:</td><td><input type="date" name="aller"required></td></tr>   

<tr><td>Date de retour:</td><td><input type="date" name="retour"required></td></tr>   
   
<tr><td>Moyen de transport:</td><td><input type="text" name="moyen"required></td></tr> 


<tr><td>Fonction/Responsabilities:</td> 
<td><select name="fonction">
<option value="Président Directeur Général" id="a" >Président Directeur Général</option> 
<option value="Employé avec fonction" id="b" >employé avec fonction</option> 
<option value="Employer sans fonction" id="c" >employer sans fonction</option>
</select> 
</td> 

<tr><td> Frais de transport:</td> <td><input type="text" name="transport" required></td></tr> 
<tr><td>Timbre de voyage:</td><td><input type="text" name="timbre"required></td> </tr>
<tr><td>Dépenses:</td><td><input type="text" name="depenses"required></td></tr> 
<tr><td>Nombre de jours:</td><td> <input type="text" name="jours"required></td></tr>

<tr><td>Aide financière:</td><td><select name="charge"><option  value="Aucune prise en charge" id="d">aucune prise en charge</option>
<option name="charge" value="Prise en charge de l'hébergement" id="e" >prise en charge de l'hébergement</option>
<option name="charge" value="Prise en charge de l'hébergement et subsistance" id="f" >prise en charge de l'hébergement et subsistance</option >
<option name="charge" value="Objet de la mission est une formation" id="g">objet de la mission est une formation</option>
</select>
</td></tr>

<tr><td> Frais de mission:</td><td><input type="button" value="calculer" onclick="Calcul();"><input type="text" name="mission" required  ></td></tr>
<tr><td>Les montants de la mission:</td><td><input type="button" value="calculer" onclick="calcul2();"><input type="text" name="montant"required ></td></tr> 


<tr><td></td><td><input type="submit"value="Save" name="save"  ><input type="reset" value="Annuler"></td></tr>

</table> 


    </form>
    </div> 
  </body>
 
@endsection