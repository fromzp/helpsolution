<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Registration extends CI_Controller {

    public function Index() {
        if (auth_check()) {
            // active user don't allow to the registration process
            if ((int) user_details('status_id') != 0) {
                $msg = '<{Not allowed for active user}>';
                log_message('ERROR', $msg);
                make_json_answer(false, $msg);
                return false;
            }
        }
        fb($this->input->post('step'),'step');
        switch ($this->input->post('step')) {
            case "user_create":
                $this->user_create();
                break;
            case "user_plan_set":
                $this->user_plan_set();
                break;
            case "user_details_set":
                $this->user_details_set();
                break;
            case "info_time":
                $this->user_set_general_info();
                break;
            case "experience":
                $this->user_set_experience();
                break;
        }

        $msg = '<{Wrong request}>';
        log_message('ERROR', $msg);
        make_json_answer(false, $msg);
        return false;
    }

    
    public function user_set_general_info(){
        $CI = &get_instance();
        $this->load->model('user_model');  
         if (!auth_check()) {
            $msg = 'Auth error';
            log_message('DEBUG', $msg);
            make_json_answer(false, $msg);
            return false;
        }
        $user_id = user_id();
        $user_status=$this->input->post('status');
        $age=$this->input->post('age');
        fb($age,'$age');
        $marital_status=$this->input->post('marital_status');
        fb($marital_status,'$marital_status');
        $skills=$this->input->post('skills');
        $country_id=$this->input->post('country_id');
        $city=$this->input->post('city');
        $current_status=$this->input->post('current_status');
        
        $status = true;
        $params = array();
        
        if( empty($city) ) {
            $status=false;
            $params['city']=_jerr();
        }
        
        if ($status) {
              $details = array(               
                'birthdate' => $age,
                'marital_status' => $marital_status,
                //'skills' => $skills,
                'country_id' => $country_id,
                'city_name' => $city,
                'current_status'=> $current_status
            );
              fb($details,'$details');
            
            $result = $this->user_model->user_details_set($user_id, $details);
            if (!$result) {
                $status = false;
                $params['msg'] = 'Set user details error';
            }
        }
        
         if ($status) {

            $msg = 'Success update';            
            $params = array(
                'msg' => $msg
            );
            make_json_answer($status, $params);
            return true;
        }

        if (!isset($params['msg']) or empty($params['msg'])) {
            $params['msg'] = replace_lang('<{The fields you missed have been highlighted}>');
        }
        make_json_answer(false, $params);
        return false;
    }
    
    public function user_set_experience() {
        $CI = &get_instance();
        $this->load->model('user_model');

        if (!auth_check()) {
            $msg = 'Auth error';
            log_message('DEBUG', $msg);
            make_json_answer(false, $msg);
            return false;
        }
        $user_id = user_id();
        $title=$this->input->post('title');
        $age_begin=$this->input->post('age_begin');
        $age_end=$this->input->post('age_end');
        $type=$this->input->post('type');
        $details=$this->input->post('details');
        
        $status = true;
        $params = array();
        
        if (empty($title)) {
            $status=false;
            $params['title']=_jerr();
        }
        
        if (empty($age_begin)) {
            $status=false;
            $params['age_begin']=_jerr();
        }
        
         if (mb_strlen($age_begin) < 4) {
            $status = false;
            $params['password'] = _jerr('minlength', array(4));
        }
        
        if (empty($age_end)) {
            $status=false;
            $params['age_begin']=_jerr();
        }
        
         if (mb_strlen($age_end) < 4) {
            $status = false;
            $params['password'] = _jerr('minlength', array(4));
        }        
        
        if ( empty($type)) {
            $status=false;
            $params['msg']='No type';
        }
        
        if ($status) {
            $details=array(
                'user_id' => $user_id,
                'title'=> $title,
                'age_begin' => $age_begin,
                'age_end' => $age_end,
                'type' => $type,
                'details' => $details 
            );
            $result=$this->user_model->insert_into($details);
            if ($result>0) {
                $status = true;
            } else {
           $status = false;
           $params['msg'] = 'image upload error';
            }
        }
        
        if ($status) {

            $msg = 'Success create';            
            $params = array(
                'msg' => $msg
            );
            make_json_answer($status, $params);
            return true;
        }

        if (!isset($params['msg']) or empty($params['msg'])) {
            $params['msg'] = replace_lang('<{The fields you missed have been highlighted}>');
        }
        make_json_answer(false, $params);
        return false;
        
    }

    public function user_create() {
        $CI = &get_instance();
        $this->load->helper('recaptchalib.php');
        $this->load->model('user_model');

        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $lastname = $this->input->post('lastname');
        $sex = $this->input->post('sex');
        $image = $this->input->post('image');
        $purpose = $this->input->post('purpose');


        $password = $this->input->post('password');
        $password2 = $this->input->post('password2');

        log_message('DEBUG', 'Ajax request to register user [' . $email . ']');

        $status = true;
        $params = array();

        // check email
        // @doto REGISTRATION: email confirm by sending email

        if (empty($email)) {
            $status = false;
            $params['email'] = _jerr();
        }

        if (!check_email($email)) {
            $status = false;
            $params['email'] = _jerr('email');
        }

        if (empty($name)) {
            $status = false;
            $params['name'] = _jerr();
        }

        if ($status and !$this->user_model->email_is_uniq($email)) {
            $status = false;
            $params['email'] = _jerr('remote');
        }

        if (empty($password)) {
            $status = false;
            $params['password'] = _jerr();
        }

        if (mb_strlen($password) < 6) {
            $status = false;
            $params['password'] = _jerr('minlength', array(6));
        }

        if (!empty($image)) {

            $upload_to = $this->config->item('upload_path');
            $upload_from = $this->config->item('upload_path_tmp');

            if (!is_writable($upload_from) || !is_writable($upload_to)) {
                $status = false;
                $params['msg'] = 'upload error';
            }

            if ($status) {

                if (!copy($upload_from . $image, $upload_to . $image)) {
                    $status = false;
                    $params['msg'] = 'image upload error';
                }
            }
        } else {
            $image = NULL;
        }

        // Check captcha
        $resp = recaptcha_check_answer($this->config->item('captcha_key_private'), $this->input->ip_address(), $this->input->post('recaptcha_challenge_field'), $this->input->post('recaptcha_response_field'));

        if (!$resp->is_valid) {
            $msg = 'captcha error';
            log_message('DEBUG', $msg . ": " . $this->input->post('recaptcha_response_field') . "; error: " . $resp->error);
            $status = false;
            $params['recaptcha_response_field'] = _jerr();
        }

        if ($status) {
            // create new user
            $details = array(
                'name' => $name,
                'purpose' => $purpose,
                //'create_time' => date('Y-m-d H:i:s'),
                'lastname' => $lastname,
                'sex' => $sex,
                'image' => $image
            );
            $user_id = $this->user_model->user_create($email, md5($password), $details);
            if ($user_id > 0) {
                // set auth
                $this->auth_model->auth_set($user_id);
            } else {
                $status = false;
                $params['msg'] = replace_lang('<{User create error}>');
            }
        }

        if ($status) {

            $msg = 'Registration success';
            log_message('DEBUG', $msg);
            $params = array(
                'url' => site_url('my/profile')
            );
            make_json_answer($status, $params);
            return true;
        }

        if (!isset($params['msg']) or empty($params['msg'])) {
            $params['msg'] = replace_lang('<{The fields you missed have been highlighted}>');
        }
        make_json_answer(false, $params);
        return false;
    }

    function user_details_set() {
        $CI = &get_instance();
        $this->load->model('user_model');

        if (!auth_check()) {
            $msg = 'Auth error';
            log_message('DEBUG', $msg);
            make_json_answer(false, $msg);
            return false;
        }

        $user_id = user_id();
        /*
          $name = $this->input->post('name');
          $address = $this->input->post('address');
          $zip = $this->input->post('zip');
          $city = $this->input->post('city');
          $country = (int)$this->input->post('country');
          $phone = $this->input->post('phone');
          $company = $this->input->post('company');
         */
        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $lastname = $this->input->post('lastname');
        $sex = $this->input->post('sex');
        $password = $this->input->post('password');
        $password2 = $this->input->post('password2');
        log_message('DEBUG', 'Ajax request to save user details [' . $user_id . ']');

        $status = true;
        $params = array();

        if (empty($name)) {
            $status = false;
            $params['name'] = _jerr();
        }

        if (empty($address)) {
            $status = false;
            $params['address'] = _jerr();
        }

        if (empty($city)) {
            $status = false;
            $params['city'] = _jerr();
        }

        $countries = country_get_all();
        if ($country <= 0 or !isset($countries[$country])) {
            $status = false;
            $params['country'] = _jerr();
        }

        if (empty($phone)) {
            $status = false;
            $params['phone'] = _jerr();
        }

        if (empty($company)) {
            $status = false;
            $params['company'] = _jerr();
        }

        if ($status) {
            // update details
            $details = array(
                'name' => $name,
                'address' => $address,
                'zip' => $zip,
                'city' => $city,
                'country_id' => $country,
                'phone' => $phone,
                'company' => $company
            );
            $result = $this->user_model->user_details_set($user_id, $details);
            if (!$result) {
                $status = false;
                $params['msg'] = 'Set user details error';
            }
        }

        if ($status) {

            $msg = 'update user details success';
            log_message('DEBUG', $msg);
            $params = array(
                'url' => site_url('registration/plans')
            );
            make_json_answer($status, $params);
            return true;
        }

        $msg = '<{Registration error}>';
        log_message('DEBUG', $msg . _var_dump($params));
        $params['msg'] = $msg;
        make_json_answer(false, $params);
        return false;
    }

    function user_registration_info_change() {
        $CI = &get_instance();
        $this->load->model('user_model');

        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $lastname = $this->input->post('lastname');
        $sex = $this->input->post('sex');
        $password = $this->input->post('password');
        $password2 = $this->input->post('password2');

        $params = array();
        $status = true;

        if (empty($email)) {
            $status = false;
            $params['email'] = _jerr();
        }

        if (!check_email($email)) {
            $status = false;
            $params['email'] = _jerr('email');
        }

        if (empty($name)) {
            $status = false;
            $params['name'] = _jerr();
        }

        if ($status and !$this->user_model->email_is_uniq($email)) {
            $status = false;
            $params['email'] = _jerr('remote');
        }

        if (empty($password)) {
            $status = false;
            $params['password'] = _jerr();
        }

        if (mb_strlen($password) < 6) {
            $status = false;
            $params['password'] = _jerr('minlength', array(6));
        }

        if ($status) {

            // chanhe info
            $details = array(
                'name' => $name,
                'lastname' => $lastname,
                'sex' => $sex
            );
            $status = $this->user_model->user_edit_registration($email, md5($password), $details);
        }

        if ($status) {
            make_json_answer($status);
            return true;
        } else {
            $status = false;
            $params['msg'] = replace_lang('<{User edit error}>');
            return false;
        }
    }

    public function user_photo_preview() {


        $upload_path = $this->config->item('upload_path_tmp');
        $upload_link = base_url() . $this->config->item('upload_url_tmp');
        $logo_max_upload_width = $this->config->item('upload_logo_image_max_width');
        $logo_max_upload_height = $this->config->item('upload_logo_image_max_height');
        $max_upload_size = $this->config->item('upload_max_filesize');
        $max_upload_width = $this->config->item('upload_image_max_width');
        $max_upload_height = $this->config->item('upload_image_max_height');
        $allowed_types = $this->config->item('upload_allowed_types');

        if (!is_dir($upload_path)) {
            if (!mkdir($upload_path)) {
                echo "No access for creating temp folder";
            };
        }

        $this->load->library('image_lib');
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = $allowed_types;
        $config['max_size'] = $max_upload_size;
        $config['max_width'] = $max_upload_width;
        $config['max_height'] = $max_upload_height;
        $config['overwrite'] = TRUE;
        $config['file_name'] = md5($this->session->userdata('session_id'));
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());

            echo $error['error'];
        } else {

            $image = array('upload_data' => $this->upload->data());

            chmod($image['upload_data']['full_path'], 0666);

            $thumbnail = $upload_path . 'thumb_' . $image['upload_data']['file_name'];

            $upload_width = $image['upload_data']['image_width'];
            $upload_height = $image['upload_data']['image_height'];
            $size_constant = $upload_width / $upload_height;

            if ($upload_width > $logo_max_upload_width) {
                $config['width'] = $logo_max_upload_width;
                $will_height = $config['width'] / $size_constant;
                $will_height > $logo_max_upload_height ? $will_height = $logo_max_upload_height : $config['height'] = $will_height;
            } else {
                $config['width'] = $upload_width;
                $will_height = $config['width'] / $size_constant;
                $will_height > $logo_max_upload_height ? $config['height'] = $logo_max_upload_height : $config['height'] = $will_height;
            }
            $config['image_library'] = 'gd2';
            $config['source_image'] = $image['upload_data']['full_path'];
            $config['new_image'] = $thumbnail;
            //   $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;

            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            fb('name_photo', $image['upload_data']['file_name']);
            echo '<img id="user_image" height="' . $config['height'] . '" width= "' . $config['width'] . '" alt="' . $image['upload_data']['file_name'] . '" src="' . $upload_link . "thumb_" . $image['upload_data']['file_name'] . '/' . md5(microtime()) . '">';
        }
    }

}

?>