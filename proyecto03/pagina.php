<?php
require_once "cabecera.php";
require_once "cuerpo.php";
require_once "pie.php";

class pagina
{
	public $titulo="TITULO DE LA PAGINA";
	private $cabecera,$cuerpo,$pie;
	
	function __construct()
	{
		$this->cabecera = new cabecera();
		$this->cabecera->construirMenu();
		$this->cuerpo = new cuerpo();
		$this->pie = new pie();
		$this->pie->setPie();
	}
	function getindice($titulo,$texto){
		$this->cuerpo->setTexto($titulo,$texto);
	}
	function getfotos($titulo,$filas,$columnas){
				$this->cuerpo->setTabla($titulo,$filas,$columnas);
	}
	function getcontacto($titulo,$texto){
		$this->cuerpo->setTexto($titulo,$texto);	
	}
	
	function getPagina()
	{
		echo $this->cabecera.$this->cuerpo.$this->pie;
	}
}
?>