<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        
<link rel="stylesheet" href="style.css">
        <!-- Styles -->
       


  
            <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand"><img src="images/logo.png" width="50px" alt=""></a>

</nav>
        

   
        
    </head> 

    
    <body > 
        
        <div class="moi">
            @if (Route::has('login'))
                <div class="toi">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
           </div>
<center>
<div class="sabrink">

<div>
<button  ><a href="/form">formulaire</a></button><br> </div>
           <div> <button ><a href="/data">gestion mission</a></button><br></div>
     
           <div> <button ><a href="/fraisAdmin">formulaire des frais</a> </button></div> 
           <div> <button ><a href="/data_admin">gestion les frais</a> </button></div>  
          <!-- <div> <button ><a href="/usermanagement">gestion des comptes</a> </button></div>--> 
</div></center>  

<div style=" width: 90%;; 
    color:blue; 
    position:absolute; 
    top:50%; 
    left:50%; 
    transform:translate(-50%,-50%); 
    text-align:center;" ><h1>Gestion des Mission a l'etrangere</h1></div>
    </body>
</html>
