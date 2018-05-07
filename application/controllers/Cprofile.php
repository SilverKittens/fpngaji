<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cprofile extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
      $this->load->model('mdl_peserta');

  }

  public function Index()
  {

  }
  public function guru()
  {
    $lo["get_all"]=$this->mdl_peserta->get_all_data();
    $this->load->view('Peserta/guru',$lo);
  }
  public function edit()
  {
    $lo["get_all"]=$this->mdl_peserta->get_all_data();
    $this->load->view('Peserta/profile',$lo);
  }
  public function pembayaran()
  {
    $lo["get_all"]=$this->mdl_peserta->get_all_data();
    $this->load->view('Peserta/pembayaran',$lo);
  }

}
