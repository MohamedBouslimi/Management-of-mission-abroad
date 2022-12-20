<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <form name="form2" action="dataedit{{$showdata->id}}" method="post"> 
    @csrf
    <table> 
   <tr><td>Frais de mission:</td><td><input type="text" name="fraisM" required value="{{$showdata->fraisM}}"></td> </tr>   
   <tr><td>Frais de transport:</td><td><input type="text" name="fraisT" required value="{{$showdata->fraisT}}"></td></tr> 
   <tr><td></td><td><input type="submit"value="Mise a jour" name="save"  ></td> </tr>
   
</table>
   </form> 
</body>
</html>