<?php

/**
 * @descripcion: Helper used to get info CMS
 * @author: Abner Tellez
 */


if (!function_exists('is_login')) {

    function is_login($user_id, $ajax = FALSE) {

        $CI = &get_instance();

        $CI->load->library('validation');
        $CI->load->config('project-config', TRUE);
		
        if (!$CI->validation->is_logged_in($user_id)) {

            $redirect = base_url() . 'login';

            if ($ajax) {
                $redirect = $redirect . '/_';
            }

            redirect($redirect, 'location', 301);

        }

    }

}

/* End of file gp_auth_helper.php */
/* Location: ./application/helpers/gp_auth_helper.php */
