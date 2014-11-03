
<?php
require_once "elemento.php";
/** 
* Cabecera
*
*El objetivo de esta Clase es encargarse de la parte superior de la página a representar
*siendo el elemento más importante a representar el menu
*
*@author Josevi Martinez
*
*@version 1.0
*/

class cabecera extends elemento
{
	/**
	*menu del site
	*
	*Almacena el menu del site con la siguiente elementos
	*"home"=>array(
					"txt"="Inicio",
					"url"=>"http://159.254.133.133/dawserver/proyecto03/"
		)
	*@access private
	*/	
	private $menu=array(
		"home"=>array(
					"txt"=>"Inicio",
					"url"=>"http://169.254.133.133/dawserver/proyecto03/index.php"
		),
		"fotos"=>array(
					"txt"=>"Fotos",
					"url"=>"http://169.254.133.133/dawserver/proyecto03/fotos.php"
		),
		"contacto"=>array(
						"txt"=>"Contacto",
						"url"=>"http://169.254.133.133/dawserver/proyecto03/contacto.php"
		),
		"facebook"=>array(
						"txt"=>"Facebook",
						"url"=>"http://www.facebook.es"
		)
	);													
	
	/**
	* Constructor
	*
	*/
	function __construct()
	{
		$this->setTitulo("");
	}
	/**
	*Cambia la direccion http de   un enlace del menu
	*
	*@param elementoMenu elemento a modificar
	*@param direccionWeb direccion web nueva
	*/
	function setDirection($elementoMenu,$direccionWeb){
		$elemento=$this->menu[$elementoMenu];
		$elemento["url"]=$direccionWeb;
	}
	
	/**
	*Muestra el menu a partir del array
	*
	*/
	
	function construirMenu(){
		
		$menu="<div id='cssmenu'><ul>";
		foreach ($this->menu as $elementos) {
			$menu=$menu."<li><a href=".$elementos["url"].">".$elementos["txt"]."</a></li>";
		}
		$menu=$menu."</ul></div>";
		$this->setContenido($menu);
	}
}
?>