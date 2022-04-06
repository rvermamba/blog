<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url','html'));
        $this->load->library(array('session'));
        $this->load->database();
        $this->load->model('master_model');
    }
    public function index()
    {
      if(!isset($_POST['submit']))
      {
       $this->load->view('user_login');
   } else {
       $username = $this->input->post('username'); 
       $password = $this->input->post('password');           
       $usertype = $this->input->post('usertype');
       if ($usertype == "Admin") {
        $login_details = $this->master_model->getLoginDetailsAdmin($username, $password);
                        $login_detailsToArray = (array)$login_details;//Converting the Object To Array
                        if ($login_details && !empty($login_details)) {
                                $this->session->set_userdata($login_detailsToArray); // Setting the sesion
                                $this->session->set_userdata('usertype', 'Admin');
                                $this->session->set_userdata('admin_login', 'domain');
                                $this->session->set_userdata('last_login_user', 'Admin');
                                header("location: " . 'Admin');
                            }else{
                               echo "Invalid UserName Or Password";
                           }
                           
                           
                       }
                   }
               }
           }