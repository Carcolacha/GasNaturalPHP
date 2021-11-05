<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Urbina Edwyn Uriel</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<div class="wrapp">
			<div class="logo">
				<a href="#"><img src="img/logo-gasnn-jrz.png" alt="FalconMasters"></a>
			</div>
			<nav>
				<ul>
					<li><a href="index.php">Inicio</a></li>
					<li><a href="empleado.php">Empleado</a></li>
					<li><a href="usuario.php">Usuario</a></li>
					<li><a href="ventas.php">Ventas</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Gas Natural</h1>
			</div>

			<div class="articulo">
                <h2 class="Empleado">Empleado</h2>
                <p class="datos">Los datos requeridos son para la  transferencia de informacion a la base de datos con el fin de guardar y capturar al empleado como publicamente se requiere</p>
                <form action="/action_page.php" method="get">
                    <label for="fname">Nombre del Empleado:</label>
                    <input type="text" id="fname" name="fname"><br><br>
                    <label for="lname">Edad:</label>
                    <input type="text" id="lname" name="lname"><br><br>
                    <label for="fname">Genero:</label>
                    <input type="text" id="fname" name="fname"><br><br>
                    <label for="fname">Salario:</label>
                    <input type="text" id="fname" name="fname"><br><br>
                    <label for="fname">Experiencia:</label>
                    <input type="text" id="fname" name="fname"><br><br>
                    <input type="submit" value="Submit">
                </form>
			</div>
		</div>
	</section>
	<footer>
		<div class="wrapp">
            <p> No lista 49 </p>
            <p> 
                Desarrolla aplicaciones Web con conexión a bases de datos</p>
		</div>
	</footer>
</body>
</html>