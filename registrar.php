<html>
	<head>
		<style type="text/css">
		.test{background-color: red}
		</style>
		<script type="text/javascript" src="jscpt.js" ></script>
		<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
		<script>
         $(document).on('ready',function(){
           $('nombres').on('click',function(){
           	$('.xx').text("Hola");
           	$('.xx').addClass('test');
          }); 
         });
		</script>	
<!-- ************Start Datepicker -->
<script type="text/javascript" src="datepickr/datepickr.min.js"></script>
<link rel="stylesheet" type="text/css" href="datepickr/datepickr.css" />    
    <!-- ************Datepicker end************** -->
	</head>
<body onload="cedula.focus()">
<form action="procesa.php" name="form1" id="form1" method="POST" >
	<label>Cedula</label><input type="text" name="cedula" id="cedula" value="" /><br />
	<label>Nombres</label><input type="text" name="nombres" id="nombres" value="" onblur="verificar(nombres);"  /><br />
	<label>Apellidos</label><input type="text" name="apellidos" id="apellidos" value="" onblur="verificar(apellidos);" /><br />
	<label>Email-personal</label><input type="text" name="emailp" id="emailp" value="" onblur="verificar(emailp);" /><br />
	<label>Email-corporativo</label><input type="text" name="emailc" id="emailc" value="" onblur="verificar(emailc);" /><br />
	<label>Skype-user</label><input type="text" name="skype" id="skype" value="" onblur="verificar(skype);"/><br />
	<label>Direccion-domicilio</label><input type="text" name="direccion" id="direccion" value="" onblur="verificar(direccion);"/><br />
	<label>Telefono</label><input type="text" name="telefono" id="telefono" value="" onblur="verificar(telefono);"/><br />
	<label>Celular</label><input type="text" name="celular" id="celular" value="" onblur="verificar(celular);" /><br />
	<label for="fechae">Fecha-entrada</label><input type="text" name="fechae" id="fechae" size="50" value="" onFocus="fechaActual(this);" onBlur="verificar(fechae);" /><br />
	<label for="fechac">Fecha-cumpleaños</label><input type="text"  name="fechac" id="fechac" value="" onFocus="fechaActual(this);" onBlur="verificar(fechac);" /><br />
	<label>Contacto-Emergencia</label><input type="text" name="contactoe" id="contactoe" value="" onblur="verificar(contactoe);" /><br />
	<label>Parentezco</label><input type="text" name="parentezco" id="parentezco" value="" onblur="verificar(parentezco);" /><br />
	<label>Parentezco-Telefono</label><input type="text" name="tel-par" id="telpar" value="" onblur="verificar(telpar);" /><br />
	<label>Eps</label><input type="text" name="eps" id="eps" value="" onblur="verificar(eps);" /><br />
	<label>Cargo</label><input type="text" name="cargo" id="cargo" value="" onblur="verificar(cargo);" /><br />
	<label>Proyecto-asignado</label><input type="text" name="pro-asi" id="proasi" value="" onblur="verificar(proasi);" /><br />
	<input type="button" value="enviar" id="boton" onclick="submit();" />
</form>
<div class='xx'></div>
</body>
</html>
    <script type="text/javascript">
			new datepickr('fechae', {
				'dateFormat': 'y-m-d'
			});
				 new datepickr('fechac', {
				'dateFormat': 'y-m-d'
			});
    </script>
