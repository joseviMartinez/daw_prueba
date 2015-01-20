
<?php
	require "pagina.php";
	require_once "autenticar.php";
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="styles.css" >
<?php
	$auth=new autenticar();
//comprobamos la seguridad siempre que no estemos en inicio o contacto


	if(isset($_GET["id"])){
		if($_GET["id"]==2){
			$auth->security();
		}
	}
	if(isset($_GET["autenticar"])){
		
		//comprobamos la autentificacion
		if($_Get["autenticar"]=="SI") {
			$auth->checkAuth($_POST["usuario"],$_POST["contrasena"]);
		}
	}
	if(isset($_GET["salir"])){
	//comprobamos la autentificacion
	if($_GET["salir"]=="SI"){
		$auth->salir();
	}
}	
?>
</head>

	
	
    
    
   <?php
   	if(isset($_SESSION["autentificado"])){
		if($_SESSION["autentificado"]="SI"){
   ?>
   
   <a href="salir.php" id="cssmen">Salir de la sesion</a>
   
   <?php
		
		}else{
	?>
     <style>
	#cssmen{
		float:right;}
		</style>
    <form action="control.php" method="POST" id="cssmen">
        <table align="center" width="225" cellspacing="2" cellpadding="2" border="0">
        	<tr>
        		<td colspan="2"></td>
      			<td><input type="Text" name="usuario" size="8" maxlength="50" placeholder="usuario"> </td>
      			<td><input type="password" name="contrasena" size="8" maxlength="50" placeholder="contraseña"></td>
        		<td colspan="2"><input type="Submit" value="ENTRAR"></td>
        	</tr>
        </table>
    </form> 
    <?php
		}
	}else{
	?>
     <style>
	#cssmen{
		float:right;}
		</style>
    <form action="control.php" method="POST" id="cssmen">
        <table align="center" width="225" cellspacing="2" cellpadding="2" border="0">
        	<tr>
        		<td colspan="2"></td>
      			<td><input type="Text" name="usuario" size="8" maxlength="50" placeholder="usuario"> </td>
      			<td><input type="password" name="contrasena" size="8" maxlength="50" placeholder="contraseña"></td>
        		<td colspan="2"><input type="Submit" value="ENTRAR"></td>
        	</tr>
        </table>
    </form> 
    <?php
	}
	?>	
    <?php		
		if(isset($_GET["errorusuario"])){
			if($_GET["errorusuario"]=="si")
			{
				echo "<h3>Usuario y contraseña incorrectos</h3>";
			}
		}
	?>
    
	<?php
	//vemos las pagina predefinidas con las filas y columnas que queramos.
	
	$pagina = new pagina();
	//$pagina->setCabecera();
	if(isset($_GET ["id"]))
	{
		switch($_GET["id"]){
			case 1:
				$pagina->indice("Inicio","Estas en la pagina de Inicio");
			break;
			case 2:
				$pagina->setCuerpoContenidoLugares("Lugares");
			break;
			case 3:
				$pagina->indice("Contacto","Estas en Contacto");
			break;
			default:
				$pagina->indice("Necesitas estar registrado","No puedes acceder a este apartado");
		}
	}else{
		
		$pagina->indice("Necesitas estar registrado","No puedes acceder a este apartado");
			
	}
	
	$pagina->getPagina();
	$pagina->getpie();
?>
</body>
</html>