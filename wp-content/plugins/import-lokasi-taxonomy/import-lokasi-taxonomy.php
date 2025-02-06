<?php
/**
 * Plugin Name: Import Lokasi dan Ceklis Taxonomy
 * Description: Plugin untuk mengimpor lokasi dari file CSV ke taxonomy dan otomatis menautkan lokasi ke custom post type dengan cabang tertentu.
 * Version: 1.3
 * Author: Nama Anda
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function import_lokasi_from_csv_with_branch($file_path) {
    if (!file_exists($file_path)) {
        echo '<div class="notice notice-error"><p>File CSV tidak ditemukan!</p></div>';
        return;
    }

    $file = fopen($file_path, 'r');
    $total_lines = count(file($file_path));
    $current_line = 0;
    $error_messages = [];

    while (($line = fgetcsv($file)) !== FALSE) {
        $current_line++;

        try {
            $data = explode(':', $line[0]);

            if (count($data) < 2) {
                throw new Exception("Format data tidak valid pada baris $current_line: " . $line[0]);
            }

            $branch_name = trim(array_shift($data)); // Nama cabang
            $locations = array_map('trim', $data);  // Lokasi

            $parent = 0;
            foreach ($locations as $location) {
                $term = term_exists($location, 'lokasi', $parent);

                if ($term === 0 || $term === null) {
                    $term = wp_insert_term(
                        $location,
                        'lokasi',
                        array(
                            'parent' => $parent,
                        )
                    );

                    if (is_wp_error($term)) {
                        throw new Exception("Gagal membuat term '$location' pada baris $current_line: " . $term->get_error_message());
                    }
                }

                $parent = $term['term_id'];
            }

            $posts = get_posts(array(
                'post_type' => 'marketer_waralaba',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cabang',
                        'field'    => 'name',
                        'terms'    => $branch_name,
                    ),
                ),
                'numberposts' => -1,
            ));

            foreach ($posts as $post) {
                $result = wp_set_object_terms($post->ID, $locations, 'lokasi', true);

                if (is_wp_error($result)) {
                    throw new Exception("Gagal menautkan lokasi ke post ID {$post->ID} pada baris $current_line: " . $result->get_error_message());
                }
            }
        } catch (Exception $e) {
            $error_messages[] = $e->getMessage();
        }

        $progress = intval(($current_line / $total_lines) * 100);
        echo "<script>parent.updateProgress($progress);</script>";
        flush();
        ob_flush();
    }

    fclose($file);

    if (!empty($error_messages)) {
        echo '<div class="notice notice-error"><p><strong>Kesalahan saat impor:</strong></p><ul>';
        foreach ($error_messages as $error) {
            echo '<li>' . esc_html($error) . '</li>';
        }
        echo '</ul></div>';
    } else {
        echo "<script>alert('Impor selesai tanpa kesalahan!');</script>";
    }

    echo "<script>parent.updateProgress(100);</script>";
}

function import_lokasi_with_branch_menu() {
    add_menu_page(
        'Impor Lokasi dengan Cabang',
        'Impor Lokasi Cabang',
        'manage_options',
        'import-lokasi-cabang',
        'import_lokasi_with_branch_page',
        'dashicons-upload',
        30
    );
}
add_action('admin_menu', 'import_lokasi_with_branch_menu');

function import_lokasi_with_branch_page() {
    ?>
    <div class="wrap">
        <h1>Impor Lokasi dan Cabang</h1>

        <?php
        if (isset($_FILES['csv_file']) && $_FILES['csv_file']['error'] == 0) {
            $uploaded_file = $_FILES['csv_file']['tmp_name'];
            ?>
            <div id="progress-bar-container" style="width: 100%; background: #f3f3f3; border: 1px solid #ccc; padding: 10px; margin-top: 20px;">
                <div id="progress-bar" style="width: 0; height: 30px; background: green;"></div>
            </div>
            <script type="text/javascript">
                function updateProgress(progress) {
                    document.getElementById('progress-bar').style.width = progress + '%';
                }
            </script>
            <?php

            import_lokasi_from_csv_with_branch($uploaded_file);
        }
        ?>

        <form method="post" enctype="multipart/form-data">
            <input type="file" name="csv_file" accept=".csv" required>
            <input type="submit" name="import_lokasi" class="button button-primary" value="Impor Lokasi dan Cabang">
        </form>
    </div>
    <?php
}
