<?php 

class Pesan extends CI_controller{

    public function __construct(){
        parent:: __construct();
        $this->load->database();
        $this->load->model('Pesan_model');
        $this->load->library('form_validation');
    }



public function index(){
    $data['judul'] = "Inbox Message";
    $data['pesan'] = $this->Pesan_model->getAllDataPesan();
    $data['total_pesan'] = $this->Pesan_model->total_inbox();
    $this->load->view('admin/templates/header',$data);
    $this->load->view('admin/templates/sidebar',$data);
    $this->load->view('pesan/index',$data);
    $this->load->view('admin/templates/footer');
}



 public function tambah(){
        $data['judul']= 'Tambah  Pesan';
        
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('isi_pesan','Isi Pesan','required');
        $this->form_validation->set_rules('email','Email','required|valid_email|trim');

        if ( $this->form_validation->run() == false ) {

            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('pesan/tambah',$data);
            $this->load->view('admin/templates/footer');
                
                } 
        
        else 

        {
            $this->Pesan_model->tambahDataPesan();
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('pesan');
            

        }     

    }




public function hapus($id) {
    $this->Pesan_model->hapusDataPesan($id);
    $this->session->set_flashdata('flash','Dihapus');
    redirect('pesan');

}

public function detail($id){
    $data['judul']="Detail Data pesan";
    $data['pesan']=$this->Pesan_model->getDataPesanById($id);
    $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('pesan/detail',$data);
        $this->load->view('admin/templates/footer');

} 




}