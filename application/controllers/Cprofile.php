<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cprofile extends CI_Controller{

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

  public function Index()
  {

  }
  public function landing()
  {
    $id = $_SESSION['id_user']['id'];
    $pst_name = $_SESSION['id_user']['pst_name'];
    $lo["get_selected"]=$this->mdl_peserta->get_selected_data_peserta($id);
    $lo["get_jadwal"]=$this->mdl_jadwal->get_selected_jadwal($pst_name);
    $lo["get_konfirmasi"]=$this->mdl_konfirmasi->get_selected_konfirmasi1($pst_name);
    $lo["get_guru"]=$this->mdl_jguru->get_all_data();
    $this->load->view('Peserta/landing',$lo);
  }
  public function landingG()
  {
    $id = $_SESSION['id_user']['id'];
    $guru_name = $_SESSION['id_user']['guru_name'];
    $lo["get_jadwal"]=$this->mdl_jadwal->get_selected_jadwal1($guru_name);
    $lo["get_konfirmasi"]=$this->mdl_konfirmasi->get_selected_konfirmasi($guru_name);
    $lo["get_guru"]=$this->mdl_guru->get_selected_guru($id);
    $this->load->view('Guru/landingG',$lo);
  }

  public function edit()
  {
    //$lo["get_all"]=$this->mdl_peserta->get_all_data();
      $id = $_SESSION['id_user']['id'];
      $lo["get_selected"]=$this->mdl_peserta->get_selected_data_peserta($id);
    $this->load->view('Peserta/pembayaran',$lo);
  }

}
