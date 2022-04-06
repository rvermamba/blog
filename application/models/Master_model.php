<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Master_model extends CI_Model {
    function getLoginDetailsAdmin($username,$password) {
        //$this->db->select('employee.factory_id,employee.emp_id,employee.user_type,employee.emp_first_name,employee.emp_last_name,employee.emp_email,employee.emp_mobile,employee.emp_image,employee.share_factory,factory.logo,factory.company_color,employee.username');
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->where('username',$username);
        $this->db->where('emp_password',$password);
        $query1 = $this->db->get();
        if ($query1->row()) {
            return $query1->row();
        } else{
            return 0;
        }
    }
    function getLoginDetailsVendor($username,$password) {
        //$this->db->select('employee.factory_id,employee.emp_id,employee.user_type,employee.emp_first_name,employee.emp_last_name,employee.emp_email,employee.emp_mobile,employee.emp_image,employee.share_factory,factory.logo,factory.company_color,employee.username');
        $this->db->select('*');
        $this->db->from('vendor');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query1 = $this->db->get();
        if ($query1->row()) {
            return $query1->row();
        } else{
            return 0;
        }
    }
    function getLoginDetailsMember($username,$password) {
        //$this->db->select('employee.factory_id,employee.emp_id,employee.user_type,employee.emp_first_name,employee.emp_last_name,employee.emp_email,employee.emp_mobile,employee.emp_image,employee.share_factory,factory.logo,factory.company_color,employee.username');
        $this->db->select('*');
        $this->db->from('member');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query1 = $this->db->get();
        if ($query1->row()) {
            return $query1->row();
        } else{
            return 0;
        }
    }
   


   public function chkcategoryName($categoryName)
{
    $this->db->select('category_name');
    $this->db->from('master_category');
    $this->db->where('category_name',$categoryName);
    $q = $this->db->get();
    // echo $this->db->last_query();die;
    $result= $q->num_rows();
    //$result= $q->result_array();
        // echo"<pre>";print_r($result);die();
    if($result > 0){
        echo 1;
        return ;
    }else{
      echo 0;
      return ;
  }
}


 public function getCategoryDetails()
    {
        $this->db->select('*');
        $this->db->from('master_category');
        $this->db->where('del',0);
        $this->db->order_by('id','desc');
        $q = $this->db->get();
        $result= $q->result();
        return $result;
    }
    public function getCategoryDetailsByID($id=0)
    {
        $this->db->select('*');
        $this->db->from('master_category');
        $this->db->where('id',$id);
        $q = $this->db->get();
        $result= $q->result();
        return $result[0];
    }

}