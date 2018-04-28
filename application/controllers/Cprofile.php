<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cprofile extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function Index()
  {
    // code...
  }
  public function guru()
  {
    $this->load->view('Peserta/guru');
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
