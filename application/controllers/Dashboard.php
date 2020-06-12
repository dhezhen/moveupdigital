<?php 


class Dashboard extends CI_Controller{

function index (){  
    $data['judul'] = "Dasboard - Moveupdigital.id";
    $this->load->view('admin/templates/header',$data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/index');
    $this->load->view('admin/templates/footer');
    

}



public function tambah() {
    $data['judul']= 'Tambah Data';
    
    $this->form_validation->set_rules('nama','Nama','required');
    $this->form_validation->set_rules('nik','NIK','required|numeric');
    $this->form_validation->set_rules('email','Email','required|valid_email|trim');

    if ( $this->form_validation->run() == false ) {
        $this->load->view("templates/header",$data);
        $this->load->view("mahasiswa/tambah");
        $this->load->view("templates/footer");
       
    } 
    
    else 

    {
        $this->Mahasiswa_model->tambahDataMahasiswa();
        $this->session->set_flashdata('flash','ditambahkan');
        redirect('mahasiswa');
        

    }     

}





public function hapus($id){
$this->Mahasiswa_model->hapusDataMahasiswa($id);;
$this->session->set_flashdata('flash','Dihapus');
redirect('mahasiswa');

}

public function detail($id){
$data['judul']="Detail Data Mahasiswa";
$data['mahasiswa']=$this->Mahasiswa_model->getMahasiswaById($id);
$this->load->view('templates/header',$data);
$this->load->view('mahasiswa/detail',$data);
$this->load->view('templates/footer');

} 


public function edit($id){
$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
$data['judul']= 'Update Data';

$this->form_validation->set_rules('nama','Nama','required');
$this->form_validation->set_rules('nik','NIK','required|numeric');
$this->form_validation->set_rules('email','Email','required|valid_email|trim');

if ( $this->form_validation->run() == false ) {
    $this->load->view("templates/header",$data);
    $this->load->view("mahasiswa/edit",$data);
    $this->load->view("templates/footer");
   
} 
else 
{
    $this->Mahasiswa_model->ubahDataMahasiswa();
    $this->session->set_flashdata('flash','diubah');
    redirect('mahasiswa');
    

}     

}


}