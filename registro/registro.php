

<?php
session_start();
include 'lib/config.php'

?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/campeones.css">
    <link rel="stylesheet" href="css/registro.css">

    <link rel="icon" href="img/L.ico">

	<title>Ingresar</title>
</head>
<body>
	
<div class="contenedorImagen">
                <header>
                        <div class="contenedor">
                            
                            
                            <h1 class="icon-gamepad">KAEDRA</h1>
                            
                            <input type="checkbox" id="menu-bar">
                       
                        <label class="icon-menu-1" for="menu-bar"></label>
                        
                        <nav class="menu">
                                
                                        
                                            <a href="index.html"  class="nav-link" style="color: rgb(255, 255, 255)">Inicio</a>  
                                        
                                            <a href="www.google.com.ar" target=new() class="nav-link" style="color: rgb(255, 255, 255)">Videos</a>  
                                       
                                           <a href="www.google.com.ar" target="new()" class="nav-link" style="color:rgb(255, 255, 255)">Ingresar</a>
                                            
                                            <a href="www.google.com.ar" target="new()" class="nav-link" style="color:rgb(255, 255, 255)">Registrarse</a></nav>
                                            </div>
                    </header>
                    
	<div class="container">
	
    <div class="row">
        <div class="col-12">
            <h2>
                Registrate! Es gratis.
            </h2>
            <br>
            <form method="post" action="registrousuario.php">
                   
            <div class="form-group">
                 
                <input type="text" name="nombre" class="form-control" placeholder="Nombre">

            </div>
            <div class="form-group">
            <div class="form-group">
                
                <input type="mail" name="mail" placeholder="Mail" class="form-control">
                
            </div>
                
                <input type="text" name="usuario" placeholder="Usuario" class="form-control">
                
            </div>
            <div class="form-group">
                
                <input type="password" name="contraseña" placeholder="Contraseña" class="form-control">
                
            </div>
            <button type="submit" class="btn btn-dark btn-block">Registrarse</button>
        </form>
        </div>

    </div>

</div>
        
                </div>
                <footer>
      <div class="contenedor">
        <p class="copy">Kaedra &copy; 2019 </p>
          <div class="redes">
            <a class=" icon-mail-alt" href=""></a>
            <a class= "icon-twitter" href=""></a>
            <a class="icon-instagram" href=""></a>
            <a class="icon-linkedin" href=""></a>
          </div>
      </div>
    </footer>

                </body>
</html>