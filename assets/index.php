<?php
session_start();
if(isset($_SESSION['usuario'])){
    header("location: bienvenido.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Roboto+Mono:wght@300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Russo+One&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>login</title>
</head>
<body>
    <main>

      <div class="contenedor__todo">

      <div class="caja__trasera">
      <div class="caja__trasera-login">
           <h3>¿ya tienes una cuenta?</h3>
           <p>Inicia Sesión para entrar en la pagina</p>
           <button id="btn__iniciar-Sesion">Iniciar Sesión</button>
      </div>
      <div class="caja__trasera-register">
        <h3>¿Aun no tienes una cuenta?</h3>
        <p>Registrate para entrar en la pagina</p>
        <button id="btn__registrarse">Registrarse</button>
            </div>
               </div>

                <div class="contenedor__login-register" >
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">

                <h2>Iniciar Sesión</h2>
                <input type="text"  placeholder="Correo Eletronico"  name="correo" >
                <input type="password" placeholder="Contraseña" name="contrasena">
                <button>Entrar</button>

                </form>

                <form action="../php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Eletronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrarse</button>
                </form>
          </div>
       </div>
    </main>
          <script src="../js/script.js"></script>
</body>
</html>