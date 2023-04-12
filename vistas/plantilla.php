<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php echo COMPANY;?></title>

	<!-- Main container -->
    <?php include "./vistas/inc/css.php"?>


</head>
<body>
	<?php 
	$peticionAjax=false;
	require_once "./controladores/vistasControlador.php";
	$IV = new vistasControlador();

	$vistas=$IV->obtener_vistas_plantilla();

	if($vistas=="login" || $vistas=="404"){
		require_once "./vistas/contenidos/".$vistas."-view.php";
	}else{

	
	?>
	<!-- Main container -->
	<main class="full-box main-container">

		<!-- Nav lateral -->
		<?php 
		include "./vistas/inc/navLateral.php";

		include $vistas;
		?>
	</main>
	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<?php }
	include "./vistas/inc/script.php"?>
</body>
</html>