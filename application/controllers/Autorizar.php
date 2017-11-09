<?php

class Autorizar extends CI_Controller {

public function __construct(){

        parent::__construct();
        $this->load->helper('url');
        $this->load->model('user_model');
        $this->load->library('session');

}

public function index(){
    $this->load->view("login.php");
  }
  public function cargalogin(){
    $this->load->view("login.php");
  }
public function user_logout(){
    $this->session->sess_destroy();
    redirect('autorizar', 'refresh');
  }

function login_user(){
  $user_login=array(

  'email'=>$this->input->post('email'),
  'password'=>md5($this->input->post('password'))

    );
  
    $data=$this->user_model->login_user($user_login['email'],$user_login['password']);
    //$this->load->view('user_profile.php');
      if($data)
      {
        $this->session->set_userdata('id',$data['id']);
        $this->session->set_userdata('nombre',$data['nombre']);
        $this->session->set_userdata('apellidos',$data['apellidos']);
        $this->session->set_userdata('cumpleanios',$data['cumpleanios']);
        $this->session->set_userdata('email',$data['email']);
        $this->session->set_userdata('password',md5($data['password']));
        $this->session->set_userdata('fotografia',$data['fotografia']);
        $this->session->set_userdata('telefono',$data['telefono']);
        $this->session->set_userdata('tipo_usuario',$data['tipo_usuario']);
        
        if($data['tipo_usuario'] == "Administrador"){
          $this->load->view('admin_profile.php');
        }else{
          $this->load->view('user_profile.php');
        }
      }
      else{
        $this->session->set_flashdata('error_msg', 'Error al conectar.');
        $this->load->view("login.php");
      }
    }
}

?>
