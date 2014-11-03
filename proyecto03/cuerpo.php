<?php
require_once "elemento.php";

class cuerpo extends elemento
{
	
	//en este caso no tendra titulo
	function __construct()
	{
		$this->setTitulo("");
	}
	function setTexto($titulo,$texto){
		$this->setTitulo("<h1>".$titulo."</h1>");
		
		$str="<p>".$texto."</p>";
		$this->setContenido($str);
	}
	//funcion de define la tabla
	function setTabla($titulo,$filas,$columnas)
	{
		
		$this->setTitulo("<h1>".$titulo."</h1>");
		
		$str="";
		$contador=0;
		
		$str="<table>";
		for($i=1;$i<=$filas;$i++)
		{
			$str=$str."<tr>";
			
			for($x=1;$x<=$columnas;$x++)
			{	
			$str=$str."<td><img src='Pagina".$contador.".jpg' width='200' height='200'></td>";
			$contador++;
			}
			$str=$str."</tr>";
		}
		$str=$str."</table>";
		$this->setContenido($str);
		}
		/**
		*Construye el cuerpo a partir de un texto simple
		*
		*@param tit Titulo del cuerpo
		*@param str Contenido del cuerpo
		*/
	
		
	
}
?>