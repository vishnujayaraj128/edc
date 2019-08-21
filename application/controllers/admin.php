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

// all employee
public function allEmployees()
{	
	$employeeData['allEmployees']=$this->queries->fecthAll_employee();
	$this->load->view('employee_all',$employeeData);
}
// single employee
public function singleEmployees()
{	
	$this->load->view('employee_single_view');
}

// add employee page
public function employeeAdd()
{
	// add employee page
	$EmployeeCategory['categories']=$this->queries->fetchCategory();	
	$this->load->view('employee_add',$EmployeeCategory);
}

// single user
public function singleView($singleviewID)
{
	$dataSingleEmployee['singleEmployee']=$this->queries->fecthSingleEmployee($singleviewID);
	$this->load->view('employee_single_view',$dataSingleEmployee);

}




// insert user
public function employeeInsert(){
	$this->form_validation->set_rules('empName', 'Full Name', 'required');
	$this->form_validation->set_rules('empDateOfBirth', 'Date of Birth');
	$this->form_validation->set_rules('empGender', 'Gender');
	$this->form_validation->set_rules('empGuardian', 'Guardian');
	$this->form_validation->set_rules('empReligion', 'Religion');
	$this->form_validation->set_rules('empSubCaste', 'Sub Caste');
	$this->form_validation->set_rules('empCasteGroup', 'Caste Group');
	$this->form_validation->set_rules('empEducation', 'Education');
	$this->form_validation->set_rules('empMobile', 'Mobile');
	$this->form_validation->set_rules('empAdhar', 'Aadhar');
	$this->form_validation->set_rules('empAddress', 'Address');
	$this->form_validation->set_rules('empBankName', 'Bank Name');
	$this->form_validation->set_rules('empBranchName', 'BranchName');
	$this->form_validation->set_rules('empifsc', 'IFSC');
	$this->form_validation->set_rules('empAccountNumber', 'Account Number');
	$this->form_validation->set_rules('empEmployeeID', 'Employee ID');
	$this->form_validation->set_rules('empDesignation', 'Designation', 'required');
	$this->form_validation->set_rules('empDateOfJoing', 'Date Of Joing');	
	$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

	if ($this->form_validation->run() === FALSE)
	{
		$this->employeeAdd();
	}
	else{

		//for age
		$new_date = date('Y', strtotime($_POST['empDateOfBirth']));
		$current=date("Y");
		$age = $current - $new_date;

		// current date and time
		$createdAt=date("Y-m-d H:i:a");

		$dateofBirth = date('Y/m/d', strtotime($_POST['empDateOfBirth']));
		$dateofjoining = date('Y/m/d', strtotime($_POST['empDateOfJoing']));


		$config['upload_path']          = './assets/images/profile';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2018;
		$config['max_width']            = 4000;
		$config['max_height']           = 4000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
				$error = array('error' => $this->upload->display_errors());
				$user_image='noimage.jpg';
				
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			 $user_image=$_FILES['userfile']['name'];
		}


		$users =array(
			'emp_name'               => $this->input->post('empName'),
			'emp_designation_id'     =>$this->input->post('empDesignation'),
			'emp_date_of_birth'      =>$dateofBirth,
			'emp_gender'             =>$this->input->post('empGender'),
			'emp_guardian'             =>$this->input->post('empGuardian'),
			'emp_religion'           =>$this->input->post('empReligion'),
			'emp_cast'               =>$this->input->post('empSubCaste'),
			'emp_group'              =>$this->input->post('empCasteGroup'),
			'emp_education'          =>$this->input->post('empEducation'),
			'emp_mob'                  =>$this->input->post('empMobile'),
			'emp_adhar'             =>$this->input->post('empAdhar'),
			'emp_address'          =>$this->input->post('empAddress'),
			'emp_bank_name'         =>$this->input->post('empBankName'),
			'emp_branch_name'       =>$this->input->post('empBranchName'),
			'emp_IFSC'              =>$this->input->post('empifsc'),
			'emp_account_number'    =>$this->input->post('empAccountNumber'),
			'emp_official_id'        =>$this->input->post('empEmployeeID'),
			'emp_date_of_joining'   =>$dateofjoining,
		   //  'emp_date_of_relieving' =>$this->input->post('designation_feild_id'),
		   	'emp_photo'                =>$user_image,
			'age'                  =>$age,
			'emp_created_at'        =>$createdAt
			

		  
		   );

		   $this->queries->create_employee($users);
		   $this->session->set_flashdata('success','Successfully Added New Employee');
		   $this->allEmployees();

	}      
	
		
	

}



// delete single employee

public function singleEmployeeDelete($singleEmployeeDeleteID)
{
	$this->queries->singleEmployeeRemove($singleEmployeeDeleteID);
	$this->session->set_flashdata('delete','Successfully Deleted Employee');
	$this->allEmployees();
}

// edit single employee



public function singleEmployeeedit($singleEmployeeEditID)
{

	echo $singleEmployeeEditID;
	// $this->queries->singleEmployeeRemove($singleEmployeeDeleteID);
	// $this->session->set_flashdata('delete','Successfully Deleted Employee');
	// $this->allEmployees();
}

























	

	


	
	


























































// end
}
?>