<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_gurufix extends CI_Model{

  function __construct() {
      parent::__construct();
      $this->load->database();
  }

  public function add($data)
  {
      $this->db->insert('gurufix', $data);
  }
  public function set($value='')
  {
    // code...
  }

  public function get_all_data()
	{
		$query = $this->db->get('gurufix');
  //$query = $this->db->query('SELECT * from peserta');
		return $query;
	}
  public function get_selected_guru($id)
  {
    $query = $this->db->get_where('gurufix', array('id' => $id));
    return $query;
  }
}
