<?php
class Pesan_model extends CI_Model{


    public function getAllDataPesan(){

        return $this->db->get('pesan')->result_array();
    }

    public function total_inbox()
    {
       $this->db->select('pesan');
      $this->db->count_all_results();
    }

    public function   tambahDataPesan(){
        $data = array(
            'nama'          => $this->input->post('nama'),
            'email'         => $this->input->post('email'),
            'isi_pesan'     => $this->input->post('isi_pesan')

        );

        $this->db->insert('pesan',$data);
    }

    public function getDataPesanById($id){
        return $this->db->get_where('pesan',['id'=>$id])->row_array();
    }

    public  function hapusDataPesan($id){
        $this->db->delete('pesan',['id'=> $id]);
    }

}