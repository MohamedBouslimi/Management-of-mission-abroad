<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body  style="background-color:turquoise"> 
<div class='regform'><h2>formulaire d'inscription </h2> </div> 
<div class="main"> 
    <form name="form2" action="fraisAdmin" method="POST"> 
    @csrf
    <table> 
   <tr><td>Frais de mission:</td><td><input type="text" name="fraisM" required></td> </tr>   
   <tr><td>Frais de transport:</td><td><input type="text" name="fraisT" required></td></tr> 
   <tr><td></td><td><input type="reset" value="Annuler"><input type="submit"value="Enregister" name="save"  ></td> </tr>
   
</table>
   </form>  
</div> 
</div>
</body>
</html>