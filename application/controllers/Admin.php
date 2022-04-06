<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('session'));
		//load the default database
		$this->load->database();
		if(empty($this->session->userdata('id')))
         {
         redirect(base_url(),'refresh');
         }
	}
	public function index()
	{
		 $this->load->view('dashboard');
	}
}