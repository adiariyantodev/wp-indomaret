<?php

if (!function_exists('breakdance_zero_theme_setup')) {
    function breakdance_zero_theme_setup()
    {
        add_theme_support('title-tag');
        add_theme_support( 'post-thumbnails' );

    }
}

add_action('after_setup_theme', 'breakdance_zero_theme_setup');


add_action( 'admin_notices', 'warn_if_breakdance_is_disabled' );

function warn_if_breakdance_is_disabled() {
    if (defined('__BREAKDANCE_DIR__')){
        return;
    }

    ?>
    <div class="notice notice-error is-dismissible">
        <p>You're using Breakdance's Zero Theme but Breakdance is not enabled. This isn't supported.</p>
    </div>
    <?php
}


// Menangani request Ajax untuk mendapatkan kota berdasarkan provinsi
function get_kota_by_provinsi() {
    if (isset($_GET['provinsi_id'])) {
        $provinsi_id = $_GET['provinsi_id'];

        // Mengambil kota yang memiliki provinsi sebagai induk
        $kota_terms = get_terms(array(
            'taxonomy' => 'lokasi',
            'parent' => $provinsi_id,
            'orderby' => 'name',
            'hide_empty' => false,
        ));

        $response = array();
        foreach ($kota_terms as $kota) {
            $response[] = array(
                'term_id' => $kota->term_id,
                'name' => $kota->name
            );
        }

        wp_send_json($response);
    }
    wp_die();
}
add_action('wp_ajax_get_kota', 'get_kota_by_provinsi');
add_action('wp_ajax_nopriv_get_kota', 'get_kota_by_provinsi');

// Menangani request Ajax untuk mendapatkan kecamatan berdasarkan kota
function get_kecamatan_by_kota() {
    if (isset($_GET['kota_id'])) {
        $kota_id = $_GET['kota_id'];

        // Mengambil kecamatan yang memiliki kota sebagai induk
        $kecamatan_terms = get_terms(array(
            'taxonomy' => 'lokasi',
            'parent' => $kota_id,
            'orderby' => 'name',
            'hide_empty' => false,
        ));

        $response = array();
        foreach ($kecamatan_terms as $kecamatan) {
            $response[] = array(
                'term_id' => $kecamatan->term_id,
                'name' => $kecamatan->name
            );
        }

        wp_send_json($response);
    }
    wp_die();
}
add_action('wp_ajax_get_kecamatan', 'get_kecamatan_by_kota');
add_action('wp_ajax_nopriv_get_kecamatan', 'get_kecamatan_by_kota');

// Menangani request Ajax untuk mendapatkan desa berdasarkan kecamatan
function get_desa_by_kecamatan() {
    if (isset($_GET['kecamatan_id'])) {
        $kecamatan_id = $_GET['kecamatan_id'];

        // Mengambil desa yang memiliki kecamatan sebagai induk
        $desa_terms = get_terms(array(
            'taxonomy' => 'lokasi',
            'parent' => $kecamatan_id,
            'orderby' => 'name',
            'hide_empty' => false,
        ));

        $response = array();
        foreach ($desa_terms as $desa) {
            $response[] = array(
                'term_id' => $desa->term_id,
                'name' => $desa->name
            );
        }

        wp_send_json($response);
    }
    wp_die();
}
add_action('wp_ajax_get_desa', 'get_desa_by_kecamatan');
add_action('wp_ajax_nopriv_get_desa', 'get_desa_by_kecamatan');
