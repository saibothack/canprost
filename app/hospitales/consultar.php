<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Documento sin título</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Librerias -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.css" rel="stylesheet">
    <link href="../../resources/css/modalwindow.css" rel="stylesheet">
	<!--Eestilos-->
	<link href="../../resources/css/global.css" rel="stylesheet">
	<script type="text/javascript" src="../../resources/script/jquery-1.3.2.min.js"></script>
</head>
<body>
	<h1>Hospitales</h1>
	<fieldset>
		<section id="command-buttons" style="width: 98%; margin: auto;text-align:right;">
			<br>
			<form action="gen_excel.php" method="post" target="_blank" id="FormularioExportacion">
				<button formtarget="_blank" class="btn btn-default boton excel" onclick="genExcel()"><span class="glyphicon glyphicon-cloud-download"></span> Excel</button>
				<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
			</form>
			<table id="grid-command-buttons" class="table table-condensed table-hover table-striped">
				<thead>
					<tr>
						<th data-column-id="id" data-type="numeric" data-visible="false">id</th>
						<th data-column-id="sHospital">Hospital</th>
						<th data-column-id="sTelefono">Teléfono</th>
						<th data-column-id="sFechaRegistro">Fecha Registro</th>
						<th data-column-id="commands" data-formatter="commands" data-sortable="false">Acciones</th>
					</tr>
				</thead>
			</table>
		</section>
           
		<div id="openModal" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<iframe id="frmEdita" style="width: 98%; height: 100%; border: 0px;">
					
				</iframe>
			</div>
		</div>
		<div id="dialog-confirm" title="Confirmación" style="width: 80%; height: 80%">
		  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>¿Esta seguro de eliminar el registro?</p>
		</div>
	</fieldset>
	<!--jquery-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
	<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js" type="text/javascript"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.fa.js"></script>
	<script src="../../resources/script/validator.js" type="text/javascript"></script>
	<!--boostrap-->
	<script src="../../resources/script/app/hospitales/consulta.js" type="text/javascript"></script>
</body>
</html>
