<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body  style="background-color:turquoise" >  
    <table border="2">
<thead>
        <th>id</th>
        <th>nom</th>
        <th>email</th> 
        <th>password</th>
</thead> 
@foreach($usertable as $cd) 
<tbody>  
    <tr>
<td>{{$cd->id}}</td> 
      <td>{{$cd->name}}</td>
      <td>{{$cd->email}}</td>
      <td>{{$cd->password}}</td>
     

<td><a href="{{url('/edit'.$cd->id)}}"  class="btn btn-sm btn-success">Update</a></td> 
       <td><a href="{{url('/afficher'.$cd->id)}}"  class="btn btn-primary">afficher</a></td> 
      <!--<td><a href="{{url('/viewAr'.$cd->id)}}"  class="btn btn-primary">عرض</a></td>--> 
      <td><a href="{{url('/deletepage'.$cd->id)}}" class="btn btn- btn-danger">Delete</a></td> 
</tr> 
@endforeach 
</tbody>
    </table>  
</tbody> 
</body>
</html>