<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('student_model');
        $this->load->library('form_validation');
    }

	public function student_list()
	{
		$data['student_list']=$this->student_model->get_stu_list();
		$this->load->view('student-list',$data);
	}
	public function student_add()
	{
		$this->load->view('student-add');
		$this->form_validation->set_rules('stu_name', 'stu_name', 'required');
         if ($this->form_validation->run() == true) { 
		$student_name=$this->input->post('stu_name');
		$student_city=$this->input->post('stu_city');
		$student_contact=$this->input->post('stu_contact');
		$data = array(
		'stu_name'=>$student_name,
		'stu_city'=>$student_city,
		'stu_contact'=>$student_contact
		);
		 $resp=$this->student_model->insert_data($data);
		 redirect('student-list');
		}
	}
	public function student_update($user_id)
	{
		
		$data['stu_ed']=$this->student_model->get_stu_edit($user_id);
		$this->load->view('student-edit',$data);
		$this->form_validation->set_rules('stu_name', 'stu_name', 'required');
         if ($this->form_validation->run() == true) { 
		$student_name=$this->input->post('stu_name');
		$student_city=$this->input->post('stu_city');
		$student_contact=$this->input->post('stu_contact');
		$data = array(
		'stu_name'=>$student_name,
		'stu_city'=>$student_city,
		'stu_contact'=>$student_contact
		);
		 $resp=$this->student_model->update_row($data,$user_id);
		 redirect('student-list');
		}
	}
	public function delete_row($user_id) {   
    $this->student_model->delete_row($user_id);
     redirect('student-list');
}
}
