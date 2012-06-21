<?php

function get_header($title='', $objects_array=array(), $options = array()) {
    $CI = &get_instance();

    /*
     * options['navigator'] = true -> $option_navigator = true
     */
    if (is_array($options) and sizeof($options) > 0) {
        extract($options, EXTR_PREFIX_ALL, 'opt_');
    }


    $data = array();
    $data['title'] = $title;

    $default_objects = array();

    $default_objects[] = array('css', 'style_home.css.php', array('id' => 'style_home.css'));

    $default_objects[] = array('js', 'language_switcher.js.php', array('id' => 'language_switcher'));


    $default_objects[] = array('js_source', 'js/jquery.md5.js', array('id' => 'jquery.md5'));

    $data['opt_language_menu'] = get_menu_language();


    $objects_array = objects_merge($objects_array, $default_objects);

    fb(__FILE__ . '@' . __LINE__);
    fb($objects_array);


    // load objects (css, js)
    $data['objects'] = '';
    if (isset($objects_array) and is_array($objects_array) and sizeof($objects_array) > 0) {
        foreach ($objects_array as $object) {
            if (count($object) == 3) {
                list($type, $filename, $params) = $object;
            } else {
                $params = array();
                list($type, $filename) = $object;
            }
            if ($type == 'raw') {
                $object_html = $filename; // filename - raw html
            } else {
                $object_html = get_object($type, $filename, $params);
            }

            if ($object_html !== false) {
                $data['objects'] .= "\n" . $object_html;
            }
        }
    }


    $return = _view('view_header', $data, TRUE);
    return $return;
}

function get_header_auth($title='', $objects_array=array(), $options = array()) {
    $CI = &get_instance();

    /*
     * options['navigator'] = true -> $option_navigator = true
     */
    if (is_array($options) and sizeof($options) > 0) {
        extract($options, EXTR_PREFIX_ALL, 'opt_');
    }


    $data = array();
    $data['title'] = $title;

    $default_objects = array();

    $default_objects[] = array('css', 'style.css.php', array('id' => 'style.css'));

    $default_objects[] = array('js', 'language_switcher.js.php', array('id' => 'language_switcher'));

    $default_objects[] = array('js_source', 'js/jquery.md5.js', array('id' => 'jquery.md5'));
    $default_objects[] = array('js', 'menu.js.php', array('id' => 'menu'));

    $data['opt_language_menu'] = get_menu_language();


    $objects_array = objects_merge($objects_array, $default_objects);

    fb(__FILE__ . '@' . __LINE__);
    fb($objects_array);


    // load objects (css, js)
    $data['objects'] = '';
    if (isset($objects_array) and is_array($objects_array) and sizeof($objects_array) > 0) {
        foreach ($objects_array as $object) {
            if (count($object) == 3) {
                list($type, $filename, $params) = $object;
            } else {
                $params = array();
                list($type, $filename) = $object;
            }
            if ($type == 'raw') {
                $object_html = $filename; // filename - raw html
            } else {
                $object_html = get_object($type, $filename, $params);
            }

            if ($object_html !== false) {
                $data['objects'] .= "\n" . $object_html;
            }
        }
    }


    $return = _view('view_header_auth', $data, TRUE);

    return $return;
}

function get_navigator() {
    $data = array();
    $CI = &get_instance();

    $data['page'] = $CI->uri->segment(1);
    $return = _view('view_navigator', $data, TRUE);
    return $return;
}

function get_navigator_auth() {
    $data = array();
    $CI = &get_instance();
    $data['page'] = $CI->uri->segment(2);
    $return = _view('view_navigator_auth', $data, TRUE);
    return $return;
}

function get_footer() {
    $data = array();
    $return = _view('view_footer', $data, TRUE);
    return $return;
}

function get_footer_auth() {
    $return = _view('view_footer_auth', $data, TRUE);
    return $return;
}

function get_menu_language() {
    $CI = &get_instance();
    $CI->load->model('language_model');
    $languages = $CI->language_model->language_get_all();

    $data = array('languages' => $languages);
    $return = _view('common/view_language_menu', $data, TRUE);

    return $return;
}

function _view($view, $data=array(), $option=false) {
    $CI = &get_instance();


    log_message('DEBUG', 'Load template: ' . $view);

    return $CI->load->view($view, $data, $option);
}

function get_ajax_messages() {
    $return = _view('common/view_ajax_messages', array(), true);

    return $return;
}

function get_img_src($image) {

    $fs_path = getcwd() . '/img/' . LANGUAGE_CODE . '/' . $image;
    $url = base_url() . 'img/' . LANGUAGE_CODE . '/' . $image;
    if (file_exists($fs_path)) {
        return $url;
    }

    $fs_path = getcwd() . '/img/' . $image;
    $url = base_url() . 'img/' . $image;
    if (file_exists($fs_path)) {
        return $url;
    }

    log_message('ERROR', 'image not abailable: ' . $fs_path);
    $url = base_url() . 'img/no-image.gif';
    //fb(__FILE__.'@'.__LINE__ .": ", $image);
    return $url;
}

function get_object($type, $filename, $params=array()) {
    if (!in_array($type, array('css', 'js', 'img', 'js_source', 'css_source', 'js_inline'))) {
        log_message('ERROR', __METHOD__ . ': unknow object type');
        return false;
    }


    $inline = false;

    if ($type == 'js_inline') {
        $inline = true;
        $type = 'js';
    }

    if ($type == 'css_inline') {
        $inline = true;
        $type = 'css';
    }

    // params

    $id = isset($params['id']) ? ' id="' . $params['id'] . '" ' : '';

    if ($type == 'js_source') {
        return '<script ' . $id . ' src="' . base_url() . $filename . '" type="text/javascript"></script>';
    }

    if ($type == 'css_source') {
        return '<link ' . $id . ' href="' . base_url() . $filename . '" media="screen" rel="stylesheet" type="text/css"/>';
    }


    $data = $params;
    $_object_path = '';
    $full_path = getcwd() . '/application/views/' . $type . '/' . LANGUAGE_CODE . '/' . $filename;
    log_message('DEBUG', "Object fullpath: " . $full_path);
    if (file_exists($full_path)) {
        log_message('DEBUG', "Trying to load language depend object file: " . $type . '/' . LANGUAGE_CODE . '/' . $filename);
        $_object_path = $type . '/' . LANGUAGE_CODE . '/' . $filename;
        //return _view($_object_path, $data, TRUE);
    } else {
        log_message('DEBUG', "There is no language depend object file: " . $full_path);
    }

    $full_path = getcwd() . '/application/views/' . $type . '/' . $filename;
    if (file_exists($full_path)) {
        log_message('DEBUG', "Trying to load object file: " . $full_path);
        $_object_path = $type . '/' . $filename;
        //return _view($_object_path, $data, TRUE);
    }


    if ($type == 'js') {
        if ($inline) {
            return '<script ' . $id . ' type="text/javascript">' . _view($_object_path, $data, TRUE) . '</script>';
        } else {
            return '<script ' . $id . ' src="' . site_url('get_object/js') . '/' . base64_url_encode($_object_path) . '" type="text/javascript"></script>';
        }
    }


    if ($type == 'css') {
        if ($inline) {
            return '<style ' . $id . ' type="text/css" >' . _view($_object_path, $data, TRUE) . '</style>';
        } else {
            return '<link ' . $id . ' href="' . site_url('get_object/css') . '/' . base64_url_encode($_object_path) . '/' . md5(microtime()) . '" media="screen" rel="stylesheet" type="text/css"/>';
        }
    }

    log_message('ERROR', "There is no object file: " . $full_path);
    return false;
}

function country_get_all() {


    $CI = &get_instance();
    $CI->db->select('id,name,code2');
    $CI->db->from('countries');
    $CI->db->where('status', 1);
    $CI->db->order_by('name', 'asc');
    $query = $CI->db->get();

    $countries = array();
    if ($query->num_rows() > 0) {
        $result_array = $query->result_array();
        foreach ($result_array as $value) {
            $countries[$value['id']] = $value;
        }
        return $countries;
    }

    return false;
}

function country_select_get($input='') {

    $countries = country_get_all();

    $data = array(
        'countries' => $countries,
        'input' => $input
    );
    $return = _view('common/country_select', $data, true);

    return $return;
}

function language_select_get($input='') {
    $CI = &get_instance();
    $CI->load->model('language_model', 'language');
    $languages = $CI->language->language_get_all(true /* active */);

    $data = array(
        'languages' => $languages,
        'input' => $input
    );
    return _view('common/language_select', $data, true);
}

function get_marital_status($input='') {
    
}

function get_menu_registration($step='registration') {
    $CI = &get_instance();

    $data = array('step' => $step);
    return _view('frontend/registration/menu', $data, TRUE);
}

function get_registration_block() {
    $data = array();
    return _view('registration_block', $data, TRUE);
}

function put_error($title='', $msg='') {
    $data = array(
        'error_title' => $title,
        'msg' => $msg
    );
    _view('frontend/error/error', $data);
}

function check_image_resize($image='', $type='') {
    $CI = &get_instance();

    switch ($type) {
        case 'upload':
            $upload_path = $CI->config->item('upload_path');
            break;
        case 'tmp':
            $upload_path = $CI->config->item('upload_path_tmp');
            break;
    }


    if (!empty($image)) {
        $logo_max_upload_width = $CI->config->item('upload_logo_image_max_width');
        $logo_max_upload_height = $CI->config->item('upload_logo_image_max_height');
        $image_size = GetImageSize($upload_path . $image);

        $image_width = $image_size[0];
        $image_height = $image_size[1];

        $size_constant = $image_width / $image_height;

        if ($image_width > $logo_max_upload_width) {
            $will_width = $logo_max_upload_width;
            $will_height = $will_width / $size_constant;
            $will_height > $logo_max_upload_height ? $user_details['image_height'] = $logo_max_upload_height : $user_details['image_height'] = $will_height;
            $user_details['image_width'] = $will_width;
            return $user_details;
        } else {
            $will_width = $image_width;
            $will_height = $will_width / $size_constant;
            $will_height > $logo_max_upload_height ? $user_details['image_height'] = $logo_max_upload_height : $user_details['image_height'] = $will_height;
            $user_details['image_width'] = $will_width;
            return $user_details;
        }
    } else {
        $user_details['image_width'] = 200;
        $user_details['image_height'] = 235;
        return $user_details;
    }
}

/*
 * 
 * function form_custom_logo    return full path to the form logo image
 * ex. http://base_url/_form_builder/upload/logo/logofile.ext
 * OR if not exists -> user profile logo
 * OR if not exists -> default logo
 *      */
?>