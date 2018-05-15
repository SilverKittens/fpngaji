<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function validate_user($data) {
        $this->db->where('pst_email', $data['pst_email']);
        $this->db->where('pst_password',$data['pst_password']);
        return $this->db->get('peserta')->row();
    }
    public function validate_guru($data) {
        $this->db->where('guru_email', $data['guru_email']);
        $this->db->where('guru_password',$data['guru_password']);
        return $this->db->get('guru')->row();
    }

    function __destruct() {
        $this->db->close();
    }
}
