<!DOCTYPE html>
<html>
  <head>
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
    <script src="js/js-bootstrap/bootstrap.min.js"></script>  
    <script src="js/plugins/jquery.backstretch.min.js"></script>
    <link rel="stylesheet" href="css/stylesLogin.css">
  
  </head>
  
  <body>    
    <div class="container main-container">
      <form class="" action="siteAndres.php" method="post">
        <div class="container main-container__internal-one">
          <h2>Iniciar Sesión</h2>
          <div class="main-container__internal-one__container-imagen">
             <img src="img/Andres.jpg" class="main-container__internal-one__container-imagen--imagen" alt="imagen">
          </div>
        </div>
        <div class="container main-container__internal-two">
            <div class="input-group main-container__internal-two__input">
              <input type="text" class="form-control" name="nombreUsuario" placeholder="Nombre">
            </div>
            <div class="input-group main-container__internal-two__input">
              <input type="password" class="form-control" name="contrasenia" placeholder="Contraseña">
            </div>
            <input class="btn btn-primary main-container__internal-two__button" type="submit" name="btnBusqueda" value="Ingresar" ></input>  
        </div>
      </form>
    </div>
    
    <script src="js/plugins/prefix.js"></script>
    <script src="js/login.js"></script>   
    <script>
     jQuery.backstretch(["img/login1.jpg","img/login2.jpg", "img/login3.jpg","img/login4.jpg"], {duration: 4000, fade: 1000});
    </script>
  </body>
</html>
