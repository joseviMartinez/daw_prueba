<?php
/**
* Elemento base
*
*Esta clase es la encargada de escribir un trozo de páginas en código html
*dicho código consiste en un título y en un contenido
*
*@version 1.0
*/ 
class autenticar{
	/**
	*constructor
	*
	*/
	function __construct(){
		// iniciamos la sesión
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
	}
	
	/**
	*Realiza la comprobacion de la autentificacion de registro de usuario
	*
	*/
	public function security(){
		//comnprueba que el usuario esta autentificado
		if($_SESSION["autentificado"] !="SI"){
			//si no existe, envia te encia a la página para autenricarte
			header("Location: index.php?errorusuario=si");
			//además sale de este script
			exit();
		}
	}
	/**
	*Realiza la comprobacion de la autentificacion de registro de usuario
	*
	*/
	public function isAuth(){
		//comprueba que ele usuario esta autentificado
		if(isset($_SESSION["autentificado"])){
			if($_SESSION["autentificado"] != "SI") {
				return false;
			}else{
				return true;
			}
			}
		}
		
		/**
		*Realiza la salida del gestor
		*
		*/	
		public function salir(){
			session_unset();
			session_destroy();
		}
		/**
		*checkea el usuario y la contraseña del usuario
		*
		*@param usr usuario
		*@param pass password
		*/
		public function checkAuth($usr,$pass){
			//vemos si el usuario y contrasela son válidos
			if($usr=="josevi" && $pass=="jose"){
				//usuario y contrasaeña válidos
				// definimos sesiíon y guadamos datos
				$_SESSION["autentificado"]= "SI";
				header ("Location:index.php");
			}else{
				//si no existe, le mando otra vez  a la portada
				header("Locaton:index.php?errorusuario=si");				
			}
		}
}
?>