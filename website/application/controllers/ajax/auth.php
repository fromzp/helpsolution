<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
            return false;
	}
        
        public function login()
        {
            $email = trim($this->input->post('email'));
            $password_md5 = safe_md5($this->input->post('password'));
            $post_login=array();
            $post_login['email']=$email;
            $post_login['password'] =$password_md5;
            fb($post_login);
            log_message('DEBUG','Ajax request to login user ['. $email .']');
            
            if( empty($email) or !check_email($email) )
            {
                $msg = 'Please enter valid email address.';
                log_message('DEBUG',$msg);
                make_json_answer(false,$msg);
                return false;
            }
            
            $this->load->model('auth_model');
            list($user_id,$admin) = $this->auth_model->login($email,$password_md5);
            log_message('DEBUG','user_id: '. $user_id .'; admin: '. (int)$admin);
            if( $user_id > 0  )
            {
                if( $this->auth_model->auth_set($user_id,(bool)$admin) )
                {
                    $msg = 'Success Login: '. $email;
                    log_message('DEBUG',$msg);
                    
                    $params = array('msg'=>$msg);
                    
                    //Login from LOGIN page
                    if ( base_url() === $_SERVER['HTTP_REFERER'] )
                    {
                        $url = site_url('form_builder');
                        // if user ADMIN - redirect to the /admin section
                        if( $admin )
                        {
                            $url = site_url('admin/users');
                        }
                        // if has not active subscriptions -> profile
                        if( !$admin and !_subscr() )
                        {
                            $url = site_url('my/profile');
                        }
                        $params['url'] = $url;
                    }

                    // restore language settings
                    $language_id = user_details('language_id',$user_id);
                    if( $language_id != LANGUAGE_ID){
                        $this->load->model('language_model','language');
                        $this->language->language_id_set($language_id);
                    }
                    
                    make_json_answer(true,$params);
                    return true;
                }
            }
            
            
            $msg = 'Please check your login and password.';
            log_message('DEBUG',$msg);
            make_json_answer(false,$msg);
            return false;
            
        }
        
        public function recovery()
        {
            $email = trim($this->input->post('email'));
            
            log_message('DEBUG','Ajax request to recovery password ['. $email .']');
            
            if( empty($email) or !check_email($email) )
            {
                $msg = '<{Please enter valid email address.}>';
                log_message('DEBUG',$msg);
                make_json_answer(false,$msg);
                return false;
            }
            
            $this->load->model('user_model');
            $this->load->model('auth_model');
            $this->load->model('etemplate_model');
            $this->load->model('notification_model');
            
            // get user details
            $user = $this->user_model->users_get($start=0, $items_per_page=1, $order_by='', $order='', $search=array('email'=>$email), $total = false);
            if( !is_array($user) or sizeof($user)<=0 )
            {
                $msg = '<{Please enter valid email address.}>';
                log_message('DEBUG',$msg);
                make_json_answer(false,$msg);
                return false;
            }
            $user_id = array_keys($user);
            $user_id = (int)$user_id[0];
            $user = $user[$user_id];
            
            // make link
            $secret_hash = md5($email.$user['password'].date('Y-m-d').rand(10,9999));
            $secret_link = site_url('my/password/recovery').'/'.$secret_hash;
            
            // clear all links
            //@doto clear only expired links. one recovery by timeout period
            $this->user_model->password_recovery_hash_clear($user_id);
            
            // save link
            $result = $this->user_model->password_recovery_hash_set($user_id,$secret_hash);
            if( !$result )        
            {
                $msg = '<{Unfortunatelly this feature is disabled at this time.}>';
                log_message('ERROR',__FILE__.'@'.__LINE__.": ".$msg);
                make_json_answer(false,$msg);
                return false;
            }
            
            // get template
            $etemplate = $this->etemplate_model->etemplate_by_action('password_recovery');
            if( !is_array($etemplate) or sizeof($etemplate)<=0 )
            {
                $msg = '<{Unfortunatelly this feature is disabled at this time.}>';
                log_message('DEBUG',$msg);
                make_json_answer(false,$msg);
                return false;
            }
            
            // build template
            $vars = $user;
            $vars['recovery_link'] = $secret_link;
            $etemplate = $this->etemplate_model->etemplate_build($etemplate, $vars);

            // send notification
            $to_email = $user['email'];
            $subject = $etemplate['subject'];
            $body = $etemplate['body'];
            $result = $this->notification_model->notification_send($to_email,$subject,$body);
            
            if( $result )
            {
                $msg = '<{Password recovery instructions were send to your email.}>';
                make_json_answer(true,$msg);
                return false;
            }
            $msg = "Can't send notification. Please try later.";
            log_message('ERROR',__FILE__.'@'.__LINE__.": ". $msg);
            make_json_answer(false,$msg);
            return false;
        }
        
        function logout()
        {
            $this->auth_model->auth_unset();
            if( !auth_check() )
            {
                $msg = 'Success Logout';
                log_message('DEBUG',$msg);
                
                
                // restore language settings to default
                $this->load->model('language_model','language');
                $this->language->language_id_set($this->language->language_id_get_default());

                
                make_json_answer(true,$msg);
                return true;
            }
            
            
            $msg = 'Logout error';
            log_message('DEBUG',$msg);
            make_json_answer(false,$msg);
            return false;
        }
}
?>
