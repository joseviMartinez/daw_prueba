<?php
require_once "elemento.php";
class pie extends elemento
{
	
	//En este caso no tendrá titulo
	function __construct()
	{
		$this->setTitulo("");	
	}
	
	//Funcion que define el menu de la cabecera
	function setPie()
	{
		$str="";
		$str="<hr><center>hola mensito</center></hr>";
		$this->setContenido($str);
	}
	
}
?>