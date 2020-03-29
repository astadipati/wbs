<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('front/login');
	}

	public function proses(){
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			if ($query->num_rows()> 0){
				// echo "Login sukses";
				$row = $query->row();
				$params = array(
					'userid' => $row->user_id,
					'level' => $row->level,
					'name' => $row->name
				);
				// set session
				$this->session->set_userdata($params);
				echo "<script> alert('Login berhasil');
				window.location='".site_url('dashboard')."'</script>";
			}else{
				// echo "Gagal ";
				echo "<script> alert('Gagal');
				window.location='".site_url('welcome')."'</script>";
			}
		}
	}

	public function logout(){
		$params = array('userid','level');
		$this->session->unset_userdata($params);
		redirect('welcome');
	}
}
