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














}

?>