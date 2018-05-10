<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_peserta extends CI_Model{

  function __construct() {
      parent::__construct();
      $this->load->database();
  }

  public function add($data)
  {
      $this->db->insert('Peserta', $data);
  }

  public function get_all_data()
	{
		$query = $this->db->get('peserta');
  //$query = $this->db->query('SELECT * from peserta');
		return $query;
	}
  public function get_selected_data_peserta($id)
  {
    $query = $this->db->get_where('peserta', array('id' => $id));
    return $query;
  }
}
