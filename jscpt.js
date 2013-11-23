function fechaActual(control){
  var date=new Date();
  var d=date.getDate();
  var m=date.getMonth()+1;//puesto que empieza en 0
  var y=date.getFullYear();
  control.value=y+"-"+m+"-"+d;
}

function verificar(e) {
  var cedula=document.getElementById("cedula").value;
  var cedulae=document.getElementById("cedula");
  var nombres=document.getElementById("nombres").value;
  var nombrese=document.getElementById("nombres");
  var apellidos=document.getElementById("apellidos").value;
  var apellidose=document.getElementById("apellidos");
  var emailp=document.getElementById("emailp").value;
  var emailpe=document.getElementById("emailp");
  var emailc=document.getElementById("emailc").value;
  var emailce=document.getElementById("emailc");
  var skype=document.getElementById("skype").value;
  var skypee=document.getElementById("skype");
  var direccion=document.getElementById("direccion").value;
  var direccione=document.getElementById("direccion");
  var telefono=document.getElementById("telefono").value;
  var telefonoe=document.getElementById("telefono");
  var celular=document.getElementById("celular").value;
  var celulare=document.getElementById("celular");
  var fechae=document.getElementById("fechae").value;
  var fechaee=document.getElementById("fechae");
  var fechac=document.getElementById("fechac").value;
  var fechace=document.getElementById("fechac");
  var contactoe=document.getElementById("contactoe").value;
  var contactoee=document.getElementById("contactoe");
  var parentezco=document.getElementById("parentezco").value;
  var parentezcoe=document.getElementById("parentezco");
  var telpar=document.getElementById("telpar").value;
  var telpare=document.getElementById("telpar");
  var eps=document.getElementById("eps").value;
  var epse=document.getElementById("eps");
  var cargo=document.getElementById("cargo").value;
  var cargoe=document.getElementById("cargo");
  var proasi=document.getElementById("proasi").value;
  var proasie=document.getElementById("proasi");
  //Variables para el desabilitar boton y para comparar cadena
  var boton=document.getElementById("boton");
  var cadena=/^[a-zA-Z ]*$/; 
  //******Variable para verificar el correo*****//
  var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  //****variable para los date()****//
  var expr2 = /^[0-9]+\-([0-9])+\-([0-9])+$/;
  boton.disabled=true;
  switch (e) {
    case document.getElementById("cedula"):
  if (cedula=="" || cedula!=parseInt(cedula) || cedula.length<=7){
    cedulae.style.border='2px solid red';
  alert("ingresa tu cedula con numeros y mayor que 7 caracteres");
  cedulae.focus(); 
  return false;
  } else {
  cedulae.style.border='2px solid blue'; return true;
    }
  break;
  case document.getElementById("nombres"):
  if (nombres=="" || !nombres.match(cadena)){
  nombrese.style.border='2px solid red';
  alert("ingresa tu nombre + de dos caracteres");
  nombrese.focus();
  return false;
  } 
  else {
  nombrese.style.border='2px solid blue'; return true;
  }
  break;
 case document.getElementById("apellidos"):
   if (apellidos=="" || apellidos.length<=2 || !apellidos.match(cadena)){
  apellidose.style.border='2px solid red';
  alert("ingresa tu apellido");  
  apellidose.focus();
  return false;
  } else 
  {
  apellidose.style.border='2px solid blue'; return true;
  }
  break;
  case document.getElementById("emailp"):
   if (emailp=="" || !expr.test(emailp) ){
  emailpe.style.border='2px solid red';
  alert("ingresa tu correo con @ y .");  
  emailpe.focus();
  return false;
  } else 
  {
  emailpe.style.border='2px solid blue'; return true;
  }
  break;
  case document.getElementById("emailc"):
   if (emailc=="" || !expr.test(emailc) ){
  emailce.style.border='2px solid red';
  alert("ingresa tu correo con @ y .");  
  emailce.focus();
  return false;
  } else 
  {
  emailce.style.border='2px solid blue'; return true;
  }
  break;
  case document.getElementById("skype"):
   if (skype=="" || skype.length<=2 ){
  skypee.style.border='2px solid red';
  alert("ingresa tu Skype user");  
  skypee.focus();
  return false;
  } else 
  {
  skypee.style.border='2px solid blue'; return true;
  }
  break;
  case document.getElementById("direccion"):
   if (direccion=="" || direccion.length<=4 ){
  direccione.style.border='2px solid red';
  alert("ingresa tu Dirección de domicilio más larga");  
  direccione.focus();
  return false;
  } else 
  {
  direccione.style.border='2px solid blue'; return true;
  }
 break;
  case document.getElementById("telefono"):
   if (telefono=="" || telefono.length<=4 || telefono!=parseInt(telefono)){
  telefonoe.style.border='2px solid red';
  alert("ingresa tu numero de telefono valido debe contener solo numeros");  
  telefonoe.focus();
  return false;
  } else 
  {
  telefonoe.style.border='2px solid blue'; return true;
  }
break;
case document.getElementById("celular"):
   if (celular=="" || celular.length<=9 || celular!=parseInt(celular)){
  celulare.style.border='2px solid red';
  alert("ingresa tu numero de celular valido debe contener solo numeros, debe contener al menos 9 numeros");  
  celulare.focus();
  return false;
  } else 
  {
  celulare.style.border='2px solid blue'; return true;
  }
break;
case document.getElementById("fechae"):
   if (fechae=="" || fechae.length<=3 || !fechae.match(expr2)){
  fechaee.style.border='2px solid red';
  alert("ingresa una fecha que este dentro del calendario");  
  //fechaee.focus();
  return false;
  } else 
  {
  fechaee.style.border='2px solid blue'; return true;
  }
break; 
case document.getElementById("fechac"):
   if (fechac=="" || fechac.length<=3 || !fechac.match(expr2)){
  fechace.style.border='2px solid red';
  alert("ingresa una fecha que este dentro del calendario");  
  //fechace.focus();
  return false;
  } else 
  {
  fechace.style.border='2px solid blue'; return true;
  }
break; 
case document.getElementById("contactoe"):
   if (contactoe=="" || contactoe.length<=3 ){
  contactoee.style.border='2px solid red';
  alert("ingresa nombre de contacto que contenga mas de 3 caracteres");  
  contactoee.focus();
  return false;
  } else 
  {
  contactoee.style.border='2px solid blue'; return true;
  }
  break;
  case document.getElementById("parentezco"):
   if (parentezco=="" || parentezco.length<=3 ){
  parentezcoe.style.border='2px solid red';
  alert("ingresa nombre de parentezco que contenga mas de 3 caracteres");  
  parentezcoe.focus();
  return false;
  } else 
  {
  parentezcoe.style.border='2px solid blue'; return true;
  }
  break;
  case document.getElementById("telpar"):
   if (telpar=="" || telpar.length<=3 || telpar!=parseInt(telpar)) {
  telpare.style.border='2px solid red';
  alert("ingresa telefono de parentezco que contenga mas de 3 caracteres");  
  telpare.focus();
  return false;
  } else 
  {
  telpare.style.border='2px solid blue'; return true;
  }
  break;
  case document.getElementById("eps"):
   if (eps=="" || eps.length<=3 || !eps.match(cadena)) {
  epse.style.border='2px solid red';
  alert("ingresa eps que contenga mas de 3 caracteres");  
  epse.focus();
  return false;
  } else 
  {
  epse.style.border='2px solid blue'; return true;
  }
  break;
case document.getElementById("cargo"):
   if (cargo=="" || cargo.length<=3 || !cargo.match(cadena)) {
  cargoe.style.border='2px solid red';
  alert("ingresa cargo que contenga mas de 3 caracteres");  
  cargoe.focus();
  return false;
  } else 
  {
  cargoe.style.border='2px solid blue'; return true;
  }
  break;
  case document.getElementById("proasi"):
   if (proasi=="" || proasi.length<=3 || !proasi.match(cadena)) {
  proasie.style.border='2px solid red';
  alert("ingresa cargo que contenga mas de 3 caracteres ademas string");  
  proasie.focus();
  return false;
  } else 
  { boton.disabled=false;
  proasie.style.border='2px solid blue'; return true;
  }
  break;
 }
}