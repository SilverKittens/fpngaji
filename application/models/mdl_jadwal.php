<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_jadwal extends CI_Model{

  function __construct() {
      parent::__construct();
      $this->load->database();
  }

  public function add($data)
  {
      $this->db->insert('jadwalngaji', $data);
  }

  public function get_all_data()
	{
		$query = $this->db->get('jadwalngaji');
  //$query = $this->db->query('SELECT * from peserta');
		return $query;
	}
  public function get_selected_jadwal($pst_name)
  {
    $query = $this->db->get_where('jadwalngaji', array('pst_name' => $pst_name));
    return $query;
  }
}
