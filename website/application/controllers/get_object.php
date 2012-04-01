<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Get_object extends CI_Controller {

	public function js($file='',$rand='')
	{
            header('Content-Type: application/x-javascript');
            return $this->_get_file($file);
	}
        
        
        public function css($file='',$rand='')
	{
            header('Content-Type: text/css');
            return $this->_get_file($file);
	}
        
        
        
        function upload($upload_id_md5,$rand='')
        {
            //@doto check user access to the fiel
            
            if( !auth_check() )
            {
            auth_error();
            return false;
            }
            if( !_subscr() )
            {
            subscr_error();
            return false;
            }
        
            $this->load->model('upload_model');
            $upload = $this->upload_model->upload_get_by_md5($upload_id_md5);
            if( !is_array($upload) or sizeof($upload)<=0 )
            {
                log_message('ERROR',__FILE__.'@'.__LINE__);
                show_404();
                return false;
            }
            
            $filename = $upload['file_path'].$upload_id_md5;
            
            if( !is_readable($filename) )
            {
                log_message('ERROR',__FILE__.'@'.__LINE__);
                show_404();
                return false;
            }
            
            header("Content-Disposition: attachment; filename=\"". $upload['file_name'] ."\";");
            header('Content-Length: '.filesize($filename));
            header("Content-type: ". $upload['file_type'] ."");
            header("Pragma: no-cache");
            header("Expires: 0");
        
            echo file_get_contents($filename);
            return true;
        }
        
        
               
        function _get_file($file)
        {
            $file = base64_url_decode($file);
            _view($file);
        }

}
?>