
<?php
/*
Template Name: メニューページ
*/
get_header();
?>

<!-- お品書きコンテンツ -->
<section class="menu-area">
    <h2 class="section-title">お品書き</h2>
    <div class="menu">
        <h3 class="subtitle">厳選<br>盛合せメニュー</h3>
        <div class="inner menu-desc">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kari1.png" alt="">
                <div class="lunch-message">
                    <h4>迷ったらこれ！</h4>
                    <h3 class="line">香林盛合せ　　　　　　　8,030円</h3>
                    <p>和牛カルビ・和牛ロース・ハラミ・野菜焼</p>
                </div>
        </div>
        <div class="inner menu-desc">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kari1.png" alt="">
                <div class="lunch-message">
                    <h4>和牛の魅力が詰まった、贅沢な一皿を</h4>
                    <h3 class="line">吟選盛合せ　　　　　　　　12,100円</h3>
                    <p>和牛上カルビ・和牛骨付カルビ・和牛サーロイン・和牛特選ミスジ・野菜焼</p>
                </div>
        </div>
        <div class="inner menu-desc">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kari1.png" alt="">
                <div class="lunch-message">
                    <h4>女性に人気！海鮮と彩り野菜の贅沢</h4>
                    <h3 class="line">海鮮盛合せ　　　　　　　　2,948円</h3>
                    <p>エビ・ホタテ・イカ・にんじん・かぼちゃ</p>
                </div>
        </div>
        <div class="contact">
            <img src="<?php echo get_template_directory_uri(); ?>/img/tel.png" id="contact" data-basepath="<?php echo get_template_directory_uri(); ?>/img/" alt="">
        </div>
    </div>
    <div class="menu">
        <h3 class="subtitle">焼肉メニュー</h3>
        <div class="inner  menu-desc">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kari1.png" alt="">
                <div class="lunch-message">
                    <h4>肉1.5倍増し</h4>
                    <h3 class="line">カルビ・ロースランチ 1.5倍</h3>
                    <!-- <p>2,580円</p> -->
                </div>
        </div>
        <div class="inner menu-desc">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kari1.png" alt="">
                <div class="lunch-message">
                    <h4>肉1.5倍増し</h4>
                    <h3 class="line">カルビ・ロースランチ 1.5倍</h3>
                    <!-- <p>2,580円</p> -->
                </div>
        </div>
        <div class="inner menu-desc">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kari1.png" alt="">
                <div class="lunch-message">
                    <h4>肉1.5倍増し</h4>
                    <h3 class="line">カルビ・ロースランチ 1.5倍</h3>
                    <!-- <p>2,580円</p> -->
                </div>
        </div>
        <div class="inner menu-desc">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kari1.png" alt="">
                <div class="lunch-message">
                    <h4>肉1.5倍増し</h4>
                    <h3 class="line">カルビ・ロースランチ 1.5倍</h3>
                    <!-- <p>2,580円</p> -->
                </div>
        </div>
    </div>
<!-- 噛むほど程よい弾力のホルモンコンテンツ -->
    <div class="menu">
        <h3 class="subtitle">噛むほど程よい弾力のホルモン</h3>
        <ul class="horumon-list">
            <li class="horumon-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/kari1.png" alt="">
                <p>カルビ・ロース・ハラミランチ</p>
            </li>
            <li class="horumon-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/kari1.png" alt="">
                <p>カルビ・ロース・ハラミランチ</p>
            </li>
            <li class="horumon-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/kari1.png" alt="">
                <p>カルビ・ロース・ハラミランチ</p>
            </li>
        </ul>
        <p>※味噌ダレ・塩味よりお選びいただけます</p>
    </div>
<!-- 選べる〆メニューコンテンツ -->
    <div class="menu">
        <h3 class="subtitle">選べる〆メニュー</h3>
            <div class="sime-desc">
                <div class="left">
                    <div class="mainvisual">
                        <ul>
                            <li class="sime-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/sime1.png" class="main-image" id="mainLeft">
                                <p>メニュー名メニュー名メニュー名メニュー名</p>
                                <p>2,580円</p>
                            </li>
                        </ul>
                    </div>
                    <div class="sime">
                        <div class="simebtn">
                            <ul>
                                <li class="sime-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/sime1.png"  class="thumb-left js-thumb"
                                data-image="<?php echo get_template_directory_uri(); ?>/img/sime1.png" data-target="#mainLeft">
                                <p>メニュー名メニュー名メニュー名メニュー名</p>
                                <p>2,580円</p>
                                </li>
                            </ul>
                        </div>
                        <div class="simebtn">
                            <ul>
                                <li class="sime-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/sime2.png"  class="thumb-left js-thumb"
                                    data-image="<?php echo get_template_directory_uri(); ?>/img/sime2.png" data-target="#mainLeft">
                                    <p>メニュー名メニュー名メニュー名メニュー名</p>
                                    <p>2,580円</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="mainvisual">
                        <ul>
                            <li class="sime-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/sime3.png" class="main-image" id="mainRight">
                                <p>メニュー名メニュー名メニュー名メニュー名</p>
                                <p>2,580円</p>
                            </li>
                        </ul>
                    </div>
                    <div class="sime">
                        <div class="simebtn">
                            <ul>
                                <li class="sime-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/sime4.png" class="thumb-right js-thumb"
                                    data-image="<?php echo get_template_directory_uri(); ?>/img/sime3.png" data-target="#mainRight">
                                    <p>メニュー名メニュー名メニュー名メニュー名</p>
                                    <p>2,580円</p>
                                </li>
                            </ul>
                        </div>
                        <div class="simebtn">
                            <ul>
                                <li class="sime-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/sime4.png" class="thumb-right js-thumb"
                                    data-image="<?php echo get_template_directory_uri(); ?>/img/sime4.png" data-target="#mainRight">
                                    <p>メニュー名メニュー名メニュー名メニュー名</p>
                                    <p>2,580円</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <!-- 157行目〜163行目は削除してもOKかな -->
        <!-- <div class="leftvisual">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kari1.png" alt="" id="left">
        </div>
        <div class="rightvisual">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kari1.png" alt="" id="right">
        </div> -->
        <!-- モーダルウィンドウ　選べる〆メニュー start-->
        <div class="modalbtn">
            <button type="button" class="open-modal js-openModal" data-target="#simeModal">その他の焼肉メニュー</button>
            <!-- <button type="button" id="openModal" class="open-modal">その他の焼肉メニュー</button> -->
        </div>
        <!-- モーダルウィンドウのコンテンツ内容 選べる〆メニュー -->
        <div id="simeModal" class="modal-wrapper" role="dialog" aria-labelledby="modalTitle" aria-describedby="modalDescription"
        aria-modal="true" aria-hidden="true">
        <div class="modal-content">
            <div class="modal-item">
                <dl>
                <dt>石焼焼肉ビビンバ</dt>
                <dd>x,xxx円</dd>
                <dt>ビビンバ</dt>
                <dd>x,xxx円</dd>
                <dt>冷麺</dt>
                <dd>x,xxx円</dd>
                <dt>テグクッパ</dt>
                <dd>x,xxx円</dd>
                <dt>テグタンうどん</dt>
                <dd>x,xxx円</dd>
                <dt>卵スープ</dt>
                <dd>x,xxx円</dd>
                <dt>テグタンスープ</dt>
                <dd>x,xxx円</dd>
                </dl>
            </div>
            <div class="modal-item">
                <dl>
                <dt>特製チゲ</dt>
                <dd>x,xxx円</dd>
                <dt>ビビン麺</dt>
                <dd>x,xxx円</dd>
                <dt>カルビクッパ</dt>
                <dd>x,xxx円</dd>
                <dt>コムタンクッパ</dt>
                <dd>x,xxx円</dd>
                <dt>カルビうどん</dt>
                <dd>x,xxx円</dd>
                <dt>カルビスープ</dt>
                <dd>x,xxx円</dd>
                <dt>コムタンスープ</dt>
                <dd>x,xxx円</dd>
                </dl>
            </div>
        </div>
        <div class="modalbtn">
            <button type="button" class="close-btn js-closeModal" tabindex="0" aria-label="閉じる" data-target="#simeModal">閉じる</button>
        </div>
        <!-- モーダルウィンドウ　選べる〆メニュー end-->
    </div>
<!-- 逸品料理コンテンツ-->
    <div class="lunch-wrapper menu">
        <h3 class="subtitle">逸品料理</h3>
        <!-- 上部：逸品料理のメイン画像を表示 Start-->
        <div class="lunch-display">
                <div class="lunch-desc active section-fade" data-id="1">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ippin1.png" alt="">
                </div>
            <div class="lunch-desc section-fade" data-id="2">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ippin2.png" alt="">
            </div>
            <div class="lunch-desc section-fade" data-id="3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ippin3.png" alt="">
            </div>
            <div class="lunch-desc section-fade" data-id="4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ippin4.png" alt="">
            </div>
        </div>
        <!-- 上部：逸品料理のメイン表示 Finish-->
        <!-- 下部：サムネイル（タブボタン） -->
        <div class="lunch-tabs">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ippin1.png" alt="ランチ1" data-id="1">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ippin2.png" alt="ランチ2" data-id="2">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ippin3.png" alt="ランチ3" data-id="3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ippin4.png" alt="ランチ4" data-id="4">
        </div>
        <!-- 下部：サムネイル（タブボタン） -->
        <!-- モーダルウィンドウ　逸品料理 start-->
        <div class="modalbtn">
        <button type="button" class="open-modal js-openModal" data-target="#ippinModal">その他の逸品料理</button>
        <!-- <button type="button" id="openModal" class="open-modal">その他の逸品料理</button> -->
        </div>
        <!-- モーダルウィンドウの内容 -->
        <div id="ippinModal" class="modal-wrapper" role="dialog" aria-labelledby="modalTitle" aria-describedby="modalDescription" aria-modal="true" aria-hidden="true">
            <h2 class="section-title">逸品料理</h2>
            <div class="modal-content">
                <div class="modal-item">
                    <dl>
                    <dt>自家製豚足</dt>
                    <dd>x,xxx円</dd>
                    <dt>牛すじ味噌煮込み</dt>
                    <dd>x,xxx円</dd>
                    <dt>さくらユッケ</dt>
                    <dd>x,xxx円</dd>
                    <dt>上ミノ刺</dt>
                    <dd>x,xxx円</dd>
                    <dt>センマイ刺</dt>
                    <dd>x,xxx円</dd>
                    <dt>韓国風冷奴</dt>
                    <dd>x,xxx円</dd>
                    <dt>香林サラダ</dt>
                    <dd>x,xxx円</dd>
                    </dl>
                </div>
                <div class="modal-item">
                    <dl>
                    <dt>特製ニラチヂミ</dt>
                    <dd>x,xxx円</dd>
                    <dt>自家製キムチ</dt>
                    <dd>x,xxx円</dd>
                    <dt>馬刺し</dt>
                    <dd>x,xxx円</dd>
                    <dt>イカ刺</dt>
                    <dd>x,xxx円</dd>
                    <dt>ハチノス刺</dt>
                    <dd>x,xxx円</dd>
                    <dt>カクテキ</dt>
                    <dd>x,xxx円</dd>
                    <dt>海鮮チョレギサラダ</dt>
                    <dd>x,xxx円</dd>
                    </dl>
                </div>
            </div>
            <div class="modalbtn">
                <button type="button" class="close-btn js-closeModal" tabindex="0" aria-label="閉じる" data-target="#ippinModal">閉じる</button>
            </div>
    </div>
    <!-- モーダルウィンドウ　逸品料理 end-->
    </div>
</section>


<!-- 店舗情報 -->
<?php get_template_part( 'access' ); ?>

<!-- // フッタを読み込む -->
<?php get_footer(); ?>