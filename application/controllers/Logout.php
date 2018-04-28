<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->model("login_model", "login");
        session_unset();
        session_destroy();
        if(!empty($_SESSION['id_user']))
            $this->load->view('Cprofile/guru');
    }


    public function index()
    {
      if (isset($_SESSION['id_user']) && $_SESSION['id_user'] === true) {

			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}

			// user logout ok
			$this->load->view('masuk');

		} else {

			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect('/');

		}
    }
}
