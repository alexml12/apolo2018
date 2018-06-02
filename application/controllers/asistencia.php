<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Mexico_City'); 
class asistencia extends CI_Controller
{
 public function index(){
          /*Si el usuario esta logeado*/
          $this->load->view('header');      
          $this->load->view('view_asistencia');
          $this->load->view('footer');
	}

    public function nuevo(){
	      
        /*Si el usuario esta logeado*/
        $this->Seguridad();
		$hoy    = date("Y")."-".date("m")."-".date("d")." ".date("H:i:s");
				
		$this->ValidaCampos();
		if($this->form_validation->run() == TRUE){
				//Verificamos si existe el email
			   //$VerifyExist = $this->model_alumnos->ExisteEmail($this->input->post("codigo_alumno"));
              // if($VerifyExist==0){
               	    $UsuariosInsertar = $this->input->post();//Recibimos todo los campos por array nos lo envia codeigther
               	    $UsuariosInsertar["fecha_Registro"] = $hoy;//le agregamos la fecha de registro
               	    //guardamos los registros
               	    $this->model_alumnos->SaveAlumnos($UsuariosInsertar);
               	    redirect("alumnos?save=true");
       
        }
			
		else{
			  $this->load->view('header');
			  $this->load->view('view_nuevo_alumno');
			  $this->load->view('footer');
		} 
     }

      function ValidaCampos(){
		/*Campos para validar que no esten vacio los campos*/
		 $this->form_validation->set_rules("codigo_alumno", "codigo_alumno", "trim|required|valid_codigo_alumno");

		}


}