<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More

    $this->load->model('mdl_peserta');
    $this->load->model('mdl_pembayaran');
    $this->load->model('mdl_guru');
    $this->load->model('mdl_jadwal');
      $this->load->library('upload');
      $this->load->library('pagination');
  }

  function index()
  {

  }
  public function updatedata()
  {
    $id = $_SESSION['id_user']['id'];

    $pst_name =$this->input->post('nama');
            $data = array(
                          'pst_name'         => $pst_name
                        );
                        $this->db->set($data);
                        $this->db->where('id', $id);
                        $this->db->update('peserta');
               redirect('Cprofile/profile','refresh');

  }
  public function add()
  {
    $pst_name =$this->input->post('nama');
    $pst_email =$this->input->post('email');
    $pst_password=$this->input->post('password1');
    $pst_gender=$this->input->post('gender');

   // get foto
    $config['upload_path'] = './asset/picture/peserta';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size'] = '2048';  //2MB max
    $config['max_width'] = '4480'; // pixel
    $config['max_height'] = '4480'; // pixel
    $config['file_name'] = $_FILES['fotomurid']['name'];

    $this->upload->initialize($config);

    if (!empty($_FILES['fotomurid']['name'])) {
        if ( $this->upload->do_upload('fotomurid') ) {
            $foto = $this->upload->data();
            $data = array(
                          'pst_name'         => $pst_name,
                          'pst_email'        => $pst_email,
                          'pst_password'     => $pst_password,
                          'pst_gender'       => $pst_gender,
                          'foto'             => $foto['file_name']
                        );
               $this->mdl_peserta->add($data);
               redirect('login','refresh');
        }else {
            die("gagal upload");
        }
    }else {
      echo "tidak masuk";
    }
  }

  public function addpembayaran($murid,$guru,$paket)
  {
    $data = array(
                  'pst_name'         => urldecode($murid),
                  'guru_name'        => urldecode($guru),
                  'paket'            => urldecode($paket),
                  'status'       => 'belum'
                );
       $this->mdl_pembayaran->add($data);
       redirect('Cprofile/landing','refresh');
  }
  public function addguru()
  {
    $guru_name =$this->input->post('nama');
    $guru_email =$this->input->post('email');
    $guru_password=$this->input->post('password1');
    $guru_gender=$this->input->post('gender');

   // get foto
    $config['upload_path'] = './asset/picture/guru';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size'] = '2048';  //2MB max
    $config['max_width'] = '4480'; // pixel
    $config['max_height'] = '4480'; // pixel
    $config['file_name'] = $_FILES['fotoberkas']['name'];

    $this->upload->initialize($config);

    if (!empty($_FILES['fotoberkas']['name'])) {
        if ( $this->upload->do_upload('fotoberkas')) {
            $foto = $this->upload->data();
            $data = array(
                          'guru_name'         => $guru_name,
                          'guru_email'        => $guru_email,
                          'guru_password'     => $guru_password,
                          'guru_gender'       => $guru_gender,
                          'berkas'            => $foto['file_name']
                        );
               $this->mdl_guru->add($data);
               redirect('loginguru','refresh');
        }else {
            die("gagal upload");
        }
    }else {
      echo "tidak masuk";
    }
  }
}
