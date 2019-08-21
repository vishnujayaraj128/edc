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






































//end

}

?>