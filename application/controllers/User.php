<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('session'));
		$this->load->library('pagination');
		//load the default database
		$this->load->database();
		 $this->load->model('blog_model');
		 $this->load->model('master_model');
           $this->session->set_userdata('id', 'user');
	}
	public function index()
	{
		 $this->load->view('dashboard');
	}

	 public function viewBlog()
  {
    $config['base_url'] = base_url('blog/viewBlog');
    $config['per_page'] = 4;
    $config['total_rows']= $this->blog_model->getTotalRows();


////////////

 $config['full_tag_open'] = '<ul class="pagination pagination-lg">';
            $config['full_tag_close'] = '</ul>';
             
            $config['first_link'] = 'First Page';
            $config['first_tag_open'] = '<li class="page-item"> ';
            $config['first_tag_close'] = '</li>';
             
            $config['last_link'] = 'Last Page';
            $config['last_tag_open'] = '<li class="page-item">';
            $config['last_tag_close'] = '</li>';
             
            $config['next_link'] = 'Next Page';
            $config['next_tag_open'] = '<li class="page-item">';
            $config['next_tag_close'] = '</li>';
 
            $config['prev_link'] = 'Prev Page';
            $config['prev_tag_open'] = '<li class="page-item">';
            $config['prev_tag_close'] = '</li>';
 
            $config['cur_tag_open'] = '<li class="page-item active"><a >';
            $config['cur_tag_close'] = '</a></li>';
 
            $config['num_tag_open'] = '<li class="page-item">';
            $config['num_tag_close'] = '</li>';
/////
    $this->pagination->initialize($config);
    $data['blogdetails']=$this->blog_model->getBlogDetailsPagination($config['per_page'],$this->uri->segment(3));
    //$this->load->view('view_blogs',$data);
    $this->load->view('user/blog_view',$data);
  }
 
}