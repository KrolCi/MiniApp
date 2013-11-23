<?php
//Class mysql con los metodos conexion
class Mysql{
  private $con; private $num_consultas;
  public function conexion(){
  if(!isset($this->con)) {
    $this->con=mysqli_connect("localhost","root","","inventiba") or die (mysqli_error());
    //echo "Conexion exitosa";
  } 
 }
 public function consulta($consulta){
    //le decimos que el numero de consultas vaya aumentado segun se ejecute una consulta
    $this->num_consultas++;
    // ahora haremos la consulta y la guardamos en una variable llamada resultado
    $resultado=mysqli_query($this->con,$consulta);
    if (!$resultado) {
    	echo "Diferent a result ya existe";
    	exit;
    }
    return $resultado;
 }
 public function fetch_array($consulta){
 	// Decimos que nos devuelva un array de la $consulta 
 	return mysqli_fetch_array($consulta);
 } 
 public function num_rows($consulta){
 	// Devuele el numero de filas en la $consulta
   return mysqli_num_rows($consulta);  
 }
 public function salir(){
 	mysqli_close();
 	echo "Salimos pues";
 } 
}
?>