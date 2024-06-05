<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body>
    <header>
      <br>
      <table>
      <tr>
    <center><h3>Ingreso al sistema</h3></center>
   <br>
  </table>
</header>

<div id="contenedor">
  <form action="logueado.php" method="post" >

  <div class="mb-3">
    <img src="img/usuario.png"><label for="exampleInputEmail1" class="form-label"> Usuario </label>
    <input  type="text" name="id_usuario" class="form-control" aria-describedby="emailHelp">
    
  </div>

  <div class="mb-3">
    <img src="img/contrasena.png"> <label for="exampleInputPassword1" class="form-label">Contraseña</label>
     <input  type="password" name="psw" class="form-control">
  </div>


  <center><input type="submit" value="Iniciar Sesion"class="btn btn-dark"></button> </center>

</form>

</div>


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>