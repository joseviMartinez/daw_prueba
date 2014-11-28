<?php
	//Herencia
	require_once "pagina.php";
	require_once "bd.php";
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
	$pagina->getPagina();
	//Creamos la tabla
	$db = new db();
	$db->conectar_base_datos();
	$db->getInfo();
	echo $db->getLugares(1);
	$pagina->getpie();
?>

<body>
</body>
</html>