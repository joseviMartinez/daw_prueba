<?php
//Ponemos las herencias
require_once "cabecera.php";
require_once "cuerpo.php";
require_once "pie.php";
require "bd.php";
//Iniciamos la clase
class pagina
{
	//Ponemos las variables
	public $titulo="TITULO DE LA PAGINA";
	private $cabecera,$cuerpo,$pie;
	
	//Empezamos el function y le ponesmos que nos pida las flias y columnas
	function __construct()
	{
		$this->cabecera = new cabecera();
		$this->cabecera->construirMenu();
		$this->cuerpo = new cuerpo;
	}
	function getpie(){
		$this->pie = new pie;
		$this->pie->setPie();
		echo $this->pie;
	}
	//function indice($titulo,$texto){
		//		$this->cuerpo->setTexto($titulo,$texto);
//}
	function indice($titulo,$texto){
		$this->cuerpo->indice($titulo,$texto);
	}
	function fotos($filas,$columnas){
				$this->cuerpo->setTabla($filas,$columnas);
}
	function getPagina()
	{
		echo $this->cabecera.$this->cuerpo;
	}
	function setCuerpoContenido($titulo,$srt){
		$this->cuerpo->setContenidoSimple($titulo,$srt);
	}
	function setCuerpoContenidoLugares($titulo){
		$db=new db("localhost","root","4win121,F","viajes");
		$db->conectar_base_datos();
		$this->cuerpo->setContenidoSimple($titulo,$db->getLugares());
		
		}	
}
?>