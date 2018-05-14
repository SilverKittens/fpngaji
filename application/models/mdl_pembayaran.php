<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_pembayaran extends CI_Model{

  function __construct() {
      parent::__construct();
      $this->load->database();
  }

  public function add($data)
  {
      $this->db->insert('pembayaran', $data);
  }

  public function get_all_data()
	{
		$query = $this->db->get('pembayaran');
  //$query = $this->db->query('SELECT * from peserta');
		return $query;
	}
  public function get_selected_pembayaran($pst_name)
  {
    $query = $this->db->get_where('pembayaran', array('pst_name' => $pst_name));
    return $query;
  }
}
