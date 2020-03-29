<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aduan_m extends CI_Model {
    
    public function get($id = null){
        $userid = $this->islogin->data_login()->user_id;
        $this->db->from('aduan as a');
        $this->db->join('user as b','a.user_id = b.user_id');
        $this->db->where('a.user_id',$userid);

        if($id != null){
            $this->db->where('user_id' , $id);
        }
        $query = $this->db->get();
        return $query;
        
    }

    public function add($post){
        // echo "modal M";
        // die();
        $params['user_id'] = $post['user_id'];
        $params['nama'] = $post['nama'];
        $params['telp'] = $post['telp'];
        $params['email'] = sha1($post['email']);
        $params['nama_terlapor'] = $post['nama_terlapor'];
        $params['jabatan'] = $post['jabatan'];
        $params['pelanggaran'] = $post['pelanggaran'];
        $params['waktu'] = $post['waktu'];
        $params['lokasi'] = $post['lokasi'];
        $params['kronologi'] = $post['kronologi'];
        $params['bukti'] = $post['image'];
        $this->db->insert('aduan', $params);
    }

}