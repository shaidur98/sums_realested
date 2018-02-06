<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->model('crud');
    }

    public function gen_uid() {
		$stamp = date("Ymdhis");
		$ip = $_SERVER['REMOTE_ADDR'];
		$orderid = "$stamp-$ip";
		$orderid = str_replace(".", "", "$orderid");
		$orderid = str_replace(":", "", "$orderid");
		return $orderid;
	}
	
	public function index()
	{
		if(!$this->session->userdata('bs_cs_islogin'))
		   $this->load->view('backend/login');
		  else
		   redirect('admin/dashboard');
	}

	public function dashboard()
	{	
		$this->is_login();
		$page_data['page'] = 'Dashboard';
		$this->load->view('backend/header',$page_data);
		$this->load->view('backend/dashboard');
		$this->load->view('backend/footer');
	}

	public function posts()
	{
		//$this->is_login();
		if(!isset($_GET['a'])) {
			$page_data['page'] = 'Posts';
			$this->load->view('backend/header',$page_data);
            $page_data['posts'] = $this->db->get('posts')->result();
			$this->load->view('backend/posts_list',$page_data);
			$this->load->view('backend/footer');
		}
		else if($_GET['a'] == 'add') {
			$page_data['page'] = 'Add Post';
			$this->load->view('backend/header',$page_data);
			$page_data['post_positions'] = $this->db->get('post_positions')->result();
			$this->load->view('backend/add_post',$page_data);
			$this->load->view('backend/footer');
		}
		else if($_GET['a'] == 'edit') {
           	$page_data['page'] = 'Edit Post';
			$this->load->view('backend/header',$page_data);
			$page_data['post_positions'] = $this->db->get('post_positions')->result();
			$id = $_GET['id'];
			$page_data['sdata'] = $this->db->get_where('posts',array('id'=>$id))->row();
			$this->load->view('backend/edit_post',$page_data);
			$this->load->view('backend/footer');
		}
		else if($_GET['a'] == 'update') {
			$input_data = $this->input->post();
			$data = array(
				'post_title'	=>	$input_data['post_title'],
				'post_position_id'	=>	$input_data['post_position_id'],
				'post_details'	=>	$input_data['post_details'],
				'created_at'	=>	$input_data['post_details'],
				'status'	=>	$input_data['post_status'],


			);
			if($_FILES["file"]["error"] != 4) {
				$file = $this->db->get_where('posts', array('id'=>$_GET['id']))->row()->featured_image;
				if($file != '' && $file != 'default.jpg')
					$this->crud->delete_file('featured_image', $file);
				$img = $this->crud->upload_img('featured_image', 'file');
				$data['featured_image'] = $img;
			}
			$this->db->where('id',$_GET['id']);
			$this->db->update('posts',$data);
			redirect('admin/posts');
		}
		else if($_GET['a'] == 'save') {
			$input_data = $this->input->post();
			$data = array(
				'id' => $this->gen_uid(),
				'post_title'	=>	$input_data['post_title'],
				'post_position_id'	=>	$input_data['post_position_id'],
				'post_details'	=>	$input_data['post_details']
			);
			if($_FILES["file"]["error"] != 4) {
				$img = $this->crud->upload_img('featured_image', 'file');
				$data['featured_image'] = $img;
			}
			else {
				$data['featured_image'] = 'default.jpg';
			}
			$this->db->insert('posts',$data);
			redirect('admin/posts');

		}
		else if($_GET['a'] == 'delete') {
			$this->db->where('id',$_GET['id']);
			$this->db->delete('posts');
			redirect('admin/posts');
		}
		else {
			redirect('admin/not_found');
		}
	}




	public function projects()
	{
		//$this->is_login();
		if(!isset($_GET['a'])) {
            $this->load->view('backend/header');
            $page_data['projects'] = $this->db->get('projects')->result();
			$this->load->view('backend/project_list',$page_data);
			$this->load->view('backend/footer');
		}
		else if($_GET['a'] == 'add') {
            $this->load->view('backend/header');
			$this->load->view('backend/add_project');
			$this->load->view('backend/footer');
		}
		else if($_GET['a'] == 'edit') {
            $this->load->view('backend/header');
			$id = $_GET['id'];
			$page_data['sdata'] = $this->db->get_where('projects',array('id'=>$id))->row();
						
			$this->load->view('backend/edit_project',$page_data);
			$this->load->view('backend/footer');
		}
		else if($_GET['a'] == 'update') {
			$input_data = $this->input->post();
			$data = array(
				'project_title'	=>	$input_data['project_title'],
				'project_description'	=>	$input_data['project_description'],	
				'project_overview'	=>	$input_data['project_overview'],
				'location'	=>	$input_data['location'],
				'type_of_project'	=>	$input_data['type_of_project'],	
				'build_up_area'	=>	$input_data['build_up_area'],	
				'number_of_floors'	=>	$input_data['number_of_floors'],
				'apartment_floor'	=>	$input_data['apartment_floor'],
				'size'	=>	$input_data['size'],
				'bed_room'	=>	$input_data['bed_room'],
				'bath_room'	=>	$input_data['bath_room'],
				'collection'	=>	$input_data['collection'],
				'launch_date'	=>	$input_data['launch_date'],
				'completion_date'	=>	$input_data['completion_date'],	
				'project_status'	=>	$input_data['project_status'],
				'location_details'	=>	$input_data['location_details'],
				'created_at'	=>	$input_data['created_at'],
				'modified_at'	=>	$input_data['modified_at'],									
				'status'	=>	$input_data['status']
			);
			if($_FILES["file"]["error"] != 4) {
				$file = $this->db->get_where('projects', array('id'=>$_GET['id']))->row()->project_image;
				if($file != '' && $file != 'default.jpg')
					$this->crud->delete_file('project_image', $file);
				$img = $this->crud->upload_img('project_image', 'file');
				$data['project_image'] = $img;
			}
			$this->db->where('id',$_GET['id']);
			$this->db->update('projects',$data);
			redirect('admin/projects');
		}
		else if($_GET['a'] == 'save') {
			$input_data = $this->input->post();
			$data = array(
				'id' => $this->gen_uid(),
				'project_title'	=>	$input_data['project_title'],
				'project_description'	=>	$input_data['project_description'],	
				'project_overview'	=>	$input_data['project_overview'],
				'location'	=>	$input_data['location'],
				'type_of_project'	=>	$input_data['type_of_project'],	
				'build_up_area'	=>	$input_data['build_up_area'],	
				'number_of_floors'	=>	$input_data['number_of_floors'],
				'apartment_floor'	=>	$input_data['apartment_floor'],
				'size'	=>	$input_data['size'],
				'bed_room'	=>	$input_data['bed_room'],
				'bath_room'	=>	$input_data['bath_room'],
				'collection'	=>	$input_data['collection'],
				'launch_date'	=>	$input_data['launch_date'],
				'completion_date'	=>	$input_data['completion_date'],	
				'project_status'	=>	$input_data['project_status'],
				'location_details'	=>	$input_data['location_details'],
				'created_at'	=>	$input_data['created_at'],
				'modified_at'	=>	$input_data['modified_at'],									
				'status'	=>	$input_data['status']
			);
			if($_FILES["file"]["error"] != 4) {
				$img = $this->crud->upload_img('project_image', 'file');
				$data['project_image'] = $img;
			}
			else {
				$data['project_image'] = 'default.jpg';
			}

			if($_FILES["file2"]["error"] != 4) {
				$img = $this->crud->upload_img('floor_plan_image', 'file2');
				$data['floor_plan_image'] = $img;
			}
			else {
				$data['floor_plan_image'] = 'default.jpg';
			}

			$this->db->insert('projects',$data);
			redirect('admin/projects');

		}
		else if($_GET['a'] == 'delete') {
			$this->db->where('id',$_GET['id']);
			$this->db->delete('projects');
			redirect('admin/projects');
		}
		else {
			redirect('admin/not_found');
		}
	}

	public function gallery()
	{
		//$this->is_login();
		if(!isset($_GET['a'])) {
            $this->load->view('backend/header');
            $page_data['portfolios'] = $this->db->get('gallery')->result();
			$this->load->view('backend/portfolio_list',$page_data);
			$this->load->view('backend/footer');
		}
		else if($_GET['a'] == 'add') {
            $this->load->view('backend/header');
			$this->load->view('backend/add_portfolio');
			$this->load->view('backend/footer');
		}
		else if($_GET['a'] == 'edit') {
            $this->load->view('backend/header');
			$id = $_GET['id'];
			$page_data['sdata'] = $this->db->get_where('gallery',array('id'=>$id))->row();
			$this->load->view('backend/edit_portfolio',$page_data);
			$this->load->view('backend/footer');
		}
		else if($_GET['a'] == 'update') {
			$input_data = $this->input->post();
			$data = array(

				'image_title'	=>	$input_data['image_title'],
				'image_details'	=>	$input_data['image_details'],
				'modified_at'	=>	$input_data['modified_at'],
				'status'	=>	$input_data['status']
				
			);
			if($_FILES["file"]["error"] != 4) {
				$file = $this->db->get_where('gallery', array('id'=>$_GET['id']))->row()->image_name;
				if($file != '' && $file != 'default.jpg')
					$this->crud->delete_file('portfolio_image', $file);
				$img = $this->crud->upload_img('portfolio_image', 'file');
				$data['image_name'] = $img;
			}
			$this->db->where('id',$_GET['id']);
			$this->db->update('gallery',$data);
			redirect('admin/gallery');
		}
		else if($_GET['a'] == 'save') {
			$input_data = $this->input->post();
			$data = array(
				'id' => $this->gen_uid(),
				'image_title'	=>	$input_data['image_title'],
				'image_details'	=>	$input_data['image_details'],
				'created_at'	=>	$input_data['created_at'],				
				'modified_at'	=>	$input_data['modified_at'],
				'status'	=>	$input_data['status']				
			);
			if($_FILES["file"]["error"] != 4) {
				$img = $this->crud->upload_img('portfolio_image', 'file');
				$data['image_name'] = $img;
			}
			else {
				$data['image_name'] = 'default.jpg';
			}
			$this->db->insert('gallery',$data);
			redirect('admin/gallery');

		}
		else if($_GET['a'] == 'delete') {
			$this->db->where('id',$_GET['id']);
			$this->db->delete('gallery');
			redirect('admin/gallery');
		}
		else {
			redirect('admin/not_found');
		}
	}


public function our_team()
	{
		//$this->is_login();
		if(!isset($_GET['a'])) {
            $this->load->view('backend/header');
            $page_data['team_members'] = $this->db->get('team_members')->result();
			$this->load->view('backend/members_list',$page_data);
			$this->load->view('backend/footer');
		}
		else if($_GET['a'] == 'add') {
            $this->load->view('backend/header');
			$this->load->view('backend/add_member');
			$this->load->view('backend/footer');
		}
		else if($_GET['a'] == 'edit') {
			$this->load->view('backend/header');

			$id = $_GET['id'];
			$page_data['sdata'] = $this->db->get_where('team_members',array('id'=>$id))->row();
			$this->load->view('backend/edit_member',$page_data);
			$this->load->view('backend/footer');
		}
		else if($_GET['a'] == 'update') {
			$input_data = $this->input->post();
			$data = array(
				'name'	=>	$input_data['name'],
				'email'	=>	$input_data['email'],
				'phone'	=>	$input_data['phone'],
				'designation'	=>	$input_data['designation'],
				'modified_at'	=>	$input_data['modified_at'],
				'status'	=>	$input_data['status']																
			);

			if($_FILES["file"]["error"] != 4) {
				$file = $this->db->get_where('team_members', array('id'=>$_GET['id']))->row()->photo;
				if($file != '' && $file != 'default.jpg')
					$this->crud->delete_file('member_image', $file);
				$img = $this->crud->upload_img('member_image', 'file');
				$data['photo'] = $img;
			}


			$this->crud->update_row('team_members',$_GET['id'], $data);
			redirect('admin/our_team');
		}
		else if($_GET['a'] == 'save') {
			$input_data = $this->input->post();
			$data = array(
				'id' => $this->gen_uid(),
				'name'	=>	$input_data['name'],
				'email'	=>	$input_data['email'],
				'phone'	=>	$input_data['phone'],
				'designation'	=>	$input_data['designation'],
				'created_at'	=>	$input_data['created_at'],				
				'status'	=>	$input_data['status']
			);



			if($_FILES["file"]["error"] != 4) {
				$img = $this->crud->upload_img('member_image', 'file');
				$data['photo'] = $img;
			}
			else {
				$data['photo'] = 'default.jpg';
			}



			$this->crud->save_data('team_members',$data);
			redirect('admin/our_team');

		}
		else if($_GET['a'] == 'delete') {
			$this->crud->delete_row('team_members',$_GET['id']);
			redirect('admin/our_team');
		}
		else {
			redirect('admin/not_found');
		}
	}





public function feedback()
	{
		//$this->is_login();
		if(!isset($_GET['a'])) {
            $this->load->view('backend/header');
            $page_data['feedbacks'] = $this->db->get('contact')->result();

			$this->load->view('backend/feedback_list',$page_data);
			$this->load->view('backend/footer');
		}




		else if($_GET['a'] == 'delete') {
			$this->crud->delete_row('contact',$_GET['id']);
			redirect('admin/feedback');
		}
		else {
			redirect('admin/not_found');
		}
	}

// common items for any admin panel

	public function site_setup()
	{

		if(!isset($_GET['a'])) {
            $this->load->view('backend/header');
            $page_data['system_values'] = $this->db->get('site_setup')->row();
			$this->load->view('backend/site_setup',$page_data);
			$this->load->view('backend/footer');
		}
		else if($_GET['a'] == 'update') {
			$input_data = $this->input->post();
			$data = array(
				'shop_name'	=>	$input_data['shop_name'],
				'email'	=>	$input_data['email'],
				'mobile_no'	=>	$input_data['mobile_no'],
				'address'	=>	$input_data['address'],
				'owner'	=>	$input_data['owner']
			);
			if($_FILES["file"]["error"] != 4) {
				$file = $this->db->get_where('site_setup', array('id'=>$_GET['id']))->row()->logo;
				if($file != '' && $file != 'default.jpg')
					$this->crud->delete_file('site_logo', $file);
				$img = $this->crud->upload_img('site_logo', 'file');
				$data['logo'] = $img;
			}



			$this->db->where('id',$_GET['id']);
			$this->db->update('site_setup',$data);
			redirect('admin/site_setup');
		}	

	}

	

	public function authenticate() {
		$input_data = $this->input->post();
		$authen = $this->db->get_where('user', array('email'=>$input_data['email'], 'password'=>md5($input_data['password'])));
	  	if($authen->num_rows() == 1) {
	   		$uid = $authen->row()->id;
	   		$sessdata = array(
	    		'bs_cs_islogin' => true,
	    		'bs_cs_uid' => $uid,
	    		'bs_cs_ue' => $input_data['email']
	   		);
	   		$this->session->set_userdata($sessdata);
	   		redirect('admin/dashboard');
	  	}
	  	else {
	   		$this->session->set_flashdata('err_msg','Wrong email or password!');
	   		redirect('admin/index');
	  	}
	}

	public function logout()
	{
		$this->session->sess_destroy();
  		redirect('admin/index');
	}

	public function is_login() {
	  	if(!$this->session->userdata('bs_cs_islogin'))
	   		redirect('admin/index');
	}
// 

} // end of class admin