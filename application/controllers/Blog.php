<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form','url','html'));
    $this->load->library(array('session'));
    $this->load->library('pagination');
    $this->load->database();
    $this->load->model('blog_model');
  }
  public function blogList()
  {
    $data['blogdetails']=$this->blog_model->getBlogDetails();
    $this->load->view('blog_list',$data);
  }
  public function viewBlog()
  {
    $config['base_url'] = base_url('blog/viewBlog');
    $config['per_page'] = 4;
    $config['total_rows']= $this->blog_model->getTotalRows();
    $this->pagination->initialize($config);
    $data['blogdetails']=$this->blog_model->getBlogDetailsPagination($config['per_page'],$this->uri->segment(3));
    $this->load->view('view_blogs',$data);
  }
  public function addBlog()
  {
   if(!isset($_POST['submit']))
   {
     $data['category'] =  $this->master_model->getCategoryDetails();
     $this->load->view('add_blog',$data);
   }
   else
   {
  //echo "<pre>";print_r($_SESSION);die();
     $date=  date('d/m/Y') ;
     $date1=strval( $date ) ;
     $date2=str_replace("/",".",$date1);
              //echo $date2;die;
           //echo "<pre>",print_r($_FILES['attachment']);die;
     $filetype = ''; 
     if (!empty($_FILES['attachment']['name'])) {
      $names = $_FILES['attachment'];
      $names_cnt = count($_FILES['attachment'] ['name']) ;
                  //echo "<pre>",print_r($names_cnt);die;
      $fileArray = [];
      for($h=0;$h<$names_cnt;$h++)
      {
        $_FILES['file']['name'] = $names['name'][$h];
        $_FILES['file']['type'] = $names['type'][$h];
        $_FILES['file']['tmp_name'] =$names['tmp_name'][$h];
        $_FILES['file']['error'] = $names['error'][$h];
        $_FILES['file']['size'] = $names['size'][$h];
        if (!is_dir('uploads/'.$date2)) {
          mkdir('./uploads/'.$date2, 0777, TRUE);
        }
        $check_temp = explode("/",$_FILES['file']['type']);
        if($check_temp[0] == 'application')
        {
         $filetype = 'document';
       }
       else
       {
         $filetype = 'image';
       }
                // Set preference
       $config['upload_path'] = 'uploads/'.$date2;
       $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx|xlsx';
                $config['max_size'] = '50000'; // max_size in kb
                $config['file_name'] = strtotime(date("Y-m-d H:i:s")).$_FILES['file']['name'];
                //Load upload library
                $this->load->library('upload',$config);
                // File upload
                if ($this->upload->do_upload('file')) {
                      // Get data about the file
                  $uploadData = $this->upload->data();
                  $filename = $uploadData['file_name'];
                  array_push($fileArray,$filename); 
                      // Initialize array
                  $data['filenames'][] = $filename;
                }
                else {
                 echo $this->upload->display_errors();
               }
             }
           }
           $data = array
           (
            'blog_title' => $this->input->post('blog_title'),
            'blog_description' => $this->input->post('blog_description'),
            'category_id' => $this->input->post('category_id'),
            'upload_doc' => implode(",",$fileArray),
            'upload_type'=> $filetype,
            'folder_name'=> $date2,
          );
           $this->db->insert('blogs',$data);
           $this->session->set_flashdata('msg', 'Add Record successfully.');
           redirect('blog/blogList');
         }
       }
       public function editBlog($id=0)
       {
         if(!isset($_POST['submit']))
         {
          $data['category'] =  $this->master_model->getCategoryDetails();
          $data['blogdetails']=$this->blog_model->getBlogDetailsBYID($id); 
          $this->load->view('edit_blog',$data);
        }
        else
        {
         $date=  date('d/m/Y') ;
         $date1=strval( $date ) ;
         $date2=str_replace("/",".",$date1);
         $filetype = ''; 
         if (!empty($_FILES['attachment']['name'])) {
          $names = $_FILES['attachment'];
          $names_cnt = count($_FILES['attachment']['name']) ;
          $fileArray = [];
          for($h=0;$h<$names_cnt;$h++)
          {
            $_FILES['file']['name'] = $names['name'][$h];
            $_FILES['file']['type'] = $names['type'][$h];
            $_FILES['file']['tmp_name'] =$names['tmp_name'][$h];
            $_FILES['file']['error'] = $names['error'][$h];
            $_FILES['file']['size'] = $names['size'][$h];
            if (!is_dir('uploads/'.$date2)) {
              mkdir('./uploads/'.$date2, 0777, TRUE);
            }
            $check_temp = explode("/",$_FILES['file']['type']);
            if($check_temp[0] == 'application')
            {
             $filetype = 'document';
           }
           else
           {
             $filetype = 'image';
           }
                // Set preference
           $config['upload_path'] = 'uploads/'.$date2;
           $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx|xlsx';
                $config['max_size'] = '50000'; // max_size in kb
                $config['file_name'] = strtotime(date("Y-m-d H:i:s")).$_FILES['file']['name'];
                //Load upload library
                $this->load->library('upload',$config);
                // File upload
                if ($this->upload->do_upload('file')) {
                      // Get data about the file
                  $uploadData = $this->upload->data();
                  $filename = $uploadData['file_name'];
                  array_push($fileArray,$filename); 
                      // Initialize array
                  $data['filenames'][] = $filename;
                }
                else {
                 echo $this->upload->display_errors();
               }
             }
           }
           $array = array('id' => $id);
           if ($_FILES['attachment']['name'][0] != "") {       
             $data = array
             (
              'blog_title' => $this->input->post('blog_title'),
              'blog_description' => $this->input->post('blog_description'),
              'category_id' => $this->input->post('category_id'),
              'upload_doc' => implode(",",$fileArray),
              'upload_type'=> $filetype,
              'folder_name'=> $date2,
            );
           }
           else
           { 
            $data = array
            ( 
              'blog_title' => $this->input->post('blog_title'),
              'blog_description' => $this->input->post('blog_description'),
              'category_id' => $this->input->post('category_id'),
            );
          }
          $this->db->update('blogs',$data,$array);
          $this->session->set_flashdata('msg', 'Update Record successfully.');
          redirect('blog/blogList');
        }
      }
      public function deleteBlog($id=0)
      {
        $id=$this->input->post('id');
        $array = array('id' => $id);
        $data = array
        (
          'del' => 1,
        );
        $this->db->update('blogs',$data,$array);
        $this->session->set_flashdata('msg', ' Record Deleted successfully.');
        echo 1;    
      }
    }?>