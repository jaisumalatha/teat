<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {
	function __construct() {
    parent::__construct();
	$this->load->database();
}
	public function get_stu_list()
	{
		$this->db->select('*');
		$this->db->from('student_table');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function get_stu_edit($id)
	{
		$this->db->select('*');
		$this->db->from('student_table');
		$this -> db -> where('stu_id', $id);
		$query = $this->db->get();
		return $query->row_array();
	}
	public function insert_data($data)
	{
		$this->db->insert('student_table',$data);
    	return true;
	}
	public function delete_row($id){
	    $this -> db -> where('stu_id', $id);
	    $this -> db -> delete('student_table');
	}
	public function update_row($data,$id){
	    $this -> db -> where('stu_id', $id);
	    $this -> db -> update('student_table',$data);
	    return $this->db->affected_rows();
	}
}