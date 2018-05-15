<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_jguru extends CI_Model{

  function __construct() {
      parent::__construct();
      $this->load->database();
  }

  public function add($data)
  {
      $this->db->insert('jadwalguru', $data);
  }
  public function set($value='')
  {
    // code...
  }

  public function get_all_data()
	{
		$query = $this->db->get('jadwalguru');
  //$query = $this->db->query('SELECT * from peserta');
		return $query;
	}
  public function get_selected_guru($id)
  {
    $query = $this->db->get_where('jadwalguru', array('id' => $id));
    return $query;
  }
}
