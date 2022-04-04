<?php 
 error_reporting(E_ERROR); 
?>
 
 <!DOCTYPE html>
 <html lang="es">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
     <title>Weather - API</title>
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
 </head>
 <body>
     <div class="w3-container w3-display-middle">
         <h1>Thatz<img class="icons w3-opacity" src="img/bolt-lightning-solid.svg" alt="imagen de rayo">Weather</h1><i class="fa-solid fa-bolt-lightning"></i>
         <form class="w3-margin" action="">
             <fieldset class="w3-padding w3-margin">
                 <p for="zipCode">Entérate del tiempo en la zona exacta que te interesa<br/>buscando por código postal.</p><br/>
                 <input type="text" class="w3-padding" id="zipCode" name="zipCode" placeholder="Introduce el código postal" value="<?php echo isset($ciudad) ? $ciudad : "" ?>">
             </fieldset>
             <button type="submit" class="w3-button w3-blue w3-round">Buscar</button>
         </form>
         <div id="previsionTiempo">
             <?php 
                 if($prevision){
                     echo "<div class='w3-panel w3-teal w3-text-white w3-padding-24' role='alert'>".$prevision."</div>";
                 }else if($error!=""){
                     echo "<div class='w3-panel w3-red w3-padding-24' role='alert'>".$error."</div>";					
                 }
             ?>
         </div>
     </div>

     <div class="w3-card-4 w3-opacity w3-Steel w3-text-white bkg-1">
        <div class="w3-row">
          <div class="w3-third w3-center">
            <h3>MON</h3>
            <img class="icons" src="img/sun-regular.svg" alt="sun">
          </div>
          <div class="w3-third w3-center">
            <h3>TUE</h3>
            <img class="icons" src="img/cloud-solid.svg" alt="cloud">
          </div>
          <div class="w3-third w3-center w3-margin-bottom">
            <h3>WED</h3>
            <img class="icons" src="img/cloud-bolt-solid.svg" alt="clouds">
          </div>
        </div>
      </div>

 </body>
 </html>