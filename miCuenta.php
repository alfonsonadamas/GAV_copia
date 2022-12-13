<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="shortcut icon" href="img/Mi proyecto (1).png" type="image/x-icon">
    <title>Sitio Web Oficial de GAV Sneakers</title>
</head>
<body>

<nav>
       
       <img src="img/Mi proyecto (1).png" alt="">
       <ul class="nav">
           <li><a href="">Nuevos Lanzamientos</a></li>
           <li><a href="">Hombre</a></li>
           <li><a href="">Mujer</a></li>
           <li><a href="">Niño</a></li>
           <a href=""><img src="img/bolsa-de-la-compra.png" alt=""></a>
           

           <?php
               if(isset($_SESSION['username'])){
                   
               
           ?>
               <a href="#" onclick="display();" ><img src="img/perfil.png" alt=""></a>

           <?php
               
               }else{

               
           ?>
               <a href="login.php?error=0"><img src="img/perfil.png" alt=""></a>

           <?php
               }
           ?>
           
       </ul>

       
   </div>

   
       
       
   </nav>

   <div class="user" id="display">
        <p>Bienvenido, <?php echo $_SESSION['name']; ?></p>
        <a href="miCuenta.php">Mi cuenta</a>
        <a href="">Favoritos</a>        
        <a href="cerrar_sesion.php">Cerrar Sesion</a>        
    </div>
    
</body>
<script src="js/login.js"></script>
</html>