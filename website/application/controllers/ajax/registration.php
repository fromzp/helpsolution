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
        }

        $msg = '<{Wrong request}>';
        log_message('ERROR', $msg);
        make_json_answer(false, $msg);
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
        $purpose= $this->input->post('purpose');


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
                    $msg = 'image upload error';
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
                'purpose'=>$purpose,
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

            if ($upload_width > $logo_max_upload_width ) {
                $config['width'] = $logo_max_upload_width;
                $will_height=$config['width'] / $size_constant;
                $will_height > $logo_max_upload_height? $will_height=$logo_max_upload_height:$config['height'] = $will_height;
            } else {
                $config['width'] = $upload_width;
                $will_height=$config['width'] / $size_constant;
                $will_height > $logo_max_upload_height? $config['height']=$logo_max_upload_height:$config['height'] = $will_height;               
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