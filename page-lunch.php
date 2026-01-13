
<?php
/*
Template Name: ランチメニュー
*/
get_header();
?>

<!-- ランチメニューコンテンツ -->
<section class="lunch-area">
    <h2 class="section-title">ランチメニュー</h2>
    <h3 class="text">ご家族揃ってのお食事はもちろん、平日のビジネスランチやママ友でのお食事会に、是非ご利用くださいませ</h3>
    <div>
    <div class="lunch-inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/kari1.png" alt="">
            <div class="lunch-message">
                <h4>一番人気</h4>
                <h3 class="lunch-line">カルビ・ロース・ハラミランチ</h3>
                <p>1,980円</p>
            </div>
    </div>
    <div class="lunch-inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/kari2.png" alt="">
            <div class="lunch-message">
                <h4>焼肉王道</h4>
                <h3 class="lunch-line">カルビ・ロースランチ</h3>
                <p>1,880円</p>
            </div>
    </div>
    <div class="lunch-inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/kari3.png" alt="">
            <div class="lunch-message">
                <h4>普段よりも少し贅沢なランチ</h4>
                <h3 class="lunch-line">カルビ3種盛りランチ 1.5倍</h3>
                <p>2,400円</p>
            </div>
    </div>
    <div class="lunch-inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/kari4.png" alt="">
            <div class="lunch-message">
                <h4>数量限定</h4>
                <h3 class="lunch-line">イチボランチ 1.5倍</h3>
                <p>2,400円</p>
            </div>
    </div>
    </div>
    <div class="lunch">
    <h2 class="section-title">その他ランチメニュー</h2>
    <h3 class="text">※土日祝もご提供しています</h3>
    <div class="lunch-content">
        <div class="lunch-item">
            <dl>
              <dt>メニュー名</dt>
              <dd>0,000円</dd>
              <dt>メニュー名</dt>
              <dd>0,000円</dd>
              <dt>メニュー名</dt>
              <dd>0,000円</dd>
              <dt>メニュー名</dt>
              <dd>0,000円</dd>
            </dl>
        </div>
        <div class="lunch-item">
            <dl>
              <dt>メニュー名</dt>
              <dd>0,000円</dd>
              <dt>メニュー名</dt>
              <dd>0,000円</dd>
              <dt>メニュー名</dt>
              <dd>0,000円</dd>
              <dt>メニュー名</dt>
              <dd>0,000円</dd>
            </dl>
        </div>
    </div>
    </div>
</section>
<!-- 店舗情報 -->
    <?php get_template_part( 'access' ); ?>

<!-- // フッタを読み込む -->
<?php get_footer(); ?>
