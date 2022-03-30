{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>ThatzWeather</title>
</head>
<body>
    <div class="row justify-content-center">
        <div class="col-4 card mt-2 p-2 text-center">
            <form>
                <div class="mb-3">
                    <label for="exampleInputCodigoPostal" class="form-label mb-5">Entérate del tiempo en la zona exacta que te interesa<br/>buscando por código postal</label>
                    <input type="text" class="form-control" id="CodigoPostal" aria-describedby="CodigoPostalHelp" placeholder="Introduce el código postal">
                </div>
                <button type="submit" class="btn btn-primary w-100">Buscar</button>
            </form>
            <div id="CodigoPostalHelp" class="form-text mt-5">¡Que la lluvia no te pare!</div>
        </div>
    </div>

    <div class="container">
        <h1>Publicaciones</h1>
        @foreach($posts as $post)
        <div class="card mt-2">
            <div class="card-body">
                <a href="/posts/{{ $post->id }}">
                    {{ $post->title }}
                </a>
            </div>
        </div>            
        @endforeach
    </div>
</body>
</html>
 --}}


 <?php 
 // Para resolver el error presentado cuando es introducida una ciudad que no existe. (El error es de la API)
 error_reporting(E_ERROR);
 

 
 ?>
 
 <!DOCTYPE html>
 <html lang="es">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
     <title>Weather - API</title>
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 
     <style>
         html{
             background: url(http://placeimg.com/1000/1000/arch) no-repeat center center fixed;
             background-size: cover;
         }
         body{
             /*background: none;*/
         }
         .w3-container{
             text-align: center;
             margin-top: 20vh;
             width: 40vw;
             height: 60vh;	
             padding: 40px;			
         }
         input{
             margin: 20px 0;
         }
         #previsionTiempo{
             margin-top: 30px;
         }
         h1, label{
             color: white;
             font-weight: 800;
             text-shadow: 1px 1px 1px black,
                          -1px -1px 1px black;
         }
         label{
             font-size: 20px;
         }
     </style>
 </head>
 <body>
     <div class="w3-container w3-display-middle">
         <h1>¿Qué tiempo hace?</h1>
         <form class="w3-margin" action="">
             <fieldset class="w3-padding w3-margin">
                 <label for="zipCode">Introduce el nombre de una ciudad:</label>
                 <input type="text" class="w3-padding" id="zipCode" name="zipCode" placeholder="Por ej. 08055" value="<?php echo isset($ciudad) ? $ciudad : "" ?>">
             </fieldset>
             <button type="submit" class="w3-button w3-black">Buscar</button>
         </form>
         <div id="previsionTiempo">
             <?php 
                 if($prevision){
                     echo "<div class='w3-panel w3-green w3-padding-24' role='alert'>".$prevision."</div>";
                 }else if($error!=""){
                     echo "<div class='w3-panel w3-red w3-padding-24' role='alert'>".$error."</div>";					
                 }
             ?>
         </div>
     </div>
 </body>
 </html>