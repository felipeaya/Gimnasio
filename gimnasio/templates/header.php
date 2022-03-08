<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEO GYM </title>
    <link rel="icon" href="img/logo.png"/>
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
    <!--<link rel="stylesheet" href="./css/estilos.css"/>-->

</head>
<body>
    
 <header>
     <div class="container">     
         <nav class="navbar navbar-expand navbar-light bg-light float-right">
              <a class="navbar-brand" href="index.php">
                  <img src="img/logonav.jpg" width="50" height="50" alt="">
              </a>
              <ul class="navbar-nav ml-auto">   <!--  nav navbar-nav-->
                  <li class="nav-item">
                     <a class="nav-link" href="index.php">Inicio </a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" href="servicios.php">Servicios</a>
                  </li>
                      
                     <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                   </li>
                 
                   <?php $url="http://".$_SERVER['HTTP_HOST']."/gimnasio/blog" ?>
                   <li class="nav-item">
                     <a class="nav-link" href="<?php echo $url;?>">Blog</a>
                  </li>

                  <?php $url1="http://".$_SERVER['HTTP_HOST']."/gimnasio/admin" ?>
                   <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="desplegable" href="<?php echo $url1;?>">Registro</a>
                       <div class="dropdown-menu">
                           <a href="#" class="dropdown-item">Administrador</a>
                       </div>
                   </li>  
                 </ul>
           </nav> 
    </div>
</br> 
    </header>
<br/>


   