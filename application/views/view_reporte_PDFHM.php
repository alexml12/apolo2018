<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.css">
<link href="<?php echo base_url();?>css/Estilo.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/Tablas.css">
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/jquery.dataTables.js"></script>  

<title>Codeigniter y Mysqli</title>
</head>
<body>
  <h3 align="center"> <img src="<?php echo base_url();?>imagenes/utea.png" width="10" heigth="15"/>UNIVERSIDAD TECNOLOGICA DE LOS ANDES <br/> COMEDOR UNIVERSITARIO
<?php 
$alumnas;
$alumnos; 
$total; 

$porcentajeM = ($alumnas * 100)/$total;
$porcentajeV = ($alumnos * 100)/$total;
?>
<center> <H3 align="center">REPORTE PORCENTUAL DE HOMBRES Y MUJERES </H3>
   <table border="3" cellpadding="10" class="ventanas" align="center"  >
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

  </table>



</center>

  </h3>


