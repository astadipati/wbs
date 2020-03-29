<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();

		// gak_login();
		// check_adm/in();
		$this->load->model('user_m');
	}

	public function register(){

        $post = $this->input->post(null, TRUE);
		if(isset($post['register'])){
            $post = $this->input->post(NULL, TRUE);
            $this->user_m->add($post);
            // echo "sampai post";
            // die();
            if($this->db->affected_rows() > 0 ){
                echo "<script> alert('Data berhasil disimpan, silahkan login') </script>";
            }
            echo "<script>window.location='".site_url('welcome')."'</script>";
        }
	}
	public function edit($id){

		$this->form_validation->set_rules('fullname','Nama','required');
		$this->form_validation->set_rules('username','Username','required|min_length[5]|callback_username_check');
		if($this->input->post('password')){
		$this->form_validation->set_rules('password','Nama','min_length[5]');
		$this->form_validation->set_rules('passconf','Password Konfirmasi','matches[password]',
											array('matches' => '%s tidak sesuai dengan pasword'));
		}
		if($this->input->post('passconf')){
		$this->form_validation->set_rules('passconf','Password Konfirmasi','matches[password]',
											array('matches' => '%s tidak sesuai dengan pasword'));
		}
		$this->form_validation->set_rules('level','Level','required');
		$this->form_validation->set_message('required','%s tidak boleh kosong');
		$this->form_validation->set_message('is_unique','%s sudah digunakan, silahkan ganti');
		$this->form_validation->set_rules('min_length','{field} minimal 5 karakter');

		$this->form_validation->set_error_delimiters('<span class="help-block">','</span>');

		if($this->form_validation->run() == FALSE){
			$query = $this->user_m->get($id);
			if($query->num_rows() > 0){
				$data['row'] = $query->row();
				$this->template->load('template','user/user_edit', $data);
			}else{
				echo "<script> alert('Data Tidak Ditemukan!!') ;";
				echo "window.location='".site_url('user')."';</script>";
			}

		}else {
			// echo "Proses simpan berhasil";
			$post = $this->input->post(NULL, TRUE);
			$this->user_m->edit($post);
			if($this->db->affected_rows() > 0 ){
				echo "<script> alert('Data berhasil disimpan') </script>";
			}
			echo "<script>window.location='".site_url('user')."'</script>";
		}
		
		
	}
	
	function username_check(){
		$post = $this->input->post(NULL, TRUE);
		$query = $this->db->query("SELECT * FROM user WHERE username = '$post[username]' AND user_id != '$post[user_id]'");
		if($query->num_rows() > 0 ){
			$this->form_validation->set_message('username_check','%s Sudah ada yang pakai, silahkan ganti');
			return FALSE;
		}else{
			return TRUE;
		}

	}

	public function del(){
		$id = $this->input->post('user_id');
		$this->user_m->del($id);
		if($this->db->affected_rows() > 0 ){
			echo "<script> alert('Data berhasil dihapus') </script>";
		}
		echo "<script>window.location='".site_url('user')."'</script>";
	}
}
