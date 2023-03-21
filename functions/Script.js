var head=document.getElementById("header")
var foot=document.getElementById("footer")

function abrirVentanaEmergente() {
	window.open("", "ventanaEmergente", "width=600,height=400");
	var ventana = window.open("", "ventanaEmergente");
	ventana.document.write("<img src='assets/2560px-Minjusticia_Colombia.svg.png' width='600' height='150'>");
    ventana.document.write("<p> Los datos personales aquí recolectados serán recolectados, almacenados, procesados, usados, compilados, transmitidos, transferidos, actualizados y dispuestos conforme lo establece la Ley 1581 de 2012, el Decreto 1377 de 2013, compilado en el capítulo 25 del Decreto 1074 de 2015 (Único Reglamentario del Sector Comercio, industria y Turismo) y la Política de Tratamiento y Protección de Datos Personales del Ministerio de Justicia y del Derecho </p>");
    ventana.document.write("<p> El Ministerio de Justicia y el Derecho como responsable del tratamiento de los datos personales aquí consignados, en cumplimiento de la Ley 1581 de 2012 y del Decreto 1377 de 2013, informa al titular de los datos personales que le asisten los siguientes derechos: acceder a sus datos personales; conocer, actualizar y rectificar sus datos personales; solicitar prueba de la autorización otorgada; revocar la autorización y/o solicitar la supresión del dato; presentar quejas ante la Superintendencia de Industria y Comercio y en general todos los derechos consignados en el artículo 8 de la Ley 1581 de 2012. </p>");
    ventana.document.write("<p> El Ministerio de Justicia y del Derecho ha establecido los siguientes canales para que estos derechos puedan ser ejercidos: a) Canal presencial: El ciudadano podrá presentar personalmente su solicitud relacionada con el tratamiento de sus datos personales en el Ministerio de Justicia y del Derecho, ubicado en la Calle 53 # 13-27 de Bogotá (única sede). b) Canal Telefónico: el ciudadano podrá comunicarse a la línea telefónica PBX (+57) (1) 4443100 o línea gratuita nacional 01-800-09-11170. c) Canal Virtual: Página web www.minjusticía.gov.co a través del link http://pqrs.minjusticia.gov.co o al Correo electrónico: servicio.ciudadano@minjusticia.gov.co </p>");
}

head.innerHTML=''+
'		<nav class="navbar navbar-expand-lg bg-success fixed-top">'+
'           <div class="container-fluid">'+
'               <a class="navbar-brand" href="index.html">Autolegal</a>'+
'               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">'+
'                   <span class="navbar-toggler-icon"></span>'+
'               </button>'+
'               <div class="collapse navbar-collapse" id="navbarSupportedContent">'+
'                   <ul class="navbar-nav me-auto mb-2 mb-lg-0">'+
'                       <li class="nav-item">'+
'                               <a class="nav-link active" aria-current="page" href="Conocernos.html">Nosotros</a>'+
'                       </li>'+
'                       <li class="nav-item dropdown">'+
'                           <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">'+
'                                   Rutas y horarios'+
'                           </a>'+
'                           <ul class="dropdown-menu">'+
'                               <li><a class="dropdown-item" href="#">Medellin</a></li>'+
'                               <li><a class="dropdown-item" href="#">Anserma</a></li>'+
'                               <li><a class="dropdown-item" href="#">Mariquita</a></li>'+
'                           </ul>'+
'                       </li>'+
'                       <li class="nav-item">'+
'                               <a class="nav-link active" href="#">Empleados</a>'+
'                       </li>'+
'                       <li class="nav-item">'+
'                               <a class="nav-link active">Contactanos</a>'+
'                       </li>'+
'                   </ul>'+
'                   <div>'+
'                       <a class="btn btn-light" href="registro.html">Registrarse</a>'+
'                       <a class="btn btn-primary" href="ingreso.html">Iniciar Sesion</a>'+
'                   </div>'+
'               </div>'+
'           </div>'+
'       </nav>'+
''

foot.innerHTML="<p>Todos los derechos reservados © Empresa de Transporte</p>"

