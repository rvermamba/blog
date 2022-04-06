<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Master extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form','url','html'));
    $this->load->library(array('session'));
    $this->load->database();
   $this->load->model('master_model');
   if(empty($this->session->userdata('id')))
         {
         redirect(base_url(),'refresh');
         }
 }
public function chkcategoryName()
{
  $categoryName=$this->input->post('categoryName');
  $this->master_model->chkcategoryName($categoryName);
  return;
}
public function categoryList()
{
 $data['categorydetails'] =  $this->master_model->getCategoryDetails();
 $this->load->view('masters/category_list',$data);
}
public function addCategory()
{
 $date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
 $datentime = $date->format('Y-m-d H:i:s');
 if(!isset($_POST['submit']))
 {
  $this->load->view('masters/add_category');
}
else
{
  $data = array
  (
    'category_name' => $this->input->post('category_name'),
  );
  $this->db->insert('master_category',$data);
  $this->session->set_flashdata('msg', 'Add Record successfully.');
  redirect('master/addCategory');
}
}
public function editCategory($id=0)
{
 $date = new DateTime('now', new DateTimeZone('Asia/Calcutta'));
 $datentime = $date->format('Y-m-d H:i:s');
 if(!isset($_POST['submit']))
 {
   $data['details']  =  $this->master_model->getCategoryDetailsByID($id);
   $this->load->view('masters/edit_category',$data);
 }
 else
 {
   $array = array('id' => $id);
   $data = array
   (
     'category_name' => $this->input->post('category_name'),
   );
   $this->db->update('master_category',$data,$array);
   $this->session->set_flashdata('msg', 'Update Record successfully.');
   redirect('master/categoryList');
 }
}
public function deleteCategory($id=0)
{
  $id=$this->input->post('id');
  $array = array('id' => $id);
  $data = array
  (
    'del' => 1,
  );
  $this->db->update('master_category',$data,$array);
  $this->session->set_flashdata('msg', ' Record Deleted successfully.');
  echo 1;    
}
}?>
