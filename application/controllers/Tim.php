<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tim extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->database();
        $this->load->model('Tim_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }

    public function index() {
        $data['judul'] = "Tim Moveup Digital";

        $data['tim']= $this->Tim_model->getAllTim();
        
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('tim/index',$data);
        $this->load->view('admin/templates/footer');
    }


    public function insertdata()
  {
      $nama   = $this->input->post('nama');
      $posisi   = $this->input->post('posisi');
      $fb   = $this->input->post('fb');
      $ig = $this->input->post('ig');
      $twitter = $this->input->post('twitter');
      $no_hp = $this->input->post('no_hp');

      // get foto
      $config['upload_path'] = './assets/upload/tim/';
      $config['allowed_types'] = 'jpg|jpeg|png|gif';
      $config['max_size'] = 2048;  //2MB max
     /// $config['max_width'] = '1000'; // pixel
      ///$config['max_height'] = '1000'; // pixel
      $config['file_name'] =$nama;

      $this->upload->initialize($config);

	    if (!empty($_FILES['foto']['name'])) {
	        if ( $this->upload->do_upload('foto') ) {
                $foto_ = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/upload/tim/'.$foto_['file_name'];
                $config['create_thumb']= false;
                $config['maintain_ratio']= true;
                $config['quality']= '90%';
                $config['width']= '100';
                $config['height']= '100';
                // $config['file_name'] = $_FILES['foto']['name'];
                $config['new_image']= './assets/upload/tim/thumbnail/'.$foto_['file_name'];
            
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                           
	            $data = array(
	                          'nama'            => $nama,
	                          'posisi'          => $posisi,
	                          'fb'              => $fb,
	                          'ig'              => $ig,
	                          'twitter'         => $twitter,
	                          'no_hp'           => $no_hp,
                              'foto'            => $foto_['file_name']
	                        );
							$this->Tim_model->tambahDataTim($data);
              redirect('Tim');
	        }else {
                $error = $this->upload->display_errors();
              die($error);
	        }
	    }else {
            $error = $this->upload->display_errors();
	      echo "tidak masuk".$error;
	    }

  }


  

    public function tambah() {
        $data['judul']= 'Tambah Data Tim';
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('posisi','Posisi','required');
        $this->form_validation->set_rules('fb','FB','Alamat Facebook');
        $this->form_validation->set_rules('ig','Alamat Instagram','required');
        $this->form_validation->set_rules('no_hp','No Handphone','required');
       
      

        if ( $this->form_validation->run() == false ) {             
                                    $this->load->view('admin/templates/header',$data);
                                    $this->load->view('admin/templates/sidebar');
                                    $this->load->view('tim/tambah');
                                    $this->load->view('admin/templates/footer');                       
        }                   
                                              }   

    

   

public function hapus($id,$foto){
    $path = './assets/upload/tim/';
    @unlink($path.$foto);
    $where = array('id' => $id );
    $this->Tim_model->hapusDataTim($where);
    $this->session->set_flashdata('flash','Dihapus');
    redirect('tim');

}

public function detail($id){
    $data['judul']="Detail Data tim";
    $data['tim']=$this->Tim_model->getTimById($id);
    $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('tim/detail',$data);
        $this->load->view('admin/templates/footer');

} 


public function edit($id){
    $data['tim'] = $this->Tim_model->getTimById($id);
    $data['judul']= 'Update Data';

    $this->form_validation->set_rules('nama','Nama','required');
    $this->form_validation->set_rules('posisi','Posisi','required');
    $this->form_validation->set_rules('fb','FB','Alamat Facebook');
    $this->form_validation->set_rules('ig','Alamat Instagram','required');
    $this->form_validation->set_rules('no_hp','No Handphone','required');
;

    if ( $this->form_validation->run() == false ) {
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('tim/edit',$data);
        $this->load->view('admin/templates/footer');
       
    } 
    else 
    {
        $this->Tim_model->ubahDataTim();
        $this->session->set_flashdata('flash','diubah');
        redirect('Tim');
        

    }     

}

}
?>