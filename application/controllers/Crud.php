<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More

    $this->load->model('mdl_peserta');
    $this->load->model('mdl_konfirmasi');
    $this->load->model('mdl_guru');
    $this->load->model('mdl_jadwal');
    $this->load->model('mdl_jguru');
    $this->load->model('mdl_gurufix');
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
                          'pst_password'     => sha1($pst_password),
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

  public function addkonfirmasi($murid,$guru,$paket,$hari,$jam)
  {
    $data = array(
                  'pst_name'         => urldecode($murid),
                  'guru_name'        => urldecode($guru),
                  'paket'            => urldecode($paket),
                  'status'       => 'belum',
                  'hari'       => $hari,
                  'jam'       => $jam
                );
       $this->mdl_konfirmasi->add($data);
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
                          'guru_password'     => sha1($guru_password),
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
  public function update($id)
  {
    $this->mdl_konfirmasi->set($id);
    redirect('Cprofile/landingG','refresh');
  }
  public function addjadwalguru()
  {
    $guru_name = $_SESSION['id_user']['guru_name'];
    $guru_gender = $_SESSION['id_user']['guru_gender'];
    $paket =$this->input->post('paket');
    $hari =$this->input->post('hari');
    $jam=$this->input->post('jam');

    $data = array(
                  'guru_name'          => urldecode($guru_name),
                  'paket'              => urldecode($paket),
                  'hari'               => $hari,
                  'jam'                => $jam,
                  'jeniskelamin'       => $guru_gender
                );
       $this->mdl_jguru->add($data);
       redirect('Cprofile/landingG','refresh');
  }
  public function addjadwalngaji($guru,$pst,$paket,$hari,$jam,$id)
  {
    $link = rand(100000,999999);
    $data = array(
                  'guru_name'          => urldecode($guru),
                  'pst_name'           => urldecode($pst),
                  'hari'               => $hari,
                  'jam'                => $jam,
                  'paket'              => urldecode($paket),
                  'link'               =>$link
                );
       $this->mdl_jadwal->add($data);
       $this->mdl_konfirmasi->delete($guru,$pst,$paket,$hari,$jam,$id);
       redirect('Admin/peserta','refresh');
  }
  public function deletekonfirmasi($guru,$pst,$paket,$hari,$jam,$id)
  {
    $this->mdl_konfirmasi->delete($guru,$pst,$paket,$hari,$jam,$id);
    redirect('Admin/peserta','refresh');
  }
  public function addgurufix($guru,$email,$password,$gender,$berkas)
  {
    $data = array(
                  'guru_name'          => urldecode($guru),
                  'guru_email'         => urldecode($email),
                  'guru_password'      => urldecode($password),
                  'guru_gender'        => $gender,
                  'berkas'             => $berkas
                );
       $this->mdl_gurufix->add($data);
       $this->mdl_guru->delete($email);

                                   $config = Array(
                                'protocol' => 'smtp',
                                'smtp_host' => 'mx1.hostinger.co.id',
                                'smtp_port' => 587,
                                'smtp_user' => 'admin@ngajikuy.com',
                                'smtp_pass' => 'Bismill4h',
                                'mailtype'  => 'html',
                                'charset'   => 'iso-8859-1'
                            );
                            $this->load->library('email', $config);
                            $this->email->set_newline("\r\n");

                             $this->email->from('admin@ngajikuy.com', 'Ngajikuy');
                            $this->email->to($email);

                            $this->email->subject('Diterima sebagai Guru');
                            $this->email->message('Selamat anda telah diterima sebagai guru di ngajikuy.com');

                            $result = $this->email->send();

       redirect('Admin/guru','refresh');
  }
  public function deleteguru($guru_email)
  {
    $this->mdl_guru->delete($guru_email);
    redirect('Admin/guru','refresh');
  }
  public function deletejadwal($id)
  {
    $this->mdl_jadwal->deletejadwal($id);
    redirect('Admin/jadwal','refresh');
  }
}
