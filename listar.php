<?php 
include("mysql.php");
if (isset($_REQUEST['pos']))
  $inicio=$_REQUEST['pos'];
else
  $inicio=0;
$mysql=new Mysql(); 
$mysql->conexion();
// Creamos la variable consulta que nos servira como argumento en los metodos num_rows y fetch_array
$consulta=$mysql->consulta("SELECT * from empleados limit $inicio,3");
//si existe por lo menos un campo 
if ($mysql->num_rows($consulta)>0) {
	echo "se encontraron valores";
	//Guardaremos en la variable $resultado en Array que nos devuelva
	?>
  <table id="resultados" border=1px>
	<tr><td>Cedula</td><td>nombre</td><td>telefono y celular</td><td>Cedula</td><td>Cedula</td><td>Cedula</td></tr>
	<?php $impresos=0; 
	while ($resultado=$mysql->fetch_array($consulta)) { $impresos++; ?>
		<tr><td><?php echo $resultado['Cedula']; ?></td><td><?php echo $resultado['Nombres']; ?></td><td><?php echo $resultado['Telefono']; ?> , <?php echo $resultado['Celular'] ?></td></tr>	
	<?php
	}
	?></table> 
	<?php 
	if ($inicio==0)
    echo "anteriores ";
  else
  {
    $anterior=$inicio-3;
    echo "<a href=\"listar.php?pos=$anterior\" id=\"ant\">Anteriores 
    </a>";
  }
  if ($impresos==3){
    $proximo=$inicio+3;
    echo "<a href=\"listar.php?pos=$proximo\" id=\"sig\">Siguientes</a>";
  }
  else echo "siguientes";
  ?> 
<div style=" border: 0px;" id="NavPosicion"></div>

	<?php 
} else { echo "No hay valores"; }
echo "<br>Este es el script listar";
?>
