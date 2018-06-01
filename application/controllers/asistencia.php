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


}