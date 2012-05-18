<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profile extends CI_Controller {

    function Index() {
        fb($this->session->all_userdata(), 'all userdata profile 7line');
        if (!auth_check()) {
            /* auth_error();
              return false; */
            redirect(base_url());
        }


        $this->_view_details();
    }

    function _view_details() {

        //$this->load->model('plan_model');
        //$this->load->model('subscription_model');

        $user_id = user_id();
        $user_details = user_details();

        $data = array();


        //@doto optimize
        /*
          $subscription = $this->subscription_model->get_active($user_id);
          if( !is_array($subscription) or sizeof($subscription)<=0 )
          {
          $subscription = $this->subscription_model->next_to_paid($user_id);
          }

          if( !is_array($subscription) or sizeof($subscription)<=0 )
          {
          $subscription = $this->subscription_model->last_expired($user_id);
          }


          if( is_array($subscription) and sizeof($subscription)>0 )
          {
          $data['subscription'] = $subscription;
          $data['plan'] = $this->plan_model->plan_details_get($subscription['plan_id']);
          }
         */
        /* image need size */
        if (!empty($user_details['image'])) {

            $logo_max_upload_width = $this->config->item('upload_logo_image_max_width');
            $logo_max_upload_height = $this->config->item('upload_logo_image_max_height');
            $upload_path = $this->config->item('upload_path');

            $image_size = GetImageSize($upload_path . $user_details['image']);

            $image_width = $image_size[0];
            $image_height = $image_size[1];

            $size_constant = $image_width / $image_height;

            if ($image_width > $logo_max_upload_width) {
                $will_width = $logo_max_upload_width;
                $will_height = $will_width / $size_constant;
            } else {
                $will_width = $image_width;
                $will_height = $will_width / $size_constant;
                $will_height > $logo_max_upload_height? $user_details['image_height']=$logo_max_upload_height:$user_details['image_height'] = $will_height;  
            }

            $user_details['image_width'] = $will_width;
            
        } else {
            $user_details['image_width'] = 200;
            $user_details['image_height'] = 235;
        }
        /* image need size end */
        $data['user_details'] = $user_details;
        fb($data, 'profile 53 line user_details_array');
        _view('frontend/my/view_my_profile_details', $data);
    }

    function _view_details_subuser() {


        $user_id = user_id();
        $user_details = user_details();

        $data = array();

        $data['user_details'] = $user_details;

        _view('frontend/my/view_my_profile_details_subuser', $data);
    }

    function edit() {
        if (!auth_check()) {
            auth_error();
            return false;
        }

        if (!_subscr()) {
            subscr_error();
            return false;
        }

        if (subuser_check()) {
            $this->_edit_details_subuser();
        } else {
            $this->_edit_details();
        }
    }

    function _edit_details() {
        $this->load->model('plan_model');
        $this->load->model('subscription_model');

        $user_id = user_id();
        $user_details = user_details();

        $data = array();

        $subscription = $this->subscription_model->get_active($user_id);
        if (is_array($subscription) and sizeof($subscription) > 0) {
            $data['subscription'] = $subscription;
            $data['plan'] = $this->plan_model->plan_details_get($subscription['plan_id']);
        }
        $data['user_details'] = $user_details;

        _view('frontend/my/view_my_profile_details_edit', $data);
    }

    function password_recovery($access_hash='') {
        $access_hash = safe_md5($access_hash);
        if (empty($access_hash) or mb_strlen($access_hash) != 32) {
            put_error('<{Password recovery}>', '<{The recovery link is broken or out of date.}>');
            return false;
        }

        $this->load->model('user_model');
        $this->load->model('etemplate_model');
        $this->load->model('notification_model');

        //get user by link
        $user_id = (int) $this->user_model->user_id_by_recovery_hash($access_hash);
        if ($user_id <= 0) {
            put_error('<{Password recovery}>', '<{The recovery link is broken or out of date.}>');
            log_message('ERROR', __FILE__ . '@' . __LINE__);
            return false;
        }

        // generate new password
        $new_password = pass_random($len = 6, $num = 1, $small = 1, $upper = 0);

        //set password to customer
        $result = $this->user_model->user_password_set($user_id, md5($new_password));
        if (!$result) {
            put_error('<{Password recovery}>', "<{Can't set new password.}>");
            log_message('ERROR', __FILE__ . '@' . __LINE__);
            return false;
        }

        // get template
        $etemplate = $this->etemplate_model->etemplate_by_action('password_recovery_send');
        if (!is_array($etemplate) or sizeof($etemplate) <= 0) {
            put_error('<{Password recovery}>', "<{Can't get notification template.}>");
            log_message('ERROR', __FILE__ . '@' . __LINE__);
            return false;
        }

        // build template
        $user = user_details(null, $user_id, $cache = false);
        $vars = $user;
        $vars['user_password'] = $new_password;
        $etemplate = $this->etemplate_model->etemplate_build($etemplate, $vars);

        // send notification
        $to_email = $user['email'];
        $subject = $etemplate['subject'];
        $body = $etemplate['body'];
        $result = $this->notification_model->notification_send($to_email, $subject, $body);

        if ($result) {
            // clear recovery link
            $this->user_model->password_recovery_hash_clear($user_id);

            // redirect to page
            redirect('password_recovered');
            return true;
        }

        put_error('<{Password recovery}>', "<{Can't reset the password.}>");
        log_message('ERROR', __FILE__ . '@' . __LINE__);
        return false;

        return false;
    }

    function _edit_details_subuser() {

        $user_id = user_id();
        $user_details = user_details();

        $data = array();

        $data['user_details'] = $user_details;

        _view('frontend/my/my_profile_details_edit_subuser', $data);
    }

}
