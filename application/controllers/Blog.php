<?php
class Blog extends CI_Controller
{   
    function __construct(){
        parent::__construct();
        $this->load->model('m_db');
    }
    
    function index($start = 0){
        $data['posts'] = $this->m_db->get_posts(3,$start);
        
        //pagination
        $this->load->library('pagination');
        $config['base_url'] = site_url('blog/index').'/';//url to set pagination
        $config['total_rows'] = $this->m_db->get_post_count();
        $config['per_page'] = 3;
        $config['num_links'] = 2;
        #$config['full_tag_open'] = '<h4>';
        #$config['full_tag_close'] = '</h4>';
        
        $config['first_tag_open'] = $config['last_tag_open']= $config['next_tag_open']= $config['prev_tag_open'] = $config['num_tag_open'] = '<li>';
        $config['first_tag_close'] = $config['last_tag_close']= $config['next_tag_close']= $config['prev_tag_close'] = $config['num_tag_close'] = '</li>';
         
        $config['cur_tag_open'] = "<li><span><b>";
        $config['cur_tag_close'] = "</b></span></li>";

        $this->pagination->initialize($config); 
        
        $data['pages'] = $this->pagination->create_links(); //Links of pages
        
        $class_name = array(
            'home_class'=>'current', 
            'login_class' => '', 
            'register_class' => '',
            'upload_class'=>'',
            'contact_class'=>'');
        
        $this->load->view('templates/header',$class_name);
        $this->load->view('page/blog/blog_home',$data);
        $this->load->view('templates/footer');
    }
    
    function post($post_id){   
        $this->load->model('m_comment');
        $data['comments'] = $this->m_comment->get_comment($post_id);    
        $data['post'] = $this->m_db->get_post($post_id);
        $class_name = array(
            'home_class'=>'current', 
            'login_class' =>'', 
            'register_class' => '',
            'upload_class'=>'',
            'contact_class'=>'');
        $this->load->view('header',$class_name);
        $this->load->view('v_single_post',$data);
        $this->load->view('footer');
    }
    
    function new_post(){
        if(!$this->check_permissions('author')){
            redirect(base_url().'users/login');
        }
        
        if($this->input->post()){
            $data = array(
                'post_title' => $this->input->post('post_title'),
                'post' => $this->input->post('post'),
                'active' => 1,
            );
            $this->m_db->insert_post($data);
            redirect(base_url().'blog/');
        }
        else{
            $class_name = array(
            'home_class'=>'current', 
            'login_class' =>'', 
            'register_class' => '',
            'upload_class'=>'',
            'contact_class'=>'');
            $this->load->view('templates/header',$class_name);
            $this->load->view('page/blog/blog_newpost');
            $this->load->view('templates/footer');
        }
    }
    
    function editpost($post_id){
        if(!$this->check_permissions('author'))//when the user is not an andmin and author
        {
            redirect(base_url().'users/login');
        }
        $data['success'] = 0;
        
        if($this->input->post())
        {
            $data = array(
                'post_title' => $this->input->post('post_title'),
                'post' => $this->input->post('post'),
                'active' => 1
            );
            $this->m_db->update_post($post_id, $data);
            $data['success'] = 1;
        }
        $data['post'] = $this->m_db->get_post($post_id);
        
        $class_name = array(
            'home_class'=>'current', 
            'login_class' =>'', 
            'register_class' => '',
            'upload_class'=>'',
            'contact_class'=>'');
        $this->load->view('header',$class_name);
        $this->load->view('v_edit_post',$data);
        $this->load->view('footer');
    }
    
    function deletepost($post_id){
        if(!$this->check_permissions('author'))//when the user is not an andmin and author
        {
            redirect(base_url().'users/login');
        }
        $this->m_db->delete_post($post_id);
        redirect(base_url().'blog/');
    }
    
    function check_permissions($required){
        $user_type = $this->session->userdata('user_type');//curren user
        if($required == 'user')//requirment is user 
        {
            if($user_type){return TRUE;}//all user have permission
        }
        elseif($required == 'author')//when requirement is author
        {
            if($user_type == 'author' || $user_type == 'admin')//author and admin have the permission
            {
                return TRUE;
            }
        }
        elseif($required == 'admin')//when required is admin
        {
            if($user_type == 'admin'){return TRUE;}//only admin have the permission
        }
    }
}