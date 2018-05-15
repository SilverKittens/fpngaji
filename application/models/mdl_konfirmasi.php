<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_konfirmasi extends CI_Model{

  function __construct() {
      parent::__construct();
      $this->load->database();
  }

  public function add($data)
  {
      $this->db->insert('konfirmasi', $data);
  }

  public function get_all_data()
	{
		$query = $this->db->get('konfirmasi');
  //$query = $this->db->query('SELECT * from peserta');
		return $query;
	}
  public function get_selected_konfirmasi($guru_name)
  {
    $query = $this->db->get_where('konfirmasi', array('guru_name' => $guru_name));
    return $query;
  }
}
