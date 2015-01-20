<?php
	/**
	* db
	*
	* Gestor de Bases de datos utilizando la nueva api mejorada de php mysqli orientada a objetos
	*
	* @author Paco Gómez
	* @author http://es.linkedin.com/pub/paco-gomez-arnal/7/387/807/
	*
	* @version 1.0
	*/
class db
{
	/**
	* string del servidor
	*/
	private $servidor;
	/**
	* string del usuario
	*/
	private $usuario;
	/**
	* string del password
	*/
	private $pass;
	/**
	* string de la base de datos
	*/
	private $base_datos;
	/**
	* descriptor a la conexión con la base de datos
	*/
	private $descriptor;
	/**
	* boolean que nos indica si ha habido exito al conectar o no
	*/
	private $conectado;
	/**
	* información del error o conexión habilitada
	*/
	private $info;
	
	function __construct($servidor,$usuario,$pass,$base_datos){
		$this->servirdor=$servidor;
		$this->usuario=$usuario;
		$this->pass=$pass;
		$this->base_datos=$base_datos;
		$this->contenido=false;
		$this->info="";
	}
	
	/*function __construct();
	{
		echo "Numero de argumentos: ".func_num_args();
		if(func_num_args()==1){
			$this->usuario = func_get_arg(0);
			$this->conectado=false;
			$this->info="";
		}elseif(func_num_args()==2){
			$this->usuario = func_get_arg(0);
			$this->pass = func_get_arg(1);
			$this->conectado=false;
			$this->info="";			
		}
	}*/
	
	/**
		* Realiza la conexión con la base de datos 
		*
		* @return conectado boolean
	*/	
	public function conectar_base_datos()
	{
		$this->descriptor = new mysqli($this->servidor, $this->usuario, $this->pass, $this->base_datos);
		if ($this->descriptor->connect_errno) {
    		$this->$info="Error al contenctar a MySQL: (" . $this->descriptor->connect_errno . ") " . $this->descriptor->connect_error;
			$this->conectado=false;
		}else{
			$this->info="Conectado al servidor MySQL: " .$this->descriptor->host_info;
			$this->conectado=true;
		}
		
		return $this->conectado;
		mysql_query("SET * 'utf8'");
	}
		
	/**
		* Devuelve el estado de la conexión actual
		*
		* @return info string
	*/	
	public function getInfo(){
		return $this->info;
	}
	/**
		* Devuelve informacion de la conexion actual ( nos informa de como va)
		*
		* @return str string
	*/	
	
	//coge de la base de datos los datos que le pedimos
	public function getLugares(){
		$str="";
		if($resultado = $this->descriptor->query("SELECT * FROM lugares")){
			$str=$str."<table border=1><tr bgcolor='#dddddd'><td>ID</td><td>Pais</td><td>Ciudad</td><td>Lugar</td><td>Descripción</td><td>Fecha</td></tr>";
			for ($num_fila = 0; $num_fila < $resultado->num_rows;$num_fila++) {
				$resultado->data_seek($num_fila);
				$fila = $resultado->fetch_assoc();
				$str=$str."<tr>";
				$str=$str."<td>".$fila['ID']."</td>";
				$str=$str."<td>".$fila['Pais']."</td>";
				$str=$str."<td>".$fila['Ciudad']."</td>";
				$str=$str."<td>".$fila['Lugar']."</td>";
				$str=$str."<td>".$fila['Descripcion']."</td>";
				$str=$str."<td>".$fila['Fecha']."</td>";
				$str=$str."</tr>";
			}
			$str=$str."</table>";
		}else{
			 printf("Error: %s\n", $this->descriptor->error);
		}
		return $str;
	}
	
	//inserta los datos a la base de datos
	public function setLugar($lugar,$descripcion,$fecha){
		if($resultado = $this->descriptor->query("INSERT INTO Lugares (ID,Pais,Ciudad,Descripcion,Fecha,) VALUES ('$ID','$Pais','$Ciudad','$Lugar','$Descripcion','$Fecha')")){
			echo "OK<br>";
		}else{
			echo "ERROR<br>";
			 printf("Error: %s\n", $this->descriptor->error);
		}
	}
	
	public function  prepararLugar(){
		// Sentencia preparada, etapa 1: preparacion
		if(!($this->setenciaPreparada =$this->descriptor->prepare("INSERT INFO Lugares (ID,Descripcion,Fecha) VALUES (?,?,?)"))) {
			echo "Fallo la preparación: (" . $this->descriptor->errno . ")" . $this->descriptor->error;
		}
	}
	public function setLugarPrep($lugar,$descripcion,$fecha){
		if(!$this->sentenciaPreparada->bind_param('sss',$lugar, $descripcion, $fecha))
		{
			echo "Falló la vinculacion de parámetros.(" . !$this->sentenciaPreparada->errno .")" . $this->sentenciaPreparada->error;
		}
		if(!$this->sentenciaPreparada->execute()){
			echo "Falló la ejecución:(" . $this->senetenciaPreparada->errno . ") " . $this->sentenciaPreparada->error;
		}
	}
}
?>