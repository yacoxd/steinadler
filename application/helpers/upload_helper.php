<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @descripcion: Helper used to upload files
 * @author: Abner Tellez
 */

function upload_file($file, $field_name, $path_upload, $types, $new_file_name = FALSE, $overwrite = FALSE, $max_size = FALSE, $img_dimantion = FALSE) {

    if (strlen($file['name']) > 0) {
        $CI = &get_instance();
        $CI->load->helper('text');
        $CI->load->helper('url');
        $CI->load->library('upload');

        if (!$new_file_name) {
            $name = pathinfo($file['name']);
            $name = url_title($name['filename']);
        } else {
            $name = url_title($new_file_name);
        }

        $file_conf['upload_path'] = $path_upload;
        $file_conf['allowed_types'] = $types;
        $file_conf['max_width'] = '6000';
        $file_conf['max_height'] = '6000';
        $file_conf['file_name'] = $name;
        $file_conf['overwrite'] = $overwrite;

        if (!$max_size) {
            $file_conf['max_size'] = '5000000';
        } else {
            $file_conf['max_size'] = $max_size;
        }

        $CI->upload->initialize($file_conf);

        if (!$CI->upload->do_upload($field_name)) {
            $file_data['error'] = $CI->upload->display_errors(' ', ' ');
            unset($file_config);
            return $file_data;
        } else {
            $file_data = $CI->upload->data();

            if ($img_dimantion) {
                create_thumbnail($file_data['full_path'], $img_dimantion[0], $img_dimantion[1], $file_data['file_name']);
            }
            unset($file_config);
            return $file_data;
        }

    } else {
        return FALSE;
    }

}

function create_thumbnail($source_image, $width, $height, $new_image) {

    $CI = &get_instance();

    $config['image_library'] = 'gd2';
    $config['source_image'] = $source_image;
    $config['new_image'] = $new_image;
    $config['maintain_ratio'] = TRUE;
    $config['width'] = $width;
    $config['height'] = $height;

    $CI->load->library('image_lib');
    $CI->image_lib->initialize($config);
    $CI->image_lib->resize();

}

function deleteDir($carpeta) {
    foreach (glob($carpeta . "/*") as $archivos_carpeta) {
        echo $archivos_carpeta;

        if (is_dir($archivos_carpeta)) {
            eliminarDir($archivos_carpeta);
        } else {
            unlink($archivos_carpeta);
        }
    }

    rmdir($carpeta);
}

function deleteFile($field, $path) {
    $delete_file = $path . '/' . $field;
    if (file_exists($delete_file) && $field != '')
        unlink($delete_file);
}

/* End of file define_language_helper.php */
/* Location: ./application/helpers/gp_upload_helper.php */
