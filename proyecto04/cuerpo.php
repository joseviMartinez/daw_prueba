<?php
require_once "elemento.php";
class cuerpo extends elemento
{
	
	//En este caso no tendrá titulo
	function __construct()
	{
		$this->setTitulo("");	
	}
	//Funcion que define la tabla
	function setTexto($titulo,$texto){
		$str=$titulo;
		$this->setTitulo("<h1>".$titulo."</h1>");	
		$str="<p>".$texto."</p>";
		$this->setContenido($str);
		}
	function setTabla($filas,$columnas)
	{
		$str="";
		$contador=1;
		
		$str="<table>";
		for($i=1;$i<=$filas;$i++)
		{
			$str=$str."<tr>";
			for($j=1;$j<=$columnas;$j++)
			{
				$str=$str."<td><img src='Pagina".$contador.".jpg' width='200' height='200'></td>";
				$contador++;
			}
			$str=$str."</tr>";
		}
		$str=$str."</table>";
		
		$this->setContenido($str);
	}
	
}
?>