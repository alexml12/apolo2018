<?php
	  echo '<center>';
	  echo '<table border=0 class="ventanas" width="650" cellspacing="0" cellpadding="0">';
	  echo '<tr>';
	  echo "<td height='10' class='tabla_ventanas_login' height='10' colspan='3'><legend align='center'>.: Registrar asistencia del Comensal :.</legend></td>";
	  echo '</tr>';
	  echo '<tr><td colspan=3>';
	  $attributes = array("class" => "form-horizontal", "id" => "form", "name" => "form");
	  //echo form_open("clientes/Save", $attributes);
	  echo form_open();
	  echo '<center>';
	  echo '<table border=0>';


   	$codigo_alumno	  = array(
	'name'        => 'codigo_alumno',
	'id'          => 'codigo_alumno',
	'size'        => 50,
	'maxlength'   => 11,
	'value'		  => set_value('codigo_alumno',@$datos_usuarios[0]->codigo_alumno),
	'placeholder' => 'Codigo Alumno',
	'type'        => 'text',
	);
	echo '<tr>';
	echo '<td>'.form_label("Codigo:",'codigo_alumno').'</td>';
	echo '<td>';
	echo form_input($codigo_alumno);
	echo '</td>';
	echo '<td><font color="red">'.form_error('codigo_alumno').'</font></td>';
	echo '</tr>';
	

	echo '<tr>';
	echo '<td colspan=3>'.$this->session->flashdata('msg').'</td>';
	echo '</tr>';
	echo '<tr><td colspan=3><hr/></td></tr>';
	echo '<tr>';
	echo '<td colspan=3><center>';
	echo '<input type="submit" class="btn btn-success" value="Guardar">';
    echo '</center></td></tr>';
    echo '</table></center>';
    echo form_close(); 
    echo '</td></tr>';
    echo '</table>';
    echo '</center>';
?>