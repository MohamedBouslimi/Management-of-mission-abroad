 
<script src="{{ asset('frontend/js/calcul.js')}}" defer></script>
<body  > 
    <form>
<table>
<tr><td></td><td>Nom:</td><td>{{$cd->nom}}</td></tr>      
<!--<tr><td><input type="text" name="nom" required></td></tr>--> 

<tr><td></td><td>Prenom:</td><td>{{$cd->prenom}}</td></tr>                
     
<!--<tr><td><input type="text" name="prenom"required></td></tr> --> 
<tr><td></td><td>Date de naissance:</td><td> {{$cd->naissance}}</td></tr> 
<!--<tr><td><input type="date" name="naissance"required></td></tr>-->  
<tr><td></td><td>Numéro de carte d'identité:</td><td> {{$cd->carte}}</td></tr> 
<!--<tr><td><input type="text" name="identite"required></td></tr> --> 
<tr><td></td><td>Postulé par:</td><td> {{$cd->postule}}</td></tr>  
<!--<tr><td><input type="text" name="postule"required></td></tr> --> 
<tr><td></td><td>à la date:</td><td> {{$cd->date}}</td></tr> 
<!--<tr><td><input type="date" name="mmd"required></td></tr>-->
<tr><td></td><td>Nationalité:</td><td> {{$cd->national}}</td></tr> 
<!--<tr><td><input type="text" name="nationalit"required></td></tr>-->
<tr><td></td><td>A effectuer la mission:</td><td> {{$cd->effectuer}}</td></tr>
<!--<tr><td><input type="text" name="tache"required></td></tr>-->
<tr><td></td><td>Le thème de la mission:</td><td> {{$cd->theme}}</td></tr>
<!--<tr><td><textarea name="theme"required></textarea></td></tr> --> 
<tr><td></td><td>Date de depart:</td><td> {{$cd->aller}}</td></tr>   
<!--<tr><td><input type="date" name=" rendez"required></td></tr> --> 
<tr><td></td><td>Date de retour:</td><td> {{$cd->retour}}</td></tr>   
<!--<tr><td><input type="date" name="retour"required></td></tr> -->    
<tr><td></td><td>Moyen de transport:</td><td>{{$cd->moyen}}</td></tr> 
<!--<tr><td><input type="text" name="moyen"required></td></tr> -->  

<tr><td></td><td>Fonction/Responsabilities:</td> 
<td> {{$cd->fonction}}


</td> 

<tr><td></td><td> Frais de transport:</td> <td> {{$cd->transport}}</td></tr> 
<tr><td></td><td>Timbre de voyage:</td><td> {{$cd->timbre}}</td> </tr>
<tr><td></td><td>Dépenses:</td><td> {{$cd->depenses}}</td></tr> 
<tr><td></td><td>Nombre de jours:</td><td> {{$cd->jours}}</td></tr>

<tr><td></td><td>Aide financière:</td><td>  {{$cd->charge}}

</td></tr>

<tr><td></td><td> Frais de mission:</td><td> {{$cd->mission}} </td></tr>
<tr><td></td><td>Les montants de la mission:</td><td> {{$cd->montant}} </td></tr> 

<tr><td></td><td><input type="button" value="Imprimer" onclick="imprimer();"></td></tr>


</table> 
</form> 
</body>
