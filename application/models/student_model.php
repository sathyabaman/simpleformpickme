<?php

class Student_model extends CI_Model {

	
    function __construct()
    {
    	parent::__construct();
    }

    //student
    function insert_student($data){
    	 $student['name']        =$data['name'];
         $student['address']        =$data['address'];
         $student['nic']       =$data['nic'];
         $student['created_date']       =$data['created_date'];
         $student['updated_date']    =$data['updated_date'];
         $student['status']       = 1;
         
         $results = $this->db->insert('student', $student); 
         return $results;
    }


    function get_all_students(){
      $where = array('status' => 1);
      $this->db->select('*');
      $this->db->order_by("id", "asc"); 
      $this->db->where($where); 
      $this->db->from('student'); 
      $query = $this->db->get();
      $result = $query->result();
      return $result;
    }

    function get_single_student_details($id){

      $where = array('id' => $id);
      $this->db->select('*');
      $this->db->where($where); 
      $this->db->from('student'); 
      $query = $this->db->get();
      $result = $query->result();
      return $result;
    }

    function update_student($data){

      $fields = array('name'		=>$data['name'],
      				  'address'		=>$data['address'],
      				  'nic'			=>$data['nic'],
      				  'updated_date'=>$data['updated_date']
       				  );
      

      $this->db->where('id', $data['id']);
      $this->db->update('student', $fields); 

    }

    function delete_single_school($id){
      $this->db->where('sch_id', $id);
      $this->db->delete('school');

    }


    

}

?>