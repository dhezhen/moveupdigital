<?php
class User_model extends CI_model{

    public function getAllUser(){
        
        return $this->db->get('user')->result_array(); 

    }

    public function tambahDataUser(){
        $data = [
            "nama"=> $this->input->post('nama',true),
            "username"=> $this->input->post('username',true),
            "password"=> $this->input->post('password',true)
            
        ];
        $this->db->insert('user',$data);


    }
   

    public function hapusDataUser($id){
        //$this->db->where('id', $id);
        $this->db->delete('user',['id'=>$id]);
        
    }

    public function getUserById($id){

            return $this->db->get_where('user',['id' => $id])->row_array();

    }

    public function ubahDataUser(){
        $data =[
            "nama"=> $this->input->post('nama',true),
            "username"=> $this->input->post('username',true),
            "password"=> $this->input->post('password',true)
            
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('user',$data);


    }


    public function cariDataUser(){
       $keyword =  $this->input->post('keyword',true);
       
        $this->db->like('nama', $keyword);
        $this->db->or_like('email',$keyword);
        $this->db->or_like('password',$keyword);
      

     return $this->db->get('user')->result_array(); 
    }

}

?>