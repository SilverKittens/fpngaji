<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginguru extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->model("login_model", "loginguru");
        if(!empty($_SESSION['id_user']))
            redirect('Cprofile/landingG');
    }

    public function index() {
        if($_POST) {
            $result = $this->loginguru->validate_guru($_POST);
            if(!empty($result)) {
                $data =[
                    'guru_email' => $result->guru_email,
                    'guru_password' => $result->guru_password,
                    'id'=> $result->id,
                    'guru_name' => $result->guru_name
                ];
                $_SESSION['id_user']=$data;
                $this->session->set_userdata('user',$data);
                $user= array(
                  'user' => $this->session->userdata('user')
                );
                redirect('Cprofile/landingG');
                //$this->load->view('Peserta/guru', $user);
            } else {
                $this->session->set_flashdata('flash_data', 'Username or password is wrong!');
                redirect('Welcome/masukguru');
            }
        }
        else
        $this->load->view("masukguru");
    }
}
