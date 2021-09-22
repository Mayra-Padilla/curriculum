<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<title>Mi curriculum</title>
</head>
<body>
<?php
	$conexion = new mysqli("localhost","mayraDB","1009","curriculum");
	$contactoSQL="SELECT * FROM contacto";
	$habilidadesSQL = "SELECT * FROM habilidades";
	$idiomasSQL = "SELECT * FROM idiomas";
	$perfilSQL = "SELECT * FROM perfilProfesional";
	$formacionSQL = "SELECT * FROM formacionAcademica";
	$experienciaSQL = "SELECT * FROM experienciaProfesional";
	$referenciasSQL = "SELECT * FROM referenciasPersonales";

	$contacto = $conexion->query($contactoSQL);
	$habilidades = $conexion->query($habilidadesSQL);
	$idiomas = $conexion->query($idiomasSQL);
	$perfil = $conexion->query($perfilSQL);
	$formacion = $conexion->query($formacionSQL);
	$experiencia = $conexion->query($experienciaSQL);
	$referencias = $conexion->query($referenciasSQL);

	$dc = $contacto->fetch_assoc();
	$dh = $habilidades->fetch_assoc();
	$di = $idiomas->fetch_assoc();
	$dp = $perfil->fetch_assoc();
	$df = $formacion->fetch_assoc();
	$de = $experiencia->fetch_assoc();
	$dr = $referencias->fetch_assoc();
?>
	<div id="hoja">
		<div id="barraIzq">
			<img src="img/Foto.jpeg" alt="Mi foto">
			<section id="contacto">
				<h2>Contacto</h2>
				<hr>
				<ul>
					<li><?php echo $dc['lugarNacimiento']; ?></li>
					<li><?php echo $dc['telefono'];?></li>
					<li><?php echo $dc['correo']; ?></li>
					<li><?php echo $dc['nombre']; ?></li>
					<li><?php echo $dc['fechaNacimiento']; ?></li>
				</ul>
			</section>
			<section id="habilidades">
				<h2>Habilidades</h2>
				<hr>
				<ul>
					<li><?php echo $dh['desHabilidades']; ?></li>
				</ul>
			</section>
			<section id="idioma">
				<h2>Idiomas</h2>
				<hr>
				<ul>
					<li><?php echo $di['idioma']; ?></li>
				</ul>
			</section>
		</div>
		<div id="contenedor">
			<div id="encabezado">
				<div>
					<h1>Mayra Edith Padilla Vazquez</h1>
					<h3>Estudiante de Ingeniería en Sistemas Computacionales</h3>
				</div>
			</div>
			<div id="barraDer">
				<section id="perfilProfesional">
					<h2>Mi perfil profesional</h2>
					<p><?php echo $dp['descripcion']; ?></p>
				</section>
				<section id="formacionAcademica">
					<h2>Formación académica</h2>
					<ul>
						<li><?php echo $df['universidad']; ?></li>
						<li><?php echo $df['preparatoria']; ?></li>
						<li><?php echo $df['secundaria']; ?></li>
						<li><?php echo $df['primaria']; ?></li>
					</ul>
				</section>
				<section id="experienciaProfesional">
					<h2>Experiencia profesional</h2>
					<ul>
						<li><?php echo $de['descripcion']; ?></li>
					</ul>
				</section>
				<section id="referencias">
					<h2>Referencias personales</h2>
					<ul>
						<li><?php echo $dr['descripcion']; ?></li>
					</ul>
				</section>
			</div>
		</div>
	</div>
</body>
</html>
