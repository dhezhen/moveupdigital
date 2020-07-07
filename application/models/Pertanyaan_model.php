<?php
class Pertanyaan_model extends CI_model{

    public function getAllPertanyaan(){
        
        return $this->db->get('pertanyaan')->result_array(); 

    }

    public function tambahDataPertanyaan()
    {
        $data = [   
            'jenis_pertanyaan'    =>  $this->input->post('jenis_pertanyaan'),
            'jawaban'    =>$this->input->post('jawaban')

        ];
        
        $this->db->insert('pertanyaan',$data);
        return true;
    }
   
    public function hapusDataPertanyaan($id){
        //$this->db->where('id', $id);
        $this->db->delete('pertanyaan',['id'=>$id]);
        
    }

    public function getPertanyaanById($id){

            return $this->db->get_where('pertanyaan',['id' => $id])->row_array();

    }

    public function ubahDataPertanyaan() {
        $data =[
            "jenis_pertanyaan"=> $this->input->post('jenis_pertanyaan',true),
            "jawaban"=> $this->input->post('jawaban',true)
        
           
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('pertanyaan',$data);


    }

  

    // public function cariDataPertanyaan(){
    //    $keyword =  $this->input->post('keyword',true);
       
    //     $this->db->like('nama', $keyword);
    //     $this->db->or_like('pekerjaan',$keyword);
    //     $this->db->or_like('isi_testimoni',$keyword);
    //     $this->db->or_like('nik',$keyword);

    //  return $this->db->get('pertanyaan')->result_array(); 
    // }

}

?>