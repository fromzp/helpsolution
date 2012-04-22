<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
            $f1 = safe_chars($this->uri->segment(1),'',20);
            $f2 = safe_chars($this->uri->segment(2),'',20);
            
            $page = !empty($f2)?$f2:$f1;
            $data = array(
                'page'=>$page
            );
            
            
            log_message('DEBUG','Page request: '. $f1 .'; '. $f2);
            log_message('DEBUG','search file here: '. getcwd().'/application/views/pages/'.$f1.'/'.$f2.'.php');
            if( !empty($f2) and file_exists(getcwd().'/application/views/pages/'.$f1.'/view_'.$f2.'.php') )
            {
                $data['page_content'] = _view('pages/'.$f1.'/view_'.$f2, $data, true);
                _view('pages/view_container', $data);
                return true;
            }
            
            log_message('DEBUG','search file here: '. getcwd().'/views/pages/'.$f1.'.php');
            if( file_exists(getcwd().'/application/views/pages/view_'.$f1.'.php') )
            {
                $data['page_content'] = _view('pages/view_'.$f1, $data, true);
                _view('pages/view_container', $data);
            }
            else
            {
                show_404();
            }
	}
        
}
?>