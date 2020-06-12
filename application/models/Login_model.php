<?php 

class Login_model extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	

	public function getAllUser(){
        
        return $this->db->get('admin')->result_array(); 

    }

    public function tambahDataUser(){
        $data = [
            "nama"=> $this->input->post('nama',true),
            "username"=> $this->input->post('username',true),
            "password"=>md5($this->input->post('password',true))
            
        ];
        $this->db->insert('admin',$data);


    }
   

    public function hapusDataUser($id){
        //$this->db->where('id', $id);
        $this->db->delete('admin',['id'=>$id]);
        
    }

    public function getUserById($id){

            return $this->db->get_where('admin',['id' => $id])->row_array();

    }

    public function ubahDataUser(){
        $data =[
            "nama"=> $this->input->post('nama',true),
            "username"=> $this->input->post('username',true),
			"password"=>md5($this->input->post('password',true))
            
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('admin',$data);


    }


    public function cariDataUser(){
       $keyword =  $this->input->post('keyword',true);
       
        $this->db->like('nama', $keyword);
        $this->db->or_like('email',$keyword);
        $this->db->or_like('password',$keyword);
      

     return $this->db->get('admin')->result_array(); 
    }





}