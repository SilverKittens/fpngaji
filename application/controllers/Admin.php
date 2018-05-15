<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('mdl_peserta');
      $this->load->model('mdl_jadwal');
        $this->load->model('mdl_konfirmasi');
          $this->load->model('mdl_guru');
            $this->load->model('mdl_jguru');
  }

  function index()
  {
$this->load->view('admin/dashboard');
  }
  public function login()
  {
    $this->load->view('admin/adminlogin');
  }
  public function peserta()
  {
    $lo["get_konfirmasi"]=$this->mdl_konfirmasi->get_all_data();
    $this->load->view('admin/peserta',$lo);
  }
  public function guru()
  {
    $lo["get_guru"]=$this->mdl_guru->get_all_data();
    $this->load->view('admin/guru',$lo);
  }
}
