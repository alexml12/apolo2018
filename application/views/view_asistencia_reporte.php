
<script type="text/javascript">
            /*CLIENTES*/
            $(document).ready(function() {
                $('#alumnos').dataTable( {
                    // sDom: hace un espacio entre la tabla y los controles 
                "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
        
                } );
            } );
</script>

<div id="container">
	<h2 align="center">Lista de alumnos que asistieron al comedor</h2>
	<?php
if(isset($_GET['save'])){
	echo '<div class="alert alert-success text-center">La Información  se Almaceno Correctamente</div>';
}
if(isset($_GET['delete'])){
	echo '<div class="alert alert-warning text-center">La Información  se ha Eliminado Correctamente</div>';
}
if(isset($_GET['update'])){
	echo '<div class="alert alert-success text-center">La Información  se Actualizo Correctamente</div>';
}
if(isset($_GET['permisos'])){
		echo '<div class="alert alert-success text-center">Los Permisos fueron Asignados Correctamente</div>';
	}
	if(isset($_GET['password'])){
		echo '<div class="alert alert-success text-center">La Contraseña fue actualizado Correctamente</div>';
	}
?>
<center>
<table id="alumnos" border="0" cellpadding="0" cellspacing="0" class="pretty">
<thead>
<tr>
<th>CODIGO</th>
<th>NOMBRE</th>
<th>APELLIDOS</th>
<th>SEXO</th>
<th>FECHA DE ASISTENCIA</th>
</tr>
</thead>
<tbody>
 <?php 
 $contador = 0;
 if(!empty($alumnos)){
 	foreach($alumnos as $alumno){
 		echo '<tr>';
		//echo '<td>'
?>

    	<td><?php echo $alumno['codigo_alumno']; ?></td>
		 <td><?php echo $alumno['nombres']; ?></td>
		 <td><?php echo $alumno['apellidos']; ?></td>
		 <td><?php echo $alumno['sexo']; ?></td>
		 <td><?php echo $alumno['fecha_Registro']; ?></td>

 		</tr>
<?php 		
 	} 
 }
?>
</tbody>
</table>
</center>
</div>