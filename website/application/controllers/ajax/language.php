<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Language extends CI_Controller {

	public function index()
	{
            return false;
	}
        
        public function switch_language()
        {
            $language_id = $this->input->post('language_id');
            log_message('DEBUG','Ajax request to switch language to: '. $language_id);
            
            if( $language_id <=0 )
            {
                $msg = 'language_id is not set';
                log_message('DEBUG',$msg);
                make_json_answer(false,$msg);
                return false;
            }
            
            $this->load->model('language_model');
            $languages = $this->language_model->language_get_all();
            if( isset($languages[$language_id]) )
            {
                $language = $languages[$language_id];
                
                if( (int) $language['active'] <=0 )
                {
                    $msg = 'language "'. $language['code'] .'" is not active';
                    log_message('DEBUG',$msg);
                    make_json_answer(false,$msg);
                    return false;
                }
                
                $result = $this->language_model->language_id_set($language['id']);
                log_message('DEBUG','Switch language result: '. intval($result));
                if( $result )
                {
                    $msg = 'Language successfully switched to '. $language['code'];
                    log_message('DEBUG',$msg);
                    make_json_answer(true,array('language'=>$language,'msg'=>$msg));
                    return true;
                }
            }
            
            $msg = 'Unknow language ID';
            log_message('DEBUG',$msg);
            make_json_answer(false,$msg);
            return false;
        }
}
?>