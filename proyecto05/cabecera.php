<?php
require_once "elemento.php";
class cabecera extends elemento
{
	
	//En este caso no tendrá titulo
	function __construct()
	{
		$this->setTitulo("");	
	}
	//Funcion que define el menu de la cabecera
	function setMenu($numElementos)
	{
		
		$str="";
		$str=$str."&nbsp;"."<a href=index.php>Home </a>";
		
		for($i=1;$i<=$numElementos;$i++)
		{
			$str=$str."&nbsp;"."<a href=pagina".$i.".php>Página-".$i."</a> ";
		} 
		$this->setContenido($str);
		
	}
	private $menu=array(
	"home"=>array(
		"txt"=>"Inicio",
		"url"=>"http://169.254.133.133/dawserver/proyecto05/index.php?id=1"
	),
	"Lugares"=>array(
		"txt"=>"Lugares",
		"url"=>"http://169.254.133.133/dawserver/proyecto05/index.php?id=2"
		),
		"contacto"=>array(
		"txt"=>"Contacto",
		"url"=>"http://169.254.133.133/dawserver/proyecto05/index.php?id=3"
		),
	
	"Facebook"=>array(
		"txt"=>"Facebook",
		"url"=>"http://www.facebook.es"
		)
		
	);
	function setDireccion($elementoMenu,$direccionWeb){
		$elemento=$this->menu[$elementoMenu];
		$elemento["url"]=$direccionWeb;
		}
	function construirMenu(){
		$menu="<div id='cssmenu'><ul>";
		foreach($this->menu as $elementos){
			$menu=$menu."<li><a href=".$elementos["url"].">".$elementos["txt"]."</a></li>";
			}
			$menu=$menu."</ul></div>";
			$this->setContenido($menu);
		}
}
?>