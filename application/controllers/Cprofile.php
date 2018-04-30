<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cprofile extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('mdl_peserta');
    $data["get_all_data"]=$this->mdl_peserta->get_all_data();
  }

  public function Index()
  {
    $this->load->model('mdl_peserta');
    $data["get_all_data"]=$this->mdl_peserta->get_all_data();
  }
  public function guru()
  {
    $this->load->model('mdl_peserta');
    $data["get_all_data"]=$this->mdl_peserta->get_all_data();
    $this->load->view('Peserta/guru',$data);
  }
  public function edit()
  {
    $this->load->view('Peserta/profile');
  }
  public function pembayaran()
  {
    $this->load->view('Peserta/pembayaran');
  }

}
