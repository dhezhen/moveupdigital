<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Portpolio extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->model('Portpolio_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }

    public function index() {
        $data['judul'] = "Portpolio";
        $data['portpolio']= $this->Portpolio_model->getAllPortpolio();
        
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('portpolio/index',$data);
        $this->load->view('admin/templates/footer');
    }


    public function insertdata()
  {
      $kategori   = $this->input->post('kategori');
      $foto   = $this->input->post('foto');
      

      // get foto
      $config['upload_path'] = './assets/upload/portpolio/';
      $config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['max_size'] = '1024';  //2MB max
     /// $config['max_width'] = '1000'; // pixel
      ///$config['max_height'] = '1000'; // pixel
      $config['file_name'] =$kategori;

      $this->upload->initialize($config);

	    if (!empty($_FILES['foto']['name'])) {
	        if ( $this->upload->do_upload('foto') ) {
                $foto_ = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/upload/portpolio/'.$foto_['file_name'];
                $config['create_thumb']= false;
                $config['maintain_ratio']= true;
                $config['quality']= '90%';
                $config['width']= '100';
                $config['height']= '100';
                $config['file_name'] = $_FILES['foto']['name'];
                $config['new_image']= './assets/upload/portpolio/thumbnail/'.$foto_['file_name'];
            
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                           
	            $data = array(
	                          'kategori'            => $kategori,
	                           'foto'            => $foto_['file_name']
	                        );
                            $this->Portpolio_model->tambahDataPortpolio($data);
                            $this->session->set_flashdata('flash','ditambahkan');
                            redirect('portpolio');

	        }else {
                $error = $this->upload->display_errors();
              die($error);
	        }
	    }else {
	      echo "tidak masuk";
	    }

  }


  

    public function tambah() {
        $data['judul']= 'Tambah Data Portpolio';
        $this->form_validation->set_rules('kategori','kategori','required');
      
       
      

        if ( $this->form_validation->run() == false ) {             
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('portpolio/tambah');
            $this->load->view('admin/templates/footer');                       
        }                   
                                              }   

    

   

public function hapus($id,$foto){

    $path = './assets/upload/portpolio/';
    @unlink($path.$foto);
    $where = array('id' => $id );
    $this->Portpolio_model->hapusDataPortpolio($where);
    $this->session->set_flashdata('flash','Dihapus');
    redirect('portpolio');

}

public function detail($id){
    $data['judul']="Detail Data portpolio";
    $data['portpolio']=$this->Portpolio_model->getPortpolioById($id);
    $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('portpolio/detail',$data);
        $this->load->view('admin/templates/footer');

} 


public function edit($id){
    $data['portpolio'] = $this->Portpolio_model->getPortpolioById($id);
    $data['judul']= 'Update Data';
    $this->load->view('admin/templates/header',$data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('portpolio/edit',$data);
    $this->load->view('admin/templates/footer');
    


}

public function updatedata()
  {
        $id   = $this->input->post('id');
        $kategori = $this->input->post('kategori');
     

        $path = './assets/upload/portpolio/';

      $kondisi = array('id' => $id );

      // get foto
      $config['upload_path'] = './assets/upload/portpolio/';
      $config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['max_size'] = '2048';  //2MB max
      $config['max_width'] = '4480'; // pixel
      $config['max_height'] = '4480'; // pixel
      $config['file_name'] =$_FILES['foto']['name'];

      $this->upload->initialize($config);

	    if (!empty($_FILES['foto']['name'])) {
	        if ( $this->upload->do_upload('foto') ) {
	            $foto_file = $this->upload->data();
	            $data = array(
                    'kategori'       => $kategori,
                    'foto'       => $foto_file['file_name'],
    	                        );
              // hapus foto pada direktori
              @unlink($path.$this->input->post('filelama'));

				$this->portpolio_model->update($data,$kondisi);
                redirect('portpolio');
	        }else {
              die("gagal update");
	        }
	    }else {
	      echo "tidak masuk";
	    }

  }


} 

?>