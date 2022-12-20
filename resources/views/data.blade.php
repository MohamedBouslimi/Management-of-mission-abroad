

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
     
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>affichage des missions</title> 
</head>
<body style="background-color:turquoise" >  
     <center><h1>tableau de données</h1></center>
     <br>
    <br>    
    &nbsp; <a href="/" class="btn btn-primary">

home</a>
    <table  border="2" class="table-responsive"> 
         
  <thead>
        <th>id</th>
        <th>nom</th>
        <th>prenom</th> 
        <th>date_naissance</th>
        <th>CIN</th>
        <th>Postulé</th>
        <th>date</th>
       <th>Nationalité</th>
        <th>effectuer</th>
        <th>thème_mission</th>
        <th>date_depart</th>
        <th>date_retour</th>
        <th>moyen_transport</th>
        <th>Fonction/Responsabilities</th>
        <th>frais_transport</th>
        <th>timbre_voyage</th> 
        <th>dépenses</th>
        <th>nombre_jours</th>
        <th>Aide_financière</th>  
        <th>frais_mission</th>
        <th>montants</th> 
        
        <th colspan="4">ACTION</th> 
        
    </thead>   
   
        @foreach($getdata as $cd) 
        <tbody>
     <tr> 
     <td>{{$cd->id}}</td> 
      <td>{{$cd->nom}}</td>
      <td>{{$cd->prenom}}</td>
      <td>{{$cd->naissance}}</td>
      <td>{{$cd->carte}}</td>
      <td>{{$cd->postule}}</td>
      <td>{{$cd->date}}</td>
      <td>{{$cd->national}}</td>
      <td>{{$cd->effectuer}}</td>
      <td>{{$cd->theme}}</td>
      <td>{{$cd->aller}}</td>
      <td>{{$cd->retour}}</td>
      <td>{{$cd->moyen}}</td>
      <td>{{$cd->fonction}}</td>
      <td>{{$cd->transport}}</td>
      <td>{{$cd->timbre}}</td>
      <td>{{$cd->depenses}}</td>
      <td>{{$cd->jours}}</td>
      <td>{{$cd->charge}}</td> 
      <td>{{$cd->mission}}</td>
      <td>{{$cd->montant}}</td> 
      <td><a href="{{url('/edit'.$cd->id)}}"  class="btn btn-sm btn-success">Update</a></td> 
       <td><a href="{{url('/afficher'.$cd->id)}}"  class="btn btn-primary">afficher</a></td> 
      <!--<td><a href="{{url('/viewAr'.$cd->id)}}"  class="btn btn-primary">عرض</a></td>--> 
      <td><a href="{{url('/deletepage'.$cd->id)}}" class="btn btn- btn-danger">Delete</a></td>
     
     </tr>
      @endforeach
    </tbody>

    
        
    </table>
  


</body>
</html>