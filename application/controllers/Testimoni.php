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


    public function insertdata()
  {
      $nama   = $this->input->post('nama');
      $pekerjaan   = $this->input->post('pekerjaan');
      $isi_testimoni   = $this->input->post('isi_testimoni');
      $bintang = $this->input->post('bintang');

      // get foto
      $config['upload_path'] = './assets/upload/testimoni/';
      $config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['max_size'] = '1024';  //2MB max
     /// $config['max_width'] = '1000'; // pixel
      ///$config['max_height'] = '1000'; // pixel
      $config['file_name'] =$nama;

      $this->upload->initialize($config);

	    if (!empty($_FILES['foto']['name'])) {
	        if ( $this->upload->do_upload('foto') ) {
                $foto_ = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/upload/testimoni/'.$foto_['file_name'];
                $config['create_thumb']= false;
                $config['maintain_ratio']= true;
                $config['quality']= '90%';
                $config['width']= '100';
                $config['height']= '100';
                $config['file_name'] = $_FILES['foto']['name'];
                $config['new_image']= './assets/upload/testimoni/thumbnail/'.$foto_['file_name'];
            
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                           
	            $data = array(
	                          'nama'            => $nama,
	                          'pekerjaan'       => $pekerjaan,
	                          'isi_testimoni'   => $isi_testimoni,
	                          'bintang'         => $bintang,
                              'foto'            => $foto_['file_name']
	                        );
							$this->Testimoni_model->tambahDataTestimoni($data);
              redirect('testimoni');
	        }else {
                $error = $this->upload->display_errors();
              die($error);
	        }
	    }else {
	      echo "tidak masuk";
	    }

  }


  

    public function tambah() {
        $data['judul']= 'Tambah Data Testimoni';
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('pekerjaan','Pekerjaan','required');
        $this->form_validation->set_rules('isi_testimoni','Testimoni','required');
       
      

        if ( $this->form_validation->run() == false ) {             
                                    $this->load->view('admin/templates/header',$data);
                                    $this->load->view('admin/templates/sidebar');
                                    $this->load->view('testimoni/tambah');
                                    $this->load->view('admin/templates/footer');                       
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