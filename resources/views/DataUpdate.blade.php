
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css"> 
    <title>Document</title>
    <script src="{{ asset('frontend/js/calcul.js')}}" defer></script>
</head>
<body>
    


<div class='regform'><h2>formulaire d'inscription </h2> </div> 
<div class="main">

 
<form name="form1" action="dataupdate{{$getdata->id}}" method="post" >  
@csrf
<table>    

<tr><td>Nom:</td><td><input type="text" name="nom" required value="{{$getdata->nom}}" ></td></tr>      
<!--<tr><td><input type="text" name="nom" required></td></tr>--> 

<tr><td>Prenom:</td><td><input type="text" name="prenom" required value="{{$getdata->prenom}}"></td></tr>                
     
<!--<tr><td><input type="text" name="prenom"required></td></tr> --> 
<tr><td>Date de naissance:</td><td><input type="date" name="naissance"required value="{{$getdata->naissance}}"></td></tr> 
<!--<tr><td><input type="date" name="naissance"required></td></tr>-->  
<tr><td>Numéro de carte d'identité:</td><td><input type="text" name="carte"required value="{{$getdata->carte}}"></td></tr> 
<!--<tr><td><input type="text" name="identite"required></td></tr> --> 
<tr><td>Postulé par:</td><td><input type="text" name="postule"required value="{{$getdata->postule}}"></td></tr>  
<!--<tr><td><input type="text" name="postule"required></td></tr> --> 
<tr><td>à la date:</td><td><input type="date" name="date"required value="{{$getdata->date}}"></td></tr> 
<!--<tr><td><input type="date" name="mmd"required></td></tr>-->
<tr><td>Nationalité:</td><td><input type="text" name="national"required value="{{$getdata->national}}"></td></tr> 
<!--<tr><td><input type="text" name="nationalit"required></td></tr>-->
<tr><td>A effectuer la mission:</td><td><input type="text" name="effectuer"required value="{{$getdata->effectuer}}"></td></tr>
<!--<tr><td><input type="text" name="tache"required></td></tr>-->
<tr><td>Le thème de la mission:</td><td><input type="text" name="theme"required value="{{$getdata->theme}}"></td></tr>
<!--<tr><td><textarea name="theme"required></textarea></td></tr> --> 
<tr><td>Date de depart:</td><td><input type="date" name="aller"required value="{{$getdata->aller}}"></td></tr>   
<!--<tr><td><input type="date" name=" rendez"required></td></tr> --> 
<tr><td>Date de retour:</td><td><input type="date" name="retour"required value="{{$getdata->retour}}"></td></tr>   
<!--<tr><td><input type="date" name="retour"required></td></tr> -->    
<tr><td>Moyen de transport:</td><td><input type="text" name="moyen"required value="{{$getdata->moyen}}"></td></tr> 
<!--<tr><td><input type="text" name="moyen"required></td></tr> -->  

<tr><td>Fonction/Responsabilities:</td> 
<td><select name="fonction" value="{{$getdata->fonction}}">
<option value="Président Directeur Général" id="a" >Président Directeur Général</option> 
<option value="Employé avec fonction" id="b" >employé avec fonction</option> 
<option value="Employer sans fonction" id="c" >employer sans fonction</option>
</select> 
</td>

<tr><td> Frais de transport:</td> <td><input type="text" name="transport" required value="{{$getdata->transport}}"></td></tr> 
<tr><td>Timbre de voyage:</td><td><input type="text" name="timbre"required value="{{$getdata->timbre}}"></td> </tr>
<tr><td>Dépenses:</td><td><input type="text" name="depenses"required value="{{$getdata->depenses}}"></td></tr> 
<tr><td>Nombre de jours:</td><td> <input type="text" name="jours"required value="{{$getdata->jours}}"></td></tr>

<tr><td>Aide financière:</td><td><select name="charge" value="{{$getdata->charge}}"><option  value="Aucune prise en charge" id="d">aucune prise en charge</option>
<option name="charge" value="Prise en charge de l'hébergement" id="e" >prise en charge de l'hébergement</option>
<option name="charge" value="Prise en charge de l'hébergement et subsistance" id="f" >prise en charge de l'hébergement et subsistance</option >
<option name="charge" value="Objet de la mission est une formation" id="g">objet de la mission est une formation</option>
</select>
</td></tr>

<tr><td> Frais de mission:</td><td><input type="button" value="calculer" onclick="Calcul();"><input type="text" name="mission" required value="{{$getdata->mission}}" ></td></tr>
<tr><td>Les montants de la mission:</td><td><input type="button" value="calculer" onclick="calcul2();"><input type="text" name="montant"required value="{{$getdata->montant}}"></td></tr> 

<tr><td></td><td><input type="submit"value="Mettre à jour" name="save"  ></td></tr>

</table> 

    
 
 
  
    </form>   
</div> 
</div>
    </body>
</html>