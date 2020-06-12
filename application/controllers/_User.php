<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->database();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['judul'] = "User Management";
        $data['user']= $this->User_model->getAllUser();
        
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('user/index',$data);
        $this->load->view('admin/templates/footer');
    }

    public function tambah() {
        $data['judul']= 'Tambah Data User';
        
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
       
       
      

        if ( $this->form_validation->run() == false ) {
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('user/tambah',$data);
            $this->load->view('admin/templates/footer');
           
        } 
        
        else 

        {
            $this->User_model->tambahDataUser();
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('user');
            

        }     

    }

    

   

public function hapus($id){
    $this->User_model->hapusDataUser($id);;
    $this->session->set_flashdata('flash','Dihapus');
    redirect('user');

}

public function detail($id){
    $data['judul']="Detail Data user";
    $data['user']=$this->User_model->getUserById($id);
    $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('user/detail',$data);
        $this->load->view('admin/templates/footer');

} 


public function edit($id){
    $data['user'] = $this->User_model->getUserById($id);
    $data['judul']= 'Update Data';

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
;

    if ( $this->form_validation->run() == false ) {
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('user/edit',$data);
        $this->load->view('admin/templates/footer');
       
    } 
    else 
    {
        $this->User_model->ubahDataUser();
        $this->session->set_flashdata('flash','diubah');
        redirect('user');
        

    }     

}

}
?>