<?php
//Este es el archivo de procesamiento de inserción de datos
//Como estamos en un archivo aparte debemos incluir la clase mysql e instanciarla y empezar a ejecutar las funciones
include("mysql.php");
Class employee{
   private $cedula; private $nombre; private $apellido; private $emailp; private $emalc; private $skype; private $direccion; 
   private $telefono; private $celular; private $fechae; private $fechac; private $contactoe; private $parentezco; private $telefonoc; private $eps; private $cargo;
   private $proyectoa;
 function __construct($ced,$nom,$fec,$tel){
  //Recogeremos los datos del formulario
	$ced=$_POST['cedula'];
	$nom=$_POST['nombres'];
  $ape=$_POST['apellidos'];
  $emp=$_POST['emailp'];
  $emc=$_POST['emailc'];
  $sky=$_POST['skype'];
  $dir=$_POST['direccion'];
  $tel=$_POST['telefono'];
  $cel=$_POST['celular'];
  $fee=$_POST['fechae'];
  $fec=$_POST['fechac'];
  $coe=$_POST['contactoe'];
  $par=$_POST['parentezco'];
  $tep=$_POST['tel-par'];
	$eps=$_POST['eps'];
  $car=$_POST['cargo'];
  $pro=$_POST['pro-asi'];
  //Decimos que los datos que recogimos sean los atributos de class empleado
  $this->cedula=$ced;
  $this->nombre=$nom;
  $this->apellido=$ape;
  $this->emailp=$emp;
  $this->emailc=$emc;
  $this->skype=$sky;
  $this->direccion=$dir;
  $this->telefono=$tel;
  $this->celular=$cel;
  $this->fechae=$fee;
  $this->fechac=$fec;
  $this->contactoe=$coe;
  $this->parentezco=$par;
  $this->telefonoc=$tep;
  $this->eps=$eps;
  $this->cargo=$car;
  $this->proyectoa=$pro;
 }
 public function pruebas(){
 	//echo $this->cedula;
 }
 public function registrar(){
  $mysql=new Mysql();
  $mysql->conexion();	
  $consulta=$mysql->consulta("INSERT INTO empleados values ('$this->cedula','$this->nombre','$this->apellido','$this->emailp','$this->emailc','$this->skype','$this->direccion','$this->telefono','$this->celular','$this->fechae','$this->fechac','$this->contactoe','$this->parentezco','$this->telefonoc','$this->eps','$this->cargo','$this->proyectoa')");
 }
}
$emp=new employee('$this->cedula','$this->nombre','$this->apellido','$this->emailp','$this->emailc','$this->skype','$this->direccion','$this->telefono','$this->celular','$this->fechae','$this->fechac','$this->contactoe','$this->parentezco','$this->telefonoc','$this->eps','$this->cargo','$this->proyectoa');
$emp->pruebas();
$emp->registrar();
?>