<?php
class Portpolio_model extends CI_model{

    public function getAllPortpolio(){
        
        // return $this->db->get('portpolio')->order_by('kategori','asc')->result_array(); 

        return  $this->db->get('portpolio')->result_array();
        $this->db->order_by('kategori', 'desc');
        
    }

    public function tambahDataPortpolio($data)
    {
       
        $this->db->insert('portpolio', $data);
        return true;
    }
   
    public function hapusDataPortpolio($where){
        //$this->db->where('id', $id);
        // $this->db->delete('portpolio',['id'=>$id]);
        $this->db->where($where);
        $this->db->delete('portpolio');
        return TRUE;
        
    }

    public function getPortpolioById($id){

            return $this->db->get_where('portpolio',['id' => $id])->row_array();

    }

    public function update($data,$kondisi)
    {
        $this->db->update('portpolio',$data,$kondisi);
        return TRUE;
    }


    public function cariDataPortpolio(){
       $keyword =  $this->input->post('keyword',true);
       
        $this->db->like('kategori', $keyword);
      

     return $this->db->get('portpolio')->result_array(); 
    }


    public function getKategori(){
        $this->db->group_by('kategori');
        return  $this->db->get('portpolio')->result_array();
    }

}

?>