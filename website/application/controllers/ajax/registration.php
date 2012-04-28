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

        if ( !empty( $image ) ) {

            $upload_to = $this->config->item('upload_path');
            $upload_from = $this->config->item('upload_path_tmp');

            if (!copy($upload_from.$image, $upload_to.$image)) {                 
                 $status = false;
                 $msg = 'image upload error';        
            }
            
        } else {
            $image=NULL;
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

    /*
      function user_plan_set() {
      $CI = &get_instance();
      $this->load->model('plan_model');
      $this->load->model('user_model');
      $this->load->model('subscription_model');
      $this->load->model('billing_count_model', 'count');

      if (!auth_check()) {
      $msg = '<{Auth error}>';
      log_message('DEBUG', $msg);
      make_json_answer(false, $msg);
      return false;
      }

      $user_id = user_id();

      $plan_id = intval($this->input->post('plan_id'));
      if ($plan_id <= 0) {
      $msg = '<{Unknown plan}>';
      log_message('DEBUG', $msg);
      make_json_answer(false, $msg);
      return false;
      }

      $plans = $this->plan_model->plan_get_all();
      if (isset($plans[$plan_id])) {
      $plan = $plans[$plan_id];

      // close all subscriptions
      // @doto pay attention at here
      $this->subscription_model->close_all($user_id);

      // subscription create
      $subscription = array();
      $subscription['user_id'] = $user_id;
      $subscription['plan_id'] = $plan_id;
      $subscription['create_time'] = date('Y-m-d H:i:s');
      $subscription['subscription_status_id'] = 4; //awaiting payment
      if ($plan['amount'] <= 0) {
      $this->user_model->user_detail_set($user_id, 'free_plan', 1);
      $this->user_model->user_detail_set($user_id, 'user_status_id', 1); // set active

      $this->count->count_init($user_id, $this->plan_model->counts($plan));
      $subscription['subscription_status_id'] = 1; // active [FREE plan]
      }

      $subscription_id = $this->subscription_model->subscription_create($subscription);
      if ($subscription_id == false or $subscription_id <= 0) {
      $msg = 'Subscription create error';
      log_message('DEBUG', $msg);
      make_json_answer(false, $msg);
      return false;
      }

      if ($subscription_id > 0) {
      $msg = 'Subscription successfully created with status ' . $subscription['subscription_status_id'];
      log_message('DEBUG', $msg);

      $params = array();
      $params['url'] = site_url('form_builder');
      if ($plan['amount'] > 0) {
      $params['url'] = site_url('registration/billing');
      }
      make_json_answer(true, $params);
      return true;
      }
      }

      $msg = 'Unknown plan';
      log_message('DEBUG', $msg);
      make_json_answer(false, $msg);
      return false;
      }
     */

    function user_details_set() {
        $CI = &get_instance();
        //$this->load->model('user_model');

        if (!auth_check()) {
            $msg = 'Auth error';
            log_message('DEBUG', $msg);
            make_json_answer(false, $msg);
            return false;
        }

        $user_id = user_id();

        $name = $this->input->post('name');
        $address = $this->input->post('address');
        $zip = $this->input->post('zip');
        $city = $this->input->post('city');
        $country = (int) $this->input->post('country');
        $phone = $this->input->post('phone');
        $company = $this->input->post('company');

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
            //$result = $this->user_model->user_details_set($user_id, $details);
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

    public function user_photo_preview() {

        fb(__FILE__ . '@' . __LINE__);
        $upload_path = $this->config->item('upload_path_tmp');
        fb($upload_path);
        $upload_link = base_url() . $this->config->item('upload_url_tmp');
        fb($upload_link);

        $this->load->library('image_lib');
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
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

            $config['image_library'] = 'gd2';
            $config['source_image'] = $image['upload_data']['full_path'];
            $config['new_image'] = $thumbnail;
            //   $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 200;
            $config['height'] = 235;

            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            fb('name_photo', $image['upload_data']['file_name']);
            echo '<img id="user_image" height="275" width=207 alt="' . $image['upload_data']['file_name'] . '" src="' . $upload_link . "thumb_" . $image['upload_data']['file_name'] . '/' . md5(microtime()) . '">';
        }
    }

}

?>