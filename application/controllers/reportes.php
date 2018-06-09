<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Mexico_City'); 
class reportes extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          //Cargamos el modelo deel controlador
          $this->load->model('model_reporte');
          $this->load->model('model_seguridad');
          $this->load->model('model_login');
          $this->load->library('export_excel');
     }
     function Seguridad(){
      $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
         $this->model_seguridad->SessionActivo($url);
     }

 public function index(){
          /*Si el usuario esta logeado*/
          $this->Seguridad();
          $this->load->view('header');    
          //$data['alumnos'] = $this->model_asistencia->ListarComensales();     
          $this->load->view('view_reportes');
          $this->load->view('footer');
  }
 public function pdf(){
          $this->Seguridad();
          $this->load->view('header');    
          //$data['alumnos'] = $this->model_asistencia->ListarComensales();     
          $this->load->view('view_reporte_pdf');
          $this->load->view('footer');
    }   
 public function pdfHM(){
        $this->load->view('header'); 
        $data['alumnas'] = $this->model_reporte->Tmujeres();
        $data['alumnos'] = $this->model_reporte->Tvarones();
        $data['total'] = $this->model_reporte->Ttotal();
        $hoy = date("dmyhis");
        $html =$this->load->view('view_reporte_PDFHM',$data,true);    
        $pdfFilePath = "cipdf_".$hoy.".pdf";
        $this->load->library('M_pdf');
        $mpdf = new mPDF('c', 'A4-L'); 
        $mpdf->WriteHTML($html);
        $mpdf->Output($pdfFilePath, "D");
          
 }


 public function reportedinamico(){
          $this->Seguridad();
          $this->load->view('header'); 
          $data['alumnos'] = $this->model_reporte->ListarComensales($this->input->post("sexo") ,$this->input->post("fechaI") ,$this->input->post("fechaF") );   
          
          
          $this->load->view('view_reporte_dinamico',$data);
          $this->load->view('footer');
}
    
 
    public function descargar(){
    $this->Seguridad();

    if($_POST['boton2'] =='Descargar EXCEL'){
        
        if($this->input->post("sexo") =='Ambos'){
          $result = $this->model_reporte->ListarComensalesEXCELA($this->input->post("fechaI") ,$this->input->post("fechaF") );
        $this->export_excel->to_excel($result, 'lista_de_personas');

          }
        else {$result = $this->model_reporte->ListarComensalesEXCEL($this->input->post("sexo") ,$this->input->post("fechaI") ,$this->input->post("fechaF") );
        $this->export_excel->to_excel($result, 'lista_de_personas');}
  }
    

    else if ($_POST['boton1'] =='Descargar PDF'){
      if($this->input->post("sexo") =='Ambos'){
        $data['alumnos'] = $this->model_reporte->ListarComensalesA($this->input->post("fechaI") ,$this->input->post("fechaF") );  

        $hoy = date("dmyhis");
        $html =$this->load->view('view_reporte_dinamico',$data,true);    
        $pdfFilePath = "cipdf_".$hoy.".pdf";
        $this->load->library('M_pdf');
        $mpdf = new mPDF('c', 'A4-L'); 
        $mpdf->WriteHTML($html);
        $mpdf->Output($pdfFilePath, "D");

      }

      else{  
      $data['alumnos'] = $this->model_reporte->ListarComensales($this->input->post("sexo") ,$this->input->post("fechaI") ,$this->input->post("fechaF") );  

        $hoy = date("dmyhis");
        $html =$this->load->view('view_reporte_dinamico',$data,true);    
        $pdfFilePath = "cipdf_".$hoy.".pdf";
        $this->load->library('M_pdf');
        $mpdf = new mPDF('c', 'A4-L'); 
        $mpdf->WriteHTML($html);
        $mpdf->Output($pdfFilePath, "D");
        }
    }
  
  }

  public function hm(){

     $this->load->view('header'); 
     $data['alumnas'] = $this->model_reporte->Tmujeres();
     $data['alumnos'] = $this->model_reporte->Tvarones();
     $data['total'] = $this->model_reporte->Ttotal();
     $this->load ->view('view_reporte_hm' , $data);
     $this->load->view('footer'); 
     
  }

}