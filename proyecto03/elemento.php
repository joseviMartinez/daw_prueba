<?php
class elemento
{
	//variable que almacena el titulo del elemento
	public $titulo;
	//variable qiue almacena el contenido del elemento
	public $contenido;
	
	//Constructor
	function __constructor()
	{
		$this->titulo = "" ;
	}
	//almacenamos en el contenido el códifo html a escribir
	public function setContenido($str)
	{
		$this->contenido=$str;
	}
	
	//almacenamos en el titulo el código html a escribir
	public function setTitulo($str)
	{
		$this->titulo=$str;
	}
	
	//Devolvemos el elemento
	function __toString()
	{
		return "</br>".$this->titulo."</br>".$this->contenido."</br>";
	}
}
?>