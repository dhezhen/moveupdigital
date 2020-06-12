<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Testimoni extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->database();
        $this->load->model('Testimoni_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }

    public function index() {
        $data['judul'] = "Testimoni";

        $data['testimoni']= $this->Testimoni_model->getAllTestimoni();
        
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('testimoni/index',$data);
        $this->load->view('admin/templates/footer');
    }

    public function tambah() {
        $data['judul']= 'Tambah Data Testimoni';
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('pekerjaan','Pekerjaan','required');
        $this->form_validation->set_rules('isi_testimoni','Testimoni','required');
       
      

        if ( $this->form_validation->run() == false ) {

            $config['upload_path']          = './assets/img/testimoni/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 10000;
          /// $config['max_width']            = 1024;
           // $config['max_height']           = 768;
            $this->load->library('upload', $config);

                        if ( ! $this->upload->do_upload('foto'))
                            {
                                    $error = array('error' => $this->upload->display_errors());                  
                                    $this->load->view('admin/templates/header',$data);
                                    $this->load->view('admin/templates/sidebar');
                                    $this->load->view('testimoni/tambah',$error);
                                    $this->load->view('admin/templates/footer');

                            }

                            else

                            {

                                $data = [
                                    "nama"          => $this->input->post('nama', true),
                                    "pekerjaan"     => $this->input->post('pekerjaan', true),
                                    "isi_testimoni" => $this->input->post('isi_testimoni', true),
                                    "foto"          => $this->upload->data('file_name'),
                                    "bintang" => $this->input->post('bintang', true)
                                ];

                                
                            }
                        
                        
                        }
                        
                        
                        }   

    

   

public function hapus($id){
    $this->Testimoni_model->hapusDataTestimoni($id);;
    $this->session->set_flashdata('flash','Dihapus');
    redirect('testimoni');

}

public function detail($id){
    $data['judul']="Detail Data testimoni";
    $data['testimoni']=$this->Testimoni_model->getTestimoniById($id);
    $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('testimoni/detail',$data);
        $this->load->view('admin/templates/footer');

} 


public function edit($id){
    $data['testimoni'] = $this->Testimoni_model->getTestimoniById($id);
    $data['judul']= 'Update Data';

    $this->form_validation->set_rules('nama','Nama','required');
    $this->form_validation->set_rules('pekerjaan','Pekerjaan','required');
    $this->form_validation->set_rules('bintang','Rating','required');
;

    if ( $this->form_validation->run() == false ) {
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('testimoni/edit',$data);
        $this->load->view('admin/templates/footer');
       
    } 
    else 
    {
        $this->Testimoni_model->ubahDataTestimoni();
        $this->session->set_flashdata('flash','diubah');
        redirect('testimoni');
        

    }     

}

}
?>