<?php

    $nam = $_REQUEST['name'];
    $usr = $_REQUEST['user'];
    $clv = $_REQUEST['clave'];
    //Convertimos la contraseña en HASH
    $clvS = MD5($clv);
    
    $link = mysqli_connect("localhost","root","");
    mysqli_select_db($link,"proyecto_final");
    mysqli_query($link,"INSERT INTO `customers` (`dnipa`, `nombre`, `seguro`, `tele`, `sexo`, `usuario`, `clave`, `cargo`, `estado`) VALUES('','$nam','','','','$usr','$clvS','2','0')");
    mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>Registrate</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css " href="assets/css/style.css">
  <link rel="stylesheet" type="text/css " href="assets/css/css/all.min.css">
  <link rel="stylesheet" href="assets/css/sweetalert.css">
</head>

<body>
  <!--  <img class="wave"src="../assets/img/wave.png" alt="">  -->
  <div class="contenedor">
    <div class="img">
      <img src="assets/img/bg.svg" alt="">
    </div>
    <div class="contenido-login">

      <form id="formulario_registro" method="post" action="registroCompleto.php">
      
        <img src="assets/img/logo.png" alt="">
        <h2>
          USUARIO
          <br>REGISTRADO
          <br>CORRECTAMENTE
        </h2>

        <button class="btn" type="button" onclick="location.href='../admin/login.php'" style="background-color: rgb(0,168,138);">Acceder
        </button>

      </form>

    </div>
  </div>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/sweetalert.min.js"></script>
  <!-- Js personalizado -->
  <script src="assets/js/operaciones.js"></script>

</body>

</html>