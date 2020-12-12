<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Nerdify</title>
   <link rel="stylesheet" href="css/styles.css">
</head>

<body class="body">
<header>
         <h2>Eliexer Urbina 
            <br/>
            Developer Jr</h2>
      </header>
      
   <div class="row">
      <div class="formulario">

         <div>
            <label for="fname">Texto</label>
            <input type="text" id="titulo" name="firstname" placeholder="Titulo..">

            <label for="lname">Descripcion</label>
            <input type="text" id="descripcion" name="lastname" placeholder="Descripcion..">

            <input type="checkbox" id="checkbox1" name="vehicle1" value="1">
            <label for="vehicle1">Confirmar</label><br>
            <br>

            <input type="submit" id="enviardatos" value="Enviar">
         </div>

      </div>
                 
      <div class="datosmostrados">
         <div id="mostrartodo"></div>
      </div>

   </div>

   
</body>

<script src="js/ajax.js"></script>

</html>