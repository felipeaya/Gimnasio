<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>LEO GYM</title>
	<link rel="icon" href="images/logo.png"/>
	<link rel="stylesheet" href="<?php echo RUTA; ?>/css/estilos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
	<header>
		
	<?php $url="http://".$_SERVER['HTTP_HOST']."/gimnasio" ?>
		<div class="contenedor">
			<div class="logo izquierda">
			</br>
				<a href="<?php echo  $url; ?>">

				<img src="images/logo.png">
				</a>
			</div>
            <div class="derecha">
                <form action="<?php echo RUTA; ?>/buscar.php" method="get" name="busqueda" class="buscar">
					<input type="text" name="busqueda" placeholder="Search">
					<button type="submit" class="fa fa-search"></button>
				</form>
				<nav class="menu">
					<ul>
						<li> 
							<a href="·"> <i class="fa fa-twitter"></i></a>
						</li>
						<li> 
							<a href="https://www.facebook.com/Leo-Gym-1745496099088718"  target="_BLANK"> <i class="fa fa-facebook"></i></a>
						</li>
						<li> 
							<a href="#">Contacto <i class="icono fa fa-envelope"></i></a>
						</li>

					</ul>

				</nav>
            </div>
			
		</div>
	</header>
</body>
</html>