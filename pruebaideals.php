<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<link rel="stylesheet" href="http://necolas.github.io/normalize.css/2.1.3/normalize.css">
<link rel="stylesheet" href="librerias/idealforms/css/jquery.idealforms.css">
<meta charset=utf-8 />
<title>Intekra</title>
<style>
  body {
    max-width: 980px;
    margin: 2em auto;
    font: normal 15px/1.5 Arial, sans-serif;
    color: #353535;
    overflow-y: scroll;
  }
  .content {
    margin: 0 30px;
  }

  .field.buttons button {
    margin-right: .5em;
  }

  #invalid {
    display: none;
    float: left;
    width: 290px;
    margin-left: 120px;
    margin-top: .5em;
    color: #CC2A18;
    font-size: 130%;
    font-weight: bold;
  }

  .idealforms.adaptive #invalid {
    margin-left: 0 !important;
  }

  .idealforms.adaptive .field.buttons label {
    height: 0;
  }
</style>
</head>
<body>

  <div class="content">

    <div class="idealsteps-container">

      <nav class="idealsteps-nav"></nav>

      <form action="accionNewClient.php" novalidate autocomplete="off" class="idealforms">

        <div class="idealsteps-wrap">

          <section class="idealsteps-step">

            <div class="field">
              <label class="main">Nombre/Razon Social:</label>
              <input name="nombre" type="text" data-idealforms-ajax="ajax.php">
              <span class="error"></span>
            </div>

            <div class="field">
              <label class="main">Nombre del Contacto:</label>
              <input name="contacto" type="text" data-idealforms-ajax="ajax.php">
              <span class="error"></span>
            </div>

            <div class="field">
              <label class="main">E-Mail:</label>
              <input name="email" type="email">
              <span class="error"></span>
            </div>

           <div class="field">
              <label class="main">Telefono:</label>
              <input name="phone" type="text" placeholder="000-000-0000">
              <span class="error"></span>
            </div>

           <div class="field">
              <label class="main">Dirección:</label>
              <textarea name="direccion" cols="20" rows="6"></textarea>
              <span class="error"></span>
            </div>

            <div class="field">
              <label class="main">Referencias:</label>
              <textarea name="referencia" cols="20" rows="6"></textarea>
              <span class="error"></span>
            </div>
            
            <div class="field">
              <label class="main">Datos de facturación:</label>
              <textarea name="facturacion" cols="20" rows="6"></textarea>
              <span class="error"></span>
            </div>

            <div class="field">
              <label class="main">Picture:</label>
              <input id="picture" name="picture" type="file" multiple>
              <span class="error"></span>
            </div>
           
            <div class="field buttons">
              <button type="submit" class="submit">Enviar</button>
            </div>

          </section>

        </div>

        <span id="invalid"></span>

      </form>

    </div>

  </div>

  <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
  <script src="librerias/idealforms/js/out/jquery.idealforms.js"></script>
  <!--<script src="js/out/jquery.idealforms.min.js"></script>-->
  <script>

    $('form.idealforms').idealforms({

      silentLoad: false,
       steps: {
    	  MY_stepsItems: ['Datos del cliente', 'Datos de la ODS'],
    	  buildNavItems: function(i) {
    	    return this.opts.steps.MY_stepsItems[i];
    	  }
    	},

      rules: {
      },

      errors: {
        'username': {
          ajaxError: 'Username not available'
        }
      }
    });

  


   
  </script>
</body>
</html>
