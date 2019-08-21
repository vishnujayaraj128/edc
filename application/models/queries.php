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

       public function DeleteCategory($deleteid)
    {
       $this->db->where('cat_id',$deleteid);
       $this->db->delete('category');
    }



}

?>