<?php
class M_db extends CI_Model
{
    function get_posts($_count,$_start){
    	$query=$this->db->order_by('date_added','desc');
    	$query=$this->db->get_where('posts',array('active' => 1),$_count,$_start);
    	$result=$query->result_array();
        return $result;
    }
    
    function get_post_count(){
    	$query=$this->db->get_where('posts',array('active' => 1));
    	return $query->num_rows();
    }
    function get_post($post_id)
    {
        $this->db->select();
        $this->db->from('posts');
        $this->db->where(array('active'=>1,'post_id'=>$post_id));
        $this->db->order_by('date_added','desc');
        $query = $this->db->get();
        return $query->first_row('array');
    }
    function insert_post($data)
    {
        $this->db->insert('posts',$data);
        return $this->db->insert_id();
    }
    
    function update_post($post_id, $data)
    {
        $this->db->where('post_id',$post_id);
        $this->db->update('posts',$data);
    }
    
    function delete_post($post_id)
    {
        $this->db->where('post_id',$post_id);
        $this->db->delete('posts');
    }
}