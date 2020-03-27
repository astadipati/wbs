<?php

Class Islogin{
    protected $ci;

    function __construct(){
        $this->ci =& get_instance();
    }

    function data_login(){
        $this->ci->load->model('m_user');
        $user_id = $this->ci->session->userdata('userid');
        $user_data = $this->ci->m_user->get($user_id)->row();
        return $user_data;
    }

    public function count_user(){
        $this->ci->load->model('m_user');
        return $this->ci->m_user->get()->num_rows();
    }

    public function count_delegasi(){
        $this->ci->load->model('M_berkas');
        return $this->ci->M_berkas->berkas_delegasi_get()->num_rows();
    }
    
    public function count_berkas_saya(){
        $this->ci->load->model('M_berkas');
        return $this->ci->M_berkas->login_berkas_get()->num_rows();
        
    }

    public function count_berkas_pending(){
        $this->ci->load->model('M_berkas');
        return $this->ci->M_berkas->berkas_pending_get()->num_rows();   
    }
    // berkas pending keluar
    public function count_berkas_pending_keluar(){
        $this->ci->load->model('M_berkas');
        return $this->ci->M_berkas->berkas_pending_keluar()->num_rows();   
    }

    public function count_berkas_all(){
        $this->ci->load->model('M_berkas');
        return $this->ci->M_berkas->full_berkas_get()->num_rows();
        
    }
}