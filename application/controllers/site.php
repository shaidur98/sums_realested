<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {



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

	public function get_subcat_by_cat() {
		$cat = $this->input->post('cat');
		$result = $this->db->get_where('product_category',array('main_cat_id'=>$cat))->result();
		echo json_encode($result);
	}
	
	public function index()
	{
			$page_data['page_name'] = 'Home';
            $this->load->view('frontend/header');                   
            $this->load->view('frontend/index',$page_data);
            $this->load->view('frontend/footer');
	}

	public function about()
	{
			$page_data['page_name'] = 'About';

 			$page_data['top_posts'] = $this->db->get_where('posts',array('post_position_id'=>"1"))->result();  
 			$page_data['left_posts'] = $this->db->get_where('posts',array('post_position_id'=>"2"))->result();
 			$page_data['accordion_posts'] = $this->db->get_where('posts',array('post_position_id'=>"3"))->result(); 
  			$page_data['right_posts'] = $this->db->get_where('posts',array('post_position_id'=>"4"))->result();	
  			$this->load->view('frontend/header',$page_data);  					 			

            $this->load->view('frontend/about',$page_data);
            $this->load->view('frontend/footer');
	}


	public function our_team()
	{
			$page_data['page_name'] = 'Our Team';
            $this->load->view('frontend/header');  
            $page_data['team_members'] = $this->db->get('team_members')->result();                             
            $this->load->view('frontend/our_team',$page_data);
            $this->load->view('frontend/footer');
	}




	


	public function projects()
	{
			$page_data['page_name'] = 'Projects';
            $page_data['projects'] = $this->db->get('projects')->result();
 			$page_data['top_posts'] = $this->db->get_where('posts',array('post_position_id'=>"5"))->result();            	
 			$page_data['bullet_posts'] = $this->db->get_where('posts',array('post_position_id'=>"6"))->result(); 

            $this->load->view('frontend/header',$page_data);                   
            $this->load->view('frontend/projects',$page_data);
            $this->load->view('frontend/footer');
	}

	public function project_details()
	{
			$page_data['page_name'] = 'Project Details';
            $this->load->view('frontend/header'); 
			$id = $_GET['id'];
			$page_data['sdata'] = $this->db->get_where('projects',array('id'=>$id))->row();                              
            $this->load->view('frontend/project_details',$page_data);
            $this->load->view('frontend/footer');
	}

	public function gallery()
	{
			$page_data['page_name'] = 'gallery';
 			$page_data['top_posts'] = $this->db->get_where('posts',array('post_position_id'=>"7"))->result(); 
 			$page_data['image_categories'] = $this->db->get('image_category')->result();
 			$page_data['portfolios'] = $this->db->get('gallery')->result(); 						
            $this->load->view('frontend/header',$page_data);                   
            $this->load->view('frontend/portfolio',$page_data);
            $this->load->view('frontend/footer');
	}

	

	public function contact()
{
		if(!isset($_GET['a'])) {
			$page_data['page_name'] = 'Contact';
			$page_data['msg'] = 'NO';			
 			$page_data['top_posts'] = $this->db->get_where('posts',array('post_position_id'=>"8"))->result(); 			
            $this->load->view('frontend/header',$page_data);                   
            $this->load->view('frontend/contact',$page_data);
            $this->load->view('frontend/footer');
	}
else if($_GET['a'] == 'save') {
			$input_data = $this->input->post();
			$data = array(
				'id' => $this->gen_uid(),
				'name'	=>	$input_data['name'],
				'email'	=>	$input_data['email'],
				'message'	=>	$input_data['message']
			);

			$this->db->insert('contact',$data);
			redirect('site/contact?msg=success');

		}

}
	



} // end of class