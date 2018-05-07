<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->model("login_model", "login");
        if(!empty($_SESSION['id_user']))
            //$this->load->view('Peserta/guru');
            redirect('Cprofile/guru');
    }

    public function index() {
        if($_POST) {
            $result = $this->login->validate_user($_POST);
            if(!empty($result)) {
                $data =[
                    'pst_email' => $result->pst_email,
                    'pst_password' => $result->pst_password,
                    'id'=> $result->id,
                    'pst_name' => $result->pst_name
                ];
                $_SESSION['id_user']=$data;
                $this->session->set_userdata('user',$data);
                $user= array(
                  'user' => $this->session->userdata('user')
                );
                redirect('Cprofile/guru');
                //$this->load->view('Peserta/guru', $user);
            } else {
                $this->session->set_flashdata('flash_data', 'Username or password is wrong!');
                redirect('Welcome/masuk');
            }
        }
        else
        $this->load->view("masuk");
    }
}
