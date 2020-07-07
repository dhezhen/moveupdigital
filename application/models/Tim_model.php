<?php
class Tim_model extends CI_model{

    public function getAllTim(){
        
        return $this->db->get('team')->result_array(); 

    }

    public function tambahDataTim($data)
    {
       
        $this->db->insert('team', $data);
        return true;
    }
   
    public function hapusDataTim($where){
        //$this->db->where('id', $id);
        // $this->db->delete('team',['id'=>$id]);
        $this->db->where($where);
        $this->db->delete('team');
        
    }

    public function getTimById($id){

            return $this->db->get_where('team',['id' => $id])->row_array();

    }

    public function ubahDataTim(){
        $data =[
            "nama"=> $this->input->post('nama',true),
            "posisi"=> $this->input->post('posisi',true),
            "fb"=> $this->input->post('fb',true),
            "ig"=> $this->input->post('ig',true),
            "no_wa"=> $this->input->post('no_wa',true)
   
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('team',$data);


    }


    public function cariDataTim(){
       $keyword =  $this->input->post('keyword',true);
       
        $this->db->like('nama', $keyword);
        $this->db->or_like('posisi',$keyword);
     

     return $this->db->get('team')->result_array(); 
    }

}

?>