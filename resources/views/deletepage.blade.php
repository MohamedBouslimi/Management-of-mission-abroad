<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   
  <link href="{{ asset('frontend/css/bootstrap5.css')}}" rel="stylesheet"> 

  <title>Document</title>
</head>

  


<body> 
<div class="container"> 
 <div class="row pt-5"> 
  <div class="col-md-4"></div> 
    <div class="col-md-4 text-center"> 
        <div class ="card"> 
            <h4 class="car-header">Do you want to delete?</h4> 
              <div class="card-body"> 
                     <a href="{{url('/data')}}" class="btn btn-sm btn-primary">No</a> 
                     <a href="{{url('/delete'.$id)}}" class="btn btn-sm btn-danger">Yes</a>
              </div> 
              </div> 
              </div> 
              <div class="col-md-4"></div>
              </body>
</html>
