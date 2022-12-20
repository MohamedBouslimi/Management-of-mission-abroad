<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body  style="background-color:turquoise"> 
    <table border="2">
<thead>
        <th>id</th>
        <th>Frais_Mission</th>
        <th>Frais_Transport</th>  
</thead>  
<tbody>
@foreach($showdata as $cd) 
<tr> 
    <td>{{$cd->id}}</td> 
    <td>{{$cd->fraisM}}</td> 
    <td>{{$cd->fraisT}}</td> 
    <td><a href="{{url('/updatepage'.$cd->id)}}"  class="btn btn-sm btn-success">Update</a></td> 
      <td><a href="{{url('/remove'.$cd->id)}}" class="btn btn- btn-danger">Delete</a></td>
      
</tr> 
@endforeach 
</tbody>
</table>
</body>
</html>