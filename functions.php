<?php

// JSファイルの読み込み
// function st_enqueue_scripts() {
// // WordPress標準のjQueryを削除する(WordPress付属の jQuery はバージョンが古いため)
//     wp_deregister_script('jquery');
// // 読み込む順番を制御する
//     wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', true);
// // main.js を読み込み
//     wp_enqueue_script('main', get_theme_file_uri('main.js'), array('jquery'), '1.0.0', true);
// // slick.js を読み込み
//     wp_enqueue_script('slick', get_theme_file_uri('slick.js'), array('jquery'), '1.0.0', true);
// }
// add_action('wp_enqueue_scripts', 'st_enqueue_scripts');

function st_enqueue_scripts() {
    // --- JSファイルの読み込み ---
    // WordPress標準のjQueryを削除する(WordPress付属の jQuery はバージョンが古いため)
    wp_deregister_script('jquery');
    // 新しいjQueryをCDNから読み込み
    wp_enqueue_script(
        'jquery',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js',
        array(),
        '3.7.1',
        true
    );

    // main.js を読み込み
    wp_enqueue_script(
        'main',
        get_theme_file_uri('main.js'),
        array('jquery'),
        '1.0.0',
        true
    );
    // slick.js を読み込み
    wp_enqueue_script(
        'slick',
        get_theme_file_uri('slick.js'),
        array('jquery'),
        '1.0.0',
        true
    );

    // --- CSSファイルの読み込み ---
    // テーマのベースCSS（style.css）
    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );

    // SCSSコンパイル済みCSS
    wp_enqueue_style(
        'custom-style',
        get_theme_file_uri('/scss/style.css'),
        array('theme-style'),
        filemtime(get_theme_file_path('/scss/style.css'))
    );

    // slick.css をCDNから読み込み
    wp_enqueue_style(
        'slick',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
        array(),
        '1.8.1'
    );

    // slick-theme.css（デフォルトのテーマが必要なら）
    wp_enqueue_style(
        'slick-theme',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css',
        array('slick'),
        '1.8.1'
    );
}
add_action('wp_enqueue_scripts', 'st_enqueue_scripts');

?>

