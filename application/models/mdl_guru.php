<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_guru extends CI_Model{

  function __construct() {
      parent::__construct();
      $this->load->database();
  }

  public function add($data)
  {
      $this->db->insert('guru', $data);
  }
  public function set($value='')
  {
    // code...
  }

  public function get_all_data()
	{
		$query = $this->db->get('guru');
  //$query = $this->db->query('SELECT * from peserta');
		return $query;
	}
  public function get_selected_guru($id)
  {
    $query = $this->db->get_where('guru', array('id' => $id));
    return $query;
  }
  public function delete($guru_email)
  {
      $this->db->where('guru_email',$guru_email);
      $this->db->delete('guru');
  }
}
