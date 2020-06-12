<?php
class Home extends CI_Controller{

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Pesan_model');
        $this->load->model('Testimoni_model');
        $this->load->library('form_validation');
      
    }

    public function tambah() {
        $data['judul']= 'Tambah  Pesan';
        
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('isi_pesan','Isi Pesan','required');
        $this->form_validation->set_rules('email','Email','required|valid_email|trim');

        if ($this->form_validation->run() == false ) {
            $data['testimoni']= $this->Testimoni_model->getAllTestimoni();
            $this->load->view('home/index',$data);                 
                
            } 
        
        else 

        {
            $this->Pesan_model->tambahDataPesan();
            $this->session->set_flashdata('flash','Dikirim');
            redirect('home');
            

        }     

    }

    


    public function index(){
        $data['judul'] = "Home";
        $data['testimoni']= $this->Testimoni_model->getAllTestimoni();
        $this->load->view('home/index',$data);
        


    }

}

?>