<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pertanyaan extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->database();
        $this->load->model('Pertanyaan_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }

    public function index() {
        $data['judul'] = "Pertanyaan";

        $data['pertanyaan']= $this->Pertanyaan_model->getAllPertanyaan();
        
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('pertanyaan/index',$data);
        $this->load->view('admin/templates/footer');
    }


//     public function insertdata()
//   {
//       $jenis_pertanyaan   = $this->input->post('jenis_pertanyaan');
//       $jawaban   = $this->input->post('jawaban');
//       $isi_testimoni   = $this->input->post('isi_testimoni');
//       $bintang = $this->input->post('bintang');

//       // get foto
//       $config['upload_path'] = './assets/upload/pertanyaan/';
//       $config['allowed_types'] = 'jpg|png|jpeg|gif';
//       $config['max_size'] = '1024';  //2MB max
//      /// $config['max_width'] = '1000'; // pixel
//       ///$config['max_height'] = '1000'; // pixel
//       $config['file_name'] =$jenis_pertanyaan;

//       $this->upload->initialize($config);

// 	    if (!empty($_FILES['foto']['name'])) {
// 	        if ( $this->upload->do_upload('foto') ) {
//                 $foto_ = $this->upload->data();
//                 //Compress Image
//                 $config['image_library']='gd2';
//                 $config['source_image']='./assets/upload/pertanyaan/'.$foto_['file_name'];
//                 $config['create_thumb']= false;
//                 $config['maintain_ratio']= true;
//                 $config['quality']= '90%';
//                 $config['width']= '100';
//                 $config['height']= '100';
//                 $config['file_name'] = $_FILES['foto']['name'];
//                 $config['new_image']= './assets/upload/pertanyaan/thumbnail/'.$foto_['file_name'];
            
//                 $this->load->library('image_lib', $config);
//                 $this->image_lib->resize();
                           
// 	            $data = array(
// 	                          'jenis_pertanyaan'            => $jenis_pertanyaan,
// 	                          'jawaban'       => $jawaban,
// 	                          'isi_testimoni'   => $isi_testimoni,
// 	                          'bintang'         => $bintang,
//                               'foto'            => $foto_['file_name']
// 	                        );
// 							$this->Pertanyaan_model->tambahDataPertanyaan($data);
//               redirect('pertanyaan');
// 	        }else {
//                 $error = $this->upload->display_errors();
//               die($error);
// 	        }
// 	    }else {
// 	      echo "tidak masuk";
// 	    }

//   }


  

    public function tambah() {
        $data['judul']= 'Tambah Data Pertanyaan';
        $this->form_validation->set_rules('jenis_pertanyaan','Jenis Pertanyaan','required');
        $this->form_validation->set_rules('jawaban','Pekerjaan','required');
       
       
      

        if ( $this->form_validation->run() == false ) {             
                                    $this->load->view('admin/templates/header',$data);
                                    $this->load->view('admin/templates/sidebar');
                                    $this->load->view('pertanyaan/tambah');
                                    $this->load->view('admin/templates/footer');                       
        }else{
            
            $this->Pertanyaan_model->tambahDataPertanyaan();
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('pertanyaan');
        }                   
                                              }   

    

   

public function hapus($id){
    $this->Pertanyaan_model->hapusDataPertanyaan($id);;
    $this->session->set_flashdata('flash','Dihapus');
    redirect('pertanyaan');

}

public function detail($id){
    $data['judul']="Detail Data pertanyaan";
    $data['pertanyaan']=$this->Pertanyaan_model->getPertanyaanById($id);
    $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('pertanyaan/detail',$data);
        $this->load->view('admin/templates/footer');

} 


public function edit($id){
    $data['pertanyaan'] = $this->Pertanyaan_model->getPertanyaanById($id);
    $data['judul']= 'Update Data';

    $this->form_validation->set_rules('jenis_pertanyaan','Jenis Pertanyaan','required');
    $this->form_validation->set_rules('jawaban','Pekerjaan','required');
    
;

    if ( $this->form_validation->run() == false ) {
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('pertanyaan/edit',$data);
        $this->load->view('admin/templates/footer');
       
    } 
    else 
    {
        $this->Pertanyaan_model->ubahDataPertanyaan();
        $this->session->set_flashdata('flash','diubah');
        redirect('pertanyaan');
        

    }     

}

}
?>