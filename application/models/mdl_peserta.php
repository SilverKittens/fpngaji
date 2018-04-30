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
		$query = $this->db->get('Peserta');
		return $query;
	}

}
