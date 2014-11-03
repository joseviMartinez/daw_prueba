<?php
require_once "elemento.php";

class pie extends elemento
{
	
	//en este caso no tendra titulo
	function __construct()
	{
		$this-> setTitulo("");
	}
	//funcion que define el contenido del pie
	function setPie()
	{
		$str="";
		$str="<hr><center>Hola holita vecinitos</center></hr>";
		$this->setContenido($str);
	}
}
?>