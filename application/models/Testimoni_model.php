<?php
class Testimoni_model extends CI_model{

    public function getAllTestimoni(){
        
        return $this->db->get('testimoni')->result_array(); 

    }

    public function tambahDataTestimoni($data)
    {
       
        $this->db->insert('testimoni', $data);
        return true;
    }
   
    public function hapusDataTestimoni($where){
        //$this->db->where('id', $id);
        // $this->db->delete('testimoni',['id'=>$id]);
        $this->db->where($where);
        $this->db->delete('testimoni');
        return TRUE;
        
    }

    public function getTestimoniById($id){

            return $this->db->get_where('testimoni',['id' => $id])->row_array();

    }

    public function ubahDataTestimoni(){
        $data =[
            "nama"=> $this->input->post('nama',true),
            "pekerjaan"=> $this->input->post('pekerjaan',true),
            "isi_testimoni"=> $this->input->post('isi_testimoni',true),
            "bintang"=> $this->input->post('bintang',true)
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('testimoni',$data);


    }


    public function cariDataTestimoni(){
       $keyword =  $this->input->post('keyword',true);
       
        $this->db->like('nama', $keyword);
        $this->db->or_like('pekerjaan',$keyword);
        $this->db->or_like('isi_testimoni',$keyword);
        $this->db->or_like('nik',$keyword);

     return $this->db->get('testimoni')->result_array(); 
    }

}

?>