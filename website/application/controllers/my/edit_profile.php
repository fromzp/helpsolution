<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Edit_profile extends CI_Controller {

    function Index() {
        fb($this->session->all_userdata(), 'all userdata edit_profile');
        if (!auth_check()) {
            /*  auth_error();
              return false; */

            redirect(base_url());
        }


        $this->_edit_details();
    }

    function _edit_details() {

        $user_id = user_id();
        $user_details = user_details();
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
                $will_height > $logo_max_upload_height ? $user_details['image_height'] = $logo_max_upload_height : $user_details['image_height'] = $will_height;
            }

            $user_details['image_width'] = $will_width;
        } else {
            $user_details['image_width'] = 200;
            $user_details['image_height'] = 235;
        }
        /* image need size end */
        $data = array();
        $data['user_details'] = $user_details;
        fb($user_details, 'user_details');
        _view('frontend/my/view_my_profile_details_edit', $data);
    }

}
