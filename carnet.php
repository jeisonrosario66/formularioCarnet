<?php 
	$carpeta = "fotos/";
	opendir($carpeta);
	$destino = $carpeta.$_FILES['foto']['name'];
	copy($_FILES['foto']['tmp_name'],$destino);

	$foto = $_FILES['foto']['name'];  
	$dato_1 = $_POST['dato_1'];
	$dato_2 = $_POST['dato_2'];
	$dato_3 = $_POST['dato_3'];
	$fecha = date('y/m/d');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Formulario de Carnet</title>
	<link href="https://fonts.googleapis.com/css?family=Lato|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body class="carnet-final">
	<div class="contenedor contededor_final">
		<div class="title">
			<h1>Carnet completo</h1>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
				Optio iure fugit nulla neque eligendi. 
				Molestias rem provident facilis a optio unde? 
				Deserunt tenetur at eius a cumque nemo, voluptates iure!
			</p>
		</div>
		<section class="carnet" id="carnet">
			<div class="delantera">
				<!-- -contenido de la cara delantera -->
				<div class="flexbox-datos">
					<img class="foto" id="foto" <?php echo "<img src=\"fotos/$foto\""?>></img>
					<div class="datos-delanteros">
						<div class="grupo grupo_a">
							<p class="label">Dato 1:</p>
							<p class="dato_1_inp"><?php echo $dato_1; ?></p>
						</div>
					</div>
				</div>
			</div>
			<!-- -contenido de la cara trasera -->
			<div class="trasera">
				<div class="flexbox-datos">
					<div class="datos-trasera">
						<div class="grupo grupo_b">
							<p class="label">Dato 2:</p>
							<p class="dato_2_inp"><?php echo $dato_2; ?></p>
						</div>
						<div class="grupo grupo_c">
							<p class="label">Dato 3:</p>
							<p class="dato_3_inp"><?php echo $dato_3; ?></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="contact">
			<a  href=""><img src="img/iconosredessociales.png"></a>
		</div>
	</div>
	<script type="text/javascript">
		window.onload = function descargar(){
		   const  $objetivo = document.body;

		   html2canvas($objetivo) // Llamar a html2canvas y pasarle el elemento
		    .then(canvas => {
		      // Cuando se resuelva la promesa traerá el canvas
		      // Crear un elemento <a>
		      let enlace = document.createElement('a');
		      enlace.download = "Carnet-Lleno.png";
		      // Convertir la imagen a Base64
		      enlace.href = canvas.toDataURL();
		      // Hacer click en él
		      enlace.click();
		    });
		}
	</script>
</body>
</html>



