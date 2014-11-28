<?php
	//Herencia
	require "pagina.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" href="styles.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
</head>
<?php
	//vemos las pagina predefinids con las filas y columnas que queramos.
	$pagina = new pagina();
	$pagina->indice("Inicio","Estas en la pagina de Inicio");
	$pagina->getPagina();
	$pagina->getpie();
?>

<body>
</body>
</html>