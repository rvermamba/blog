<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog_model extends CI_Model {
 public function getTotalRows()
 {
  $q=$this->db->get('blogs');
  return $q->num_rows();
}
public function getBlogDetailsPagination($limit,$offset)
{
  $this->db->select('*,mc.category_name');
  $this->db->from('blogs as b');
  $this->db->join('master_category as mc','mc.id=b.category_id','LEFT');
  $this->db->where('b.del',0);
  $this->db->limit($limit,$offset);
  $this->db->order_by('b.id','desc');
  $q = $this->db->get();
  $result= $q->result();
  return $result;
} 
public function getBlogDetails()
{
  $this->db->select('*,mc.category_name');
  $this->db->from('blogs as b');
  $this->db->join('master_category as mc','mc.id=b.category_id','LEFT');
  $this->db->where('b.del',0);
  $this->db->order_by('b.id','desc');
  $q = $this->db->get();
  $result= $q->result();
  return $result;
}
public function getBlogDetailsBYID($id)
{
 $this->db->select('*');
 $this->db->from('blogs as b');
 $this->db->where('b.del',0);
 $this->db->where('b.id',$id);
 $this->db->order_by('b.id','desc');
 $q = $this->db->get();
 $result= $q->result();
 return $result[0];
}
}