<?php 

class queries extends CI_Model{

    // insert category
    public function insertCategory($category)
    {
        return $this->db->insert('category',$category);
    }

    // fetch category

    public function fetchCategory()
    {
        $query= $this->db->get('category');
        return $query->result_array();
    }

       public function DeleteCategory($deletecategory)
    {
       $this->db->where('cat_id',$deletecategory);
       $this->db->delete('category');
    }

    public function EditCategory($EditID){

        $this->db->where("cat_id", $EditID);
        $query=$this->db->get('category');
        return $query->row_array();


    }

    public function updateCategory($updateCategory,$categoryUpdateID)

    {
        $this->db->where("cat_id",$categoryUpdateID);
        return $this->db->update('category',$updateCategory);
    }


// ********************************************************************************
// ********************************************************************************
// Create Employee
// ********************************************************************************
// ********************************************************************************


public function create_employee($users)
{
    return $this->db->insert('employee',$users);
}

//fetch all user
public function fecthAll_employee()
{
    $this->db->order_by('emp_designation_id','ASC');
    $this->db->join('category','category.cat_id = employee.emp_designation_id');
   $query= $this->db->get('employee');
   return  $query->result_array();
}


//fetch single user
public function fecthSingleEmployee($singleviewID)
{
    $this->db->where('emp_id',$singleviewID);
    $this->db->join('category','category.cat_id = employee.emp_designation_id');
    $query= $this->db->get('employee');
    return $query->row_array();


}

//delete single user
public function singleEmployeeRemove($singleEmployeeDeleteID){

 $this->db->where('emp_id',$singleEmployeeDeleteID);
 return  $this->db->delete('employee');

}


// ********************************************************************************
// ********************************************************************************
// Create Rate Amount
// ********************************************************************************
// ********************************************************************************

public function insertRate($rate)
{
   return $this->db->insert('rate',$rate);

}


public function fetchRate()
{
  
    $select = $this->db->get('rate');
    return $select->result_array();
}



public function deleteRate($DeleteRateAmountid)
{
    $this->db->where('rate_id',$DeleteRateAmountid);
    $this->db->delete('rate');

}


public function editRate($EditRateAmountid)
{
    $this->db->where('rate_id',$EditRateAmountid);
    $editquery=$this->db->get('rate');
    return $editquery->row_array();
}


public function updateRate($update_amount,$UpdateRateAmountid)
{
    $this->db->where('rate_id',$UpdateRateAmountid);
   return $this->db->update('rate',$update_amount);
}


// ********************************************************************************
// ********************************************************************************
// Create Office Accounts
// ********************************************************************************
// ********************************************************************************

public function insertOfficeAccounts($accounts)
{
    return $this->db->insert('account',$accounts);
}


public function fetchOfficeAccounts()
{
    $selectquery = $this->db->get('account');
    return  $selectquery->result_array();
}

public function deleteOfficeAccounts($DeleteOfficeAccount)
{
    $this->db->where('ac_id',$DeleteOfficeAccount);
    return $this->db->delete('account');

}


public function editOfficeAccounts($EditOfficeAccount)
{
    $this->db->where('ac_id',$EditOfficeAccount);
    $editquery=$this->db->get('account');
    return $editquery->row_array();
}



public function updateOfficeAccounts($updateaccounts,$UpdateOfficeAccountid)
{
    $this->db->where('ac_id',$UpdateOfficeAccountid);
   return $this->db->update('account',$updateaccounts); 
}

// ********************************************************************************
// ********************************************************************************
// Create Fund Group Name
// ********************************************************************************
// ********************************************************************************

public function insertFundGroupCategory($fundgroup)
{
    return $this->db->insert('fundgroup',$fundgroup);
}


public function fetchFundGroupCategory()
{
    $viewquery = $this->db->get('fundgroup');
    return $viewquery->result_array();
}

public function deleteFundGroupCategory($DeleteFundGroupCategory)
{
    $this->db->where('group_id',$DeleteFundGroupCategory);
    return  $this->db->delete('fundgroup');
}







// ********************************************************************************
// ********************************************************************************
// Salary
// ********************************************************************************
// ********************************************************************************


//fetch Employee for Salary

public function fetchEmployeeforSalary($designation_id){
    $this->db->where('emp_designation_id',$designation_id);
    $query=$this->db->get('employee');
    return $query->result();
}


public function get_employee_account($employee_id){

    $this->db->where('emp_id',$employee_id);
    $query=$this->db->get('employee');
    return $query->row();
    
}






































//end

}

?>