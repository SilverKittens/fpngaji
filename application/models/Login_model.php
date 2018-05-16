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
        $this->db->where('pst_password',sha1($data['pst_password']));
        return $this->db->get('peserta')->row();
    }
    public function validate_guru($data) {
        $this->db->where('guru_email', $data['guru_email']);
        $this->db->where('guru_password',sha1($data['guru_password']));
        return $this->db->get('gurufix')->row();
    }
    public function validate_admin($data) {
        $this->db->where('adm_username', $data['adm_username']);
        $this->db->where('adm_password',sha1($data['adm_password']));
        return $this->db->get('admin')->row();
    }

    function __destruct() {
        $this->db->close();
    }
}
