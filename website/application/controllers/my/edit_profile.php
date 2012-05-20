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
        $image = $user_details['image'];
        $result = check_image_resize($image);
        $user_details['image_width'] = $result['image_width'];
        $user_details['image_height'] = $result['image_height'];
        /* image need size end */
        $data = array();
        $data['user_details'] = $user_details;
        fb($user_details, 'user_details');
        _view('frontend/my/view_my_profile_details_edit', $data);
    }

}
