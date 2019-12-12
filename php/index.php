<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="estilos.css" />
</head>

<body>

  <h2>Acceso como Administrador</h2>
  usuario ELBA password 1234


  <form action="comprueba_login.php" method="POST">
    <!--// LA PAGINA DONDE SE COMPROBARA EL LOGIN nos redirije
                                                               cuando pulse el boton de enviar y el metodo que vamos a utilizar  -->
    <input type="text" name="login" placeholder="usuario" class="input-100" required>
    <input type="password" name="password" placeholder="Contraseña" class="input-48" required>
    <input type="submit" name="enviar" value="LOGIN" class="btn-enviar">
  </form>
  <p>problemas para accede pincha-><a href="../index.html"> aqui</a></p>

  <div>
    <form action="signup.php" method="POST">
      <label for="">Nombre</label>
      <input name="nombre" type="text" placeholder="nombre">
      <label for="">Apellido</label>
      <input name="apellido" type="text" placeholder="apellido">
      <label for="">Email</label>
      <input name="email" type="text" placeholder="Enter your email">
      <label for="">Password</label>
      <input name="password" type="password" placeholder="Enter your Password">
      <label for="">Confirma tu password</label>
      <input name="confirm_password" type="password" placeholder="Confirm Password">
      <input type="submit" value="Submit">
    </form>
  </div>
</body>

</html>
