<!-- ヘッダーを読み込む -->
<?php get_header(); ?>

<main>
    <!-- メインビジュアル -->
    <div class="mainvisual">
        <img src="<?php echo get_template_directory_uri(); ?>/img/yakiniku.jpg?<?php echo date("YmdHis");?>" alt="メイン画像">
    </div>
    <!-- こだわり -->
    <section id="concept" class="concept bg-red">
    <h2 class="section-title">こだわり</h2>
    <div class="concept-desc">
        <img src="<?php echo get_template_directory_uri(); ?>/img/kari.jpg" alt="">
        <div class="concept-message">
            <h3 class="line-animation">産地直送の黒毛和牛でお腹も心も存分に満たされる</h3>
            <p>当店はお客様にお肉の 質 と 量 どちらも満足いただきたい<br>その想いから産地直送で鮮度良いお肉を提供しています<br>是非一度、自慢のA5ランク佐賀牛をご堪能ください</p>
        </div>
    </div>
    <div class="concept-detail">
        <?php
            $page = get_page_by_path( 'concept' ); // スラッグ conceptの固定ページを取得
            if ( $page ) : ?>
                <a href="<?php echo esc_url( get_permalink( $page->ID ) ); ?>">
                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/4.png" alt=""> -->
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/4.png' ); ?>" alt="こだわり">
                </a>
        <?php endif; ?>
    </div>
    <div class="contact">
        <img src="<?php echo get_template_directory_uri(); ?>/img/tel.png" id="contact" data-basepath="<?php echo get_template_directory_uri(); ?>/img/" alt="">
    </div>

    </section>
    <!-- お品書き -->
    <section id="menu" class="menu">
    <h2 class="section-title">お品書き</h2>
    <div class="menu-desc menu1">
        <img src="<?php echo get_template_directory_uri(); ?>/img/kari2.png" alt="">
        <div class="menu-message">
            <h3>タイトルが入ります。タイトルが入ります。</h3>
            <p>仕込みやカットの仕方など細部にまでこだわりをもつ当店のお肉を<br>ご家族、ご友人、お一人様、どなたでもご満足いただける自信があります</p>
        </div>
    </div>
    <div class="menu-desc menu2">
        <img src="<?php echo get_template_directory_uri(); ?>/img/kari3.png" alt="">
        <div class="menu-message">
            <h3>逸品料理も見逃せない<br>味わい深いこだわりの逸品</h3>
            <p>仕込みやカットの仕方など細部にまでこだわりをもつ当店のお肉を<br>ご家族、ご友人、お一人様、どなたでもご満足いただける自信があります</p>
        </div>
    </div>
    <div class="btn">
        <button type="button" class="menu-btn" onclick="location.href='<?php echo esc_url( home_url('/menu/') ); ?>'">メニュー詳細はこちら</button>
    </div>

    <div class="lunch-wrapper">
        <h3>毎日ランチ実施中<br>厳選された黒毛和牛をお手頃価格でお召し上がりいただけます</h3>
    <!-- 上部：ランチコンテンツ（画像と説明文）表示 Start-->
        <div class="lunch-display">
            <div class="lunch-desc active section-fade" data-id="1">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sime1.png" alt="">
                <div class="lunch-message">
                <h4>肉1.5倍増し</h4>
                <h3>カルビ・ロースランチ 1.5倍</h3>
                <p>2,580円</p>
                </div>
            </div>
        <div class="lunch-desc section-fade" data-id="2">
            <img src="<?php echo get_template_directory_uri(); ?>/img/sime2.png" alt="">
            <div class="lunch-message">
                <h4>夏季限定</h4>
                <h3>盛岡冷麺</h3>
                <p>,0円</p>
            </div>
        </div>
        <div class="lunch-desc section-fade" data-id="3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/sime3.png" alt="">
            <div class="lunch-message">
                <h4>肉1.5倍増し</h4>
                <h3>カルビ・ロース・ハラミランチ 1.5倍</h3>
                <p>,0円</p>
            </div>
        </div>
            <div class="lunch-desc section-fade" data-id="4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sime4.png" alt="">
                <div class="lunch-message">
                <h4>肉1.5倍増し</h4>
                <h3>カルビ・ロースランチ 1.5倍</h3>
                <p>,0円</p>
                </div>
            </div>
    </div>
    <!-- 上部：ランチ表示 Finish-->
    <!-- 下部：サムネイル（タブボタン） -->
        <div class="lunch-tabs">
            <img src="<?php echo get_template_directory_uri(); ?>/img/sime1.png" alt="ランチ1" data-id="1">
            <img src="<?php echo get_template_directory_uri(); ?>/img/sime2.png" alt="ランチ2" data-id="2">
            <img src="<?php echo get_template_directory_uri(); ?>/img/sime3.png" alt="ランチ3" data-id="3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/sime4.png" alt="ランチ4" data-id="4">
        </div>
        <!-- 下部：サムネイル（タブボタン） -->

        <div class="btn">
            <!-- <button type="button" class="lunch-btn" onclick="location.href='<?php echo get_template_directory_uri() , '/page-lunch.php'; ?>'">その他ランチメニュー</button> -->
            <button type="button" class="lunch-btn" onclick="location.href='<?php echo get_permalink( get_page_by_path('lunch') ); ?>'">その他ランチメニュー</button>
        </div>
    </div>
    </section>
    
    <!-- 店舗情報 -->
    <?php get_template_part( 'access' ); ?>
</main>                                                           

<!-- // フッタを読み込む -->
<?php get_footer(); ?>