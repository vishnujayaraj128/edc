<?php


class admin extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('queries');
		$this->load->helper('security');	
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
			$category=$this->security->xss_clean($category);			
			$this->queries->insertCategory($category);
			//$this->load->view('employee_category');
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


// ********************************************************************************
// ********************************************************************************
// Create Rate Amount
// ********************************************************************************
// ********************************************************************************
public function RateAmount()
{
	$RateAmount['amounts'] = $this->queries->fetchRate();
	$this->load->view('employee_rate',$RateAmount);
}



public function CreateRateAmount()
{
	$this->form_validation->set_rules('rate_amount','Rate Amount','required');	
	$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

	if ($this->form_validation->run() == FALSE)
		{
			$this->RateAmount();
			
		}
	else
	{
			$rateAmount=$this->input->post('rate_amount');
			$rate = array(
			"rate_amount" => $rateAmount
			);			
			$this->queries->insertRate($rate);
			//$this->load->view('employee_category');
			$this->session->set_flashdata('rate','Successfully Created New Rate Amount');
			redirect(base_url('admin/RateAmount'));
	}	

}

public function DeleteRateAmount($DeleteRateAmountid)
{
	$this->queries->deleteRate($DeleteRateAmountid);
	$this->session->set_flashdata('DeleteRateAmount','Successfully Deleted Rate Amount');
	$this->RateAmount();


}

public function EditRateAmount($EditRateAmountid)
{
	$data['editrateamountID']= $this->queries->editRate($EditRateAmountid);
	$this->load->view('employee_rate_update',$data);
}


public function UpdateRateAmount($UpdateRateAmountid)
{
	$this->form_validation->set_rules('rate_amount','Rate Amount','required');	
	$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

	if ($this->form_validation->run() == FALSE)
		{
			$this->RateAmount();
			
		}
	else
	{
			$updaterateAmount=$this->input->post('rate_amount');
			$update_amount = array(
			"rate_amount" => $updaterateAmount
			);			
			$this->queries->updateRate($update_amount,$UpdateRateAmountid);
			//$this->load->view('employee_category');
			$this->session->set_flashdata('update_amount_success','Successfully Updated Rate Amount');
			$this->RateAmount();
	}	
	
}


// ********************************************************************************
// ********************************************************************************
// Create Office Accounts
// ********************************************************************************
// ********************************************************************************

 public function OfficeAccounts()
 {
// 	// View Office Accounts
 	 $data['accounts'] = $this->queries->fetchOfficeAccounts();
 	// print_r( $OfficeAccounts['accounts']);
 	 //exit();
     $this->load->view('office_accounts',$data);
}

 public function CreateOfficeAccounts()
 {
 // Create Office Accounts
	$this->form_validation->set_rules('acc_name','Account Name','required');
	$this->form_validation->set_rules('acc_number','Account Number','required');
 	$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

	if ($this->form_validation->run() == FALSE)
 		{
			$this->OfficeAccounts();
		}
 	else
		{
			$account_name=$this->input->post('acc_name');
			$account_number=$this->input->post('acc_number');

			$accounts = array(
			"ac_name" => $account_name,
			"ac_number" => $account_number
			);	

 		$this->queries->insertOfficeAccounts($accounts);
		$this->session->set_flashdata('accountSuccess','Successfully Created New Office Accounts');
		redirect(base_url('admin/OfficeAccounts'));
		}
}

public function DeleteOfficeAccount($DeleteOfficeAccount)
{
	$this->queries->deleteOfficeAccounts($DeleteOfficeAccount);
	$this->session->set_flashdata('deleteAccount','Successfully Deleted Office Account');
	$this->OfficeAccounts();
}



public function EditOfficeAccount($EditOfficeAccount)
{
	$data['editAccountID'] = $this->queries->editOfficeAccounts($EditOfficeAccount);
	$this->load->view('office_accounts_update',$data);

}


public function UpdateOfficeAccount($UpdateOfficeAccountid)
{
	$this->form_validation->set_rules('acc_name','Account Name','required');
	$this->form_validation->set_rules('acc_number','Account Number','required');
	$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

	if ($this->form_validation->run() == FALSE)
		{
			$this->OfficeAccounts();
		}
	else
		{
		$updateaccounts = array(
		'ac_name' => $this->input->post('acc_name'),
		'ac_number' => $this->input->post('acc_number')
		);

		$this->queries->updateOfficeAccounts($updateaccounts,$UpdateOfficeAccountid);
		$this->session->set_flashdata('UpdateAccount','Successfully Updated Ofice Account');
		$this->OfficeAccounts();

		}
}




// // ********************************************************************************
// // ********************************************************************************
// // Create Fund Group Name
// // ********************************************************************************
// // ********************************************************************************


// public function CreateFundGroupCategory()
// {
// 	$this->form_validation->set_rules('group_name','fund FundGroup Category','required');
// 	$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
// 	if ($this->form_validation->run() == FALSE)
// 		{
// 			$this->FundGroupCategory();
// 		}
	
// 	else{

// 		$fundgroup = array(
// 		'group_name' => $this->input->post('group_name')
// 		);

// 		$this->queries->insertFundGroupCategory($fundgroup);
// 	$this->session->set_flashdata('Successfully','Successfully Added New Fund Group Category');
// 		$this->FundGroupCategory();

// 		}
// }


// public function FundGroupCategory()
// {
// 	//$this->load->view('fundgroup_category');
// 	$FundGroup['groups']=$this->queries->fetchFundGroupCategory();
// 	$this->load->view('fundgroup_category',$FundGroup);
// }




// public function DeleteFundGroupCategory($DeleteFundGroupCategory)
// {
// 	$this->queries->deleteFundGroupCategory($DeleteFundGroupCategory);
// 	$this->session->set_flashdata('fundgroupdelete','Successfully Deleted Fund Group Category');
// 	$this->FundGroupCategory();

// }



// public function EditFundGroupCategory()
// {

// }




// ********************************************************************************
// ********************************************************************************
// Rate
// ********************************************************************************
// ********************************************************************************














// ********************************************************************************
// ********************************************************************************
// Salary
// ********************************************************************************
// ********************************************************************************


// Create Salary


public function salary()
{
// view EmployeeCategory

$data['categories']=$this->queries->fetchCategory();

$data['rates']= $this->queries->fetchRate();

	$this->load->view('employee_salary', $data );
}


public function get_employee_for_salary()
{
	$designation_id=$this->input->post('user_designation');
	$users=$this->queries->fetchEmployeeforSalary($designation_id);
	if(count($users)>0)
	{
			$users_select_box='';
			$users_select_box.='<option value="">Select User</option>';

			foreach ($users as $user) 
            {
				$users_select_box.='<option value="'.$user->emp_id.'"> '.$user->emp_name.' </option>';
			}

			echo json_encode($users_select_box);

	}
}



public function get_employee_account_number(){

	$employee_id=$this->input->post('employee_id');
	$employee_account_number=$this->queries->get_employee_account($employee_id);

	if(count($employee_account_number)>0)
	
	{
		$employee_select_box= "Account Number: ". $employee_account_number->emp_account_number;
	
	}

	echo json_encode($employee_select_box);

}















	

	


	
	


























































// end
}
?>