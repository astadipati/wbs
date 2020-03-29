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
			if ( ! $this->upload->do_upload('bukti')){
					$error = array('error' => $this->upload->display_errors());
					// $this->template->view('aduan', $error);
					redirect('aduan');
				}else{
					$data = array('bukti' => $this->upload->data());
					$this->Aduan_m->add($post);
					redirect('aduan');
					// $this->load->view('aduan', $data);
			}
		}else if (isset($_POST['edit'])){
			$this->aduan_m->edit($post);
		}
		if($this->db->affected_rows() > 0 ){
			echo "<script> alert('Data berhasil disimpan') </script>";
		}
		echo "<script>window.location='".site_url('aduan')."'</script>";
	}

}
