<?php
class ControllerTestupload extends Controller {
	public function index() {
		$data['error'] = '';
        $data['image'] = '';
        $data['thumb'] = '';
        if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
            $config['upload_path']          = 'image/catalog/upload_image/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2000;
            $config['max_width']            = 2560;
            $config['max_height']           = 1440;
    
    		$this->load->library('upload');
            
            $this->upload->initialize($config);
            
            
            if ( ! $this->upload->do_upload('image'))
            {
                $data['error'] = array(
                    'code' => 'false',
                    'massage' => $this->upload->display_errors()
                );
            }
            else
            {   $image = $this->upload->data();
                if(!empty($image)){
                    
                    $data['image'] = 'catalog/upload_image/'.$image['file_name'];
                    
                    $this->load->model('tool/image');
        			$data['thumb'] = $this->model_tool_image->resize($data['image'], 50, 50);
                    
                }
    
            }
        
        }
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		
		$this->response->setOutput($this->load->view('testupload', $data));
	}

}
