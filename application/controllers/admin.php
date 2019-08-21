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
	
	public function EmployeeCategory()
	{

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
			// redirect(base_url('admin/EmployeeCategory'));
			$this->EmployeeCategory();
			// $this->load->view('employee_category');
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
		$this->session->set_flashdata('categoryDeleted','Successfully Deleted Category');
		$this->EmployeeCategory();
		
	}

	//edit category


	public function EditEmployeeCategory($EditID){		
	$data['editCategoryID']= $this->queries->EditCategory($EditID);

	$this->load->view('employee_category_update',$data);
	

	}

	public function updateEmployeeCategory($categoryUpdateID)
	{
		$this->form_validation->set_rules('category','Category','required');	
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if ($this->form_validation->run() == FALSE)
		{
			// redirect(base_url('admin/EmployeeCategory'));
			$this->employee_category_update();
			// $this->load->view('employee_category');
			// redirect('admin/EmployeeCategory', 'refresh');	
		}
		else
		{
			$employeeUpdateCategory=$this->input->post('category');
			$updateCategory = array(
			"cat_name" => $employeeUpdateCategory
			);			
			$this->queries->updateCategory($updateCategory,$categoryUpdateID);
			$this->session->set_flashdata('categoryUpdate','Successfully Updated Category');
			$this->EmployeeCategory();
			
		
		}
	}


// ********************************************************************************
// ********************************************************************************
// Create Employee
// ********************************************************************************
// ********************************************************************************


public function employeeAdd()
{
	// add employee page

	$EmployeeCategory['categories']=$this->queries->fetchCategory();	
	$this->load->view('employee_add',$EmployeeCategory);
}
























	

	


	
	



























































}