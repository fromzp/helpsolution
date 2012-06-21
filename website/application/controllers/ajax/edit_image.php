<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Edit_image extends CI_Controller {

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
            case "edit_image":
                $this->change_registration_image();
                break;
            case "edit_image":
                $this->user_photo_preview();
                break;
        }

        $msg = '<{Wrong request}>';
        log_message('ERROR', $msg);
        make_json_answer(false, $msg);
        return false;
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
        $type = 'tmp';

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

            $result = check_image_resize($image['upload_data']['file_name'], $type);

            $config['height'] = $result['image_height'];
            $config['width'] = $result['image_width'];
            $config['image_library'] = 'gd2';
            $config['source_image'] = $image['upload_data']['full_path'];
            $config['new_image'] = $thumbnail;
            //   $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;

            $this->image_lib->initialize($config);
            $this->image_lib->resize();

            echo '<img id="user_image" height="' . $config['height'] . '" width= "' . $config['width'] . '" alt="' . $image['upload_data']['file_name'] . '" src="' . $upload_link . "thumb_" . $image['upload_data']['file_name'] . '/' . md5(microtime()) . '">';
        }
    }

    public function change_registration_image() {
        $CI = &get_instance();
        $new_image = $this->input->post('image');

        $user_details = user_details();
        $old_image = $user_details['image'];
        fb($new_image, '$new_image');


        $status = FALSE;

        $upload_from = $CI->config->item('upload_path_tmp');
        $upload_to = $this->config->item('upload_path');

        //$old_image = $user_details['image'];
        $user_id = user_id();

        $details = array(
            'image' => $new_image
        );


        $result = $this->user_model->user_details_set($user_id, $details);

        if ($result) {
            if (!copy($upload_from . $new_image, $upload_to . $new_image)) {
                $status = FALSE;
                $params['msg'] = "No copy";
                make_json_answer($status, $params);
                return FALSE;
            }
            
            if (!empty($old_image)) {
                if ($new_image != $old_image) {
                    if (!unlink($upload_to . $old_image)) {
                        $status = FALSE;
                        $params['msg'] = "No copy";
                        make_json_answer($status, $params);
                        return FALSE;
                    }
                }
            }

            $status = TRUE;
            $params['msg'] = "$upload_to.$new_image";
            make_json_answer($status, $params);
            return TRUE;
        }
//////////
        $status = false;
        $params['msg'] = "Can not update user photo";
        return FALSE;
    }

}

?>