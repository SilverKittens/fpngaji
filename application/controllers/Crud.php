<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More

    $this->load->model('mdl_peserta');
  }

  function index()
  {

  }
  public function add()
  {
    $data = array(
    'pst_name' =>$this->input->post('nama') ,
    'pst_email' =>$this->input->post('email'),
    'pst_password'=>$this->input->post('password1'),
    'pst_gender'=>$this->input->post('gender')
   );
   $this->mdl_peserta->add($data);
   redirect('login','refresh');
  }

}
