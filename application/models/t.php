<?php

public function insertdata()
  {
      $name   = $this->input->post('name');
      $alamat = $this->input->post('alamat');

      // get foto
      $config['upload_path'] = './assets/picture';
      $config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['max_size'] = '2048';  //2MB max
      $config['max_width'] = '4480'; // pixel
      $config['max_height'] = '4480'; // pixel
      $config['file_name'] = $_FILES['fotopost']['name'];

      $this->upload->initialize($config);

	    if (!empty($_FILES['fotopost']['name'])) {
            
            if ( $this->upload->do_upload('fotopost') ) {
	            $foto = $this->upload->data();
	            $data = array(
	                        'name'       => $name,
                            'foto'       => $foto['file_name'],
	                        'alamat'     => $alamat,
	                        ); 
							$this->modelcrud->insert($data);
                            redirect('');
	        }else {
              die("gagal upload");
	        }
        }

        else 
        {
	      echo "tidak masuk";
	    }

  }