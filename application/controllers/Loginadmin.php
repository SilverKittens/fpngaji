<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginadmin extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->model("login_model", "loginadmin");
        if(!empty($_SESSION['id_user']))
            redirect('Admin');
    }

    public function index() {
        if($_POST) {
            $result = $this->loginadmin->validate_admin($_POST);
            if(!empty($result)) {
                $data =[
                    'adm_username' => $result->adm_username,
                    'adm_password' => sha1($result->guru_password),
                ];
                $_SESSION['id_user']=$data;
                $this->session->set_userdata('user',$data);
                $user= array(
                  'user' => $this->session->userdata('user')
                );
                redirect('Admin');
                //$this->load->view('Peserta/guru', $user);
            } else {
                $this->session->set_flashdata('flash_data', 'Username or password is wrong!');
                redirect('Admin/login');
            }
        }
        else
        $this->load->view("Admin/login");
    }
}
