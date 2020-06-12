<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->database();
        $this->load->model('Login_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['judul'] = "Administrator Area"; 
        $this->load->view('v_login',$data);
   
    }


    function aksi_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
            );

        $cek = $this->Login_model->cek_login("admin",$where)->num_rows();
        if($cek > 0){
    
            $data_session = array(
                'username' => $username,
                'status' => "login"
                );
    
            $this->session->set_userdata($data_session);
    
            redirect(base_url("dashboard"));
        } 
        else
        {
            $this->session->set_flashdata('pesan','Username atau password salah');
            redirect('login');
        }
    }


function logout() {
    $this->session->sess_destroy();
    redirect(base_url('login'));
}




public function users(){
    $data['judul'] = "User Management";
    $data['user']= $this->Login_model->getAllUser();
    
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
        $this->Login_model->tambahDataUser();
        $this->session->set_flashdata('flash','ditambahkan');
        redirect('login/users');
        

    }     

}





public function hapus($id){
$this->Login_model->hapusDataUser($id);;
$this->session->set_flashdata('flash','Dihapus');
redirect('login/users');
    

}

public function detail($id){
$data['judul']="Detail Data admin";
$data['user']=$this->Login_model->getUserById($id);
$this->load->view('admin/templates/header',$data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('user/detail',$data);
    $this->load->view('admin/templates/footer');

} 


public function edit($id){
$data['user'] = $this->Login_model->getUserById($id);
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
    $this->Login_model->ubahDataUser();
    $this->session->set_flashdata('flash','diubah');
    redirect('login/users');
    

}     

}


}
?>