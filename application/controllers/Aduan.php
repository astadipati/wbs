<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aduan extends CI_Controller {

	function __construct(){
		parent::__construct();
		gak_login();
		$this->load->model('Aduan_m');
	}

	public function index()
	{
		$data['row'] = $this->Aduan_m->get();
		$this->template->load('template','back/aduan', $data);
	}

	public function proses(){
		$config['upload_path']          = './uploads/bukti/';
		$config['allowed_types']        = 'gif|jpg|png|zip|rar';
		$config['max_size']             = 2048;
		$config['file_name']            = 'bukti-'.date('ymd').'-'.substr(md5(rand()),0,10);
		$this->load->library('upload', $config);

		$post = $this->input->post(null, TRUE);
		if(isset($_POST['tambah'])){
			if(@$_FILES['image']['name'] != null){
				if($this->upload->do_upload('image')){
					$post['image'] = $this->upload->data('file_name');
					$this->Aduan_m->add($post);
					if($this->db->affected_rows() > 0 ){
						$this->session->set_flashdata('success','Data berhasil disimpan');
					}
					redirect('aduan');
				}else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('aduan');
				}
			}else{
				$post['image'] = null;
				$this->Aduan_m->add($post);
				if($this->db->affected_rows() > 0 ){
					$this->session->set_flashdata('success','Data berhasil disimpan');
				}
				redirect('aduan');
			}

		}else if (isset($_POST['edit'])){
			$this->Aduan_m->edit($post);
		}
		if($this->db->affected_rows() > 0 ){
			echo "<script> alert('Data berhasil disimpan') </script>";
		}
		echo "<script>window.location='".site_url('aduan')."'</script>";
	}

}
