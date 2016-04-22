<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class student extends CI_Controller {


    function __construct() {
        parent::__construct();
      //session, url, satabase is set in auto load in the config
        $this->load->model('Student_model', 'mstudent');
    }

    function index(){
    	redirect('student/dashboard/', 'refresh');
    }

    function dashboard(){
        $data['dstudents'] = $this->mstudent->get_all_students();
        $this->load->view('view_students', $data);
    }


    function add_student(){
    	$stud = $this->input->post('stud');
    	$data['name'] 			= $stud[0];
    	$data['address'] 		= $stud[1];
    	$data['nic'] 			= $stud[2];
    	$data['created_date'] 	= date("Y-m-d H:i:s");
    	$data['updated_date'] 	= date("Y-m-d H:i:s");
    	$data['status'] 		= 1;

    	$data['dstudents'] = $this->mstudent->insert_student($data);
    }

    function get_single_student(){
    	$student_id = $this->input->post('student_id');
    	$single_student = $this->mstudent->get_single_student_details($student_id);
    	echo json_encode(array( 'Sstudent'=> $single_student));
    }

    function edit_student(){
    	$stud = $this->input->post('stud');
    	$data['id'] 		= $stud[0];
    	$data['name'] 		= $stud[1];
    	$data['address'] 	= $stud[2];
    	$data['nic'] 		= $stud[3];
    	$data['updated_date'] 		= date("Y-m-d H:i:s");;

    	$result = $this->mstudent->update_student($data);
    	if($result){
    	echo json_encode('update Success');
    	}
    }


    


}
?>