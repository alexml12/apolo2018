<?php 
$alumnas;
$alumnos; 
$total; 

$porcentajeM = ($alumnas * 100)/$total;
$porcentajeV = ($alumnos * 100)/$total;
?>
<center> <H3>REPORTE PORCENTUAL DE HOMBRES Y MUJERES </H3>
   <table border="3" cellpadding="10">
   <tr border="3">
      <td>TIPO </td>
      <td>CANTIDAD </td>
      <td>PROCENTAJE </td>
    </tr>
    <tr border="3">
      <td>HOMRBES</td>
      <td><center><?PHP echo $alumnos  ?> </center></td>
      <td><center><?PHP echo round($porcentajeV,2).'%'  ?> </center></td>
    </tr>
     <tr border="3">
      <td>MUJERES</td>
      <td><center><?PHP echo $alumnas  ?> </center></td>
      <td><center><?PHP echo round($porcentajeM,2).'%' ?> </center></td>
    </tr>
     <tr border="3">
      <td>TOTAL</td>
      <td><center><?PHP echo $total  ?> </center></td>
      <td><center><?PHP echo '100%'  ?> </center></td>
    </tr>

  </table></br>
  <a href="<?php echo base_url();?>reportes/pdfHM" class="btn btn-success">IMPRIMIR EN PDF</a>


</center>





