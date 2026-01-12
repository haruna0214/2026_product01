<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>炭火焼肉 名前｜公式ホームページ</title>
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel='stylesheet' href='<?php echo get_template_directory_uri() , '/scss/style.css'; ?>' /> -->
    <?php wp_head(); ?>
</head>
<body>
<header class="header-area">
        <div class="header-container">
            <h1 class="site-title">
                <!-- 慣習的にrel属性を付ける -->
                <a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">炭火焼肉 名前</a>
            </h1>
            <button class="hamburger" id="hamburger-toggle" aria-expanded="false">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            </button>
            <nav class="nav" id="nav" aria-hidden="true">
                <div class="nav-overlay">
                    <ul class="nav-list">
                        <!-- 特別な関係性（外部・広告）ではないので、rel属性は付けない -->
                        <!-- 動き：スラッグ指定で固定ページに遷移する -->
                        <li class="nav-item"><a href="<?php echo esc_url( home_url('/concept/') ); ?>">こだわり</a></li>
                        <li class="nav-item"><a href="<?php echo esc_url( home_url('/menu/') ); ?>">お品書き</a></li>
                        <li class="nav-item"><a href="<?php echo esc_url( home_url('/floor/') ); ?>">空間</a></li>
                        <!-- 動き:同一ページ内スクロール -->
                        <li class="nav-item"><a href="<?php echo esc_url( home_url('/#access') ); ?>">店舗情報</a></li>
                    </ul>
                </div>
            </nav>
        </div>
</header>

