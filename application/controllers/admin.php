<?php


class admin extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('queries');
	}
	public function index()
	{
		// dashboard
		$this->load->view('dashoboard');
	}
	public function employeeAdd()
	{
		// add employee page
		$this->load->view('employee_add');
	}
	public function EmployeeCategory()
	{
		//$this->load->view('employee_category');
		// view EmployeeCategory
		$EmployeeCategory['categories']=$this->queries->fetchCategory();
		$this->load->view('employee_category',$EmployeeCategory);
	}	

	public function CreateEmployeeCategory()
	{
		// $this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('category','Category','required');	
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');		
		
		if ($this->form_validation->run() == FALSE)
		{
			redirect(base_url('admin/EmployeeCategory'));
			//$this->load->view('employee_category');
			// redirect('admin/EmployeeCategory', 'refresh');	
		}
		else
		{
			$employeeCategory=$this->input->post('category');
			$category = array(
			"cat_name" => $employeeCategory
			);			
			$this->queries->insertCategory($category);
			$this->load->view('employee_category');
			$this->session->set_flashdata('category','Successfully Created New Category');
			redirect(base_url('admin/EmployeeCategory'));
		}
	}

	public function DeleteEmployeeCategory($deletecategory)
	{
		// Delete EmployeeCategory
		$this->queries->DeleteCategory($deletecategory);
		redirect(base_url('admin/EmployeeCategory'));
	}

	


	
	



























































}