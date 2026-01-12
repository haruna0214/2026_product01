  // const hamburger = document.getElementById("hamburger-toggle");
  // const nav = document.getElementById("nav");
  // // const navItems = nav.querySelectorAll(".nav-item"); // メニュー内の各項目
  // const navItems = nav ? nav.querySelectorAll(".nav-item") : []; // メニュー内の各項目
  // // ハンバーガーボタンがクリックされたときの処理を定義
  // hamburger.addEventListener("click", () => {
  //   // ボタンの aria-expanded 属性を取得し、メニューが開いているかどうかを判定
  //   const expanded = hamburger.getAttribute("aria-expanded") === "true";
  //   // aria-expanded を現在の状態と逆に変更します（開く／閉じるの切り替え）
  //   hamburger.setAttribute("aria-expanded", !expanded);
  //   // メニューの aria-hidden 属性も、同様に現在の状態に応じて変更
  //   nav.setAttribute("aria-hidden", expanded);
  //   // .nav-active クラスを付けたり外したりする
  // //   nav.classList.toggle("nav-active");
  //   // 開閉と同時に .is-active を付け外し
  //   hamburger.classList.toggle("is-active");
  
  //   if (!expanded) {
  //     // 開くとき
  //     nav.classList.add("nav-active");
  //     nav.classList.remove("nav-closing");
  //   } else {
  //     // 閉じるとき
  //     nav.classList.add("nav-closing");
  //     nav.classList.remove("nav-active");
  
  //     // 項目が順にアニメーションで消える時間（delay + duration）
  //     const lastItemIndex = navItems.length - 1;
  //     const delayPerItem = 100; // ms
  //     const duration = 400; // CSS transition-durationと一致
  
  //     const totalCloseTime = delayPerItem * lastItemIndex + duration;
  
  //     setTimeout(() => {
  //       nav.classList.remove("nav-closing");
  //     }, totalCloseTime);
  //   }
  // });

  const hamburger = document.getElementById("hamburger-toggle");
  const nav = document.getElementById("nav");
  const navItems = nav ? nav.querySelectorAll(".nav-item") : [];
  
  // フォーカス可能な要素を取得（リンク、ボタンなど）
  const focusableElements = nav ? nav.querySelectorAll('a, button, input, select, textarea, [tabindex]:not([tabindex="-1"])') : [];
  
  hamburger.addEventListener("click", () => {
    const expanded = hamburger.getAttribute("aria-expanded") === "true";
    hamburger.setAttribute("aria-expanded", !expanded);
    nav.setAttribute("aria-hidden", expanded);
    hamburger.classList.toggle("is-active");
  
    if (!expanded) {
      // 開くとき
      nav.classList.add("nav-active");
      nav.classList.remove("nav-closing");
      
      // フォーカス可能にする
      focusableElements.forEach(el => {
        el.removeAttribute("tabindex");
      });
      
    } else {
      // 閉じるとき
      nav.classList.add("nav-closing");
      nav.classList.remove("nav-active");
      
      // フォーカスを無効化
      focusableElements.forEach(el => {
        el.setAttribute("tabindex", "-1");
      });
  
      const lastItemIndex = navItems.length - 1;
      const delayPerItem = 100;
      const duration = 400;
      const totalCloseTime = delayPerItem * lastItemIndex + duration;
  
      setTimeout(() => {
        nav.classList.remove("nav-closing");
      }, totalCloseTime);
    }
  });
  
  // 初期状態: メニューが閉じている場合はフォーカスを無効化
  if (hamburger.getAttribute("aria-expanded") !== "true") {
    focusableElements.forEach(el => {
      el.setAttribute("tabindex", "-1");
    });
  }


// こだわり > contact(TEL)バナーの画像切り替え（マウスを乗せて話した時に画像を切替）
jQuery(function($) {
  $('#contact').on('mouseenter', function() {
      var basePath = $(this).data('basepath');
      $(this).attr('src', basePath + 'tel_hover.png');
  });

  $('#contact').on('mouseleave', function() {
      var basePath = $(this).data('basepath');
      $(this).attr('src', basePath + 'tel.png');
  });
});

// スクロールしたときに下線を引くアニメーション
// こだわり > h3の箇所
jQuery(function($) {
  var $watch = $('#concept');                 
  var $line  = $watch.find('.line-animation');

  if (!$watch.length || !$line.length) return;

  function update() {
    var elemTop    = $watch.offset().top;
    var elemBottom = elemTop + $watch.outerHeight();
    var scrollTop  = $(window).scrollTop();
    var winHeight  = $(window).height();

    // セクションが少しでも画面内に見えたら show
    if (elemBottom > scrollTop && elemTop < scrollTop + winHeight) {
      $line.addClass('show');
    } else {
      $line.removeClass('show'); // 完全に画面外に出たら消す
    }
  }

  $(window).on('scroll resize', update);
  update(); // 読み込み時の初期判定
});


// Topページのお品書きランチ、お品書き詳細ページの逸品料理(PC表示)4秒ごとに自動で切り替わるスライドショー(ループ)
jQuery(function($) {
  let currentIndex = 0;
  const $descs = $(".lunch-desc");
  const $tabs = $(".lunch-tabs img"); //加えた（Claude）
  const total = $descs.length;
  let autoSlideInterval; //加えた（Claude）

  // 初期表示
  $descs.hide().eq(0).css('display','flex');
  $tabs.eq(0).addClass('active'); // 最初のサムネイルにactiveクラスを追加 加えた（Claude）
  //コメントアウト 開始
  setInterval(function() {
    // 現在のスライドをフェードアウト
    $descs.eq(currentIndex).fadeOut(800, function() {
      // 次のスライドインデックス
      currentIndex = (currentIndex + 1) % total;
      // 次のスライドを表示する前に display:flex に戻してフェードイン
      $descs.eq(currentIndex).css('display','flex').hide().fadeIn(800);
    });
  }, 4000);// 4秒ごとに切り替え
  //コメントアウト 終了
  // スライドを切り替える関数
});
// jQuery(function($) {
//   let currentIndex = 0;
//   const $descs = $(".lunch-desc");
//   const $tabs = $(".lunch-tabs img");
//   const total = $descs.length;
//   let autoSlideInterval;
//   let isAnimating = false; // アニメーション中かどうかのフラグ

//   // 初期表示
//   $descs.hide().eq(0).css('display','flex').show();
//   $tabs.eq(0).addClass('active');

//   // スライドを切り替える関数
//   function changeSlide(newIndex) {
//     console.log('切り替え: ' + currentIndex + ' → ' + newIndex);
    
//     if (newIndex === currentIndex || isAnimating) return;
    
//     isAnimating = true; // アニメーション開始

//     // サムネイルのactiveクラスを切り替え
//     $tabs.removeClass('active').eq(newIndex).addClass('active');

//     // 現在のスライドをフェードアウト
//     $descs.eq(currentIndex).fadeOut(400, function() {
//       // フェードアウト完了後に次のスライドをフェードイン
//       currentIndex = newIndex;
//       $descs.eq(currentIndex).css('display','flex').hide().fadeIn(400, function() {
//         isAnimating = false; // アニメーション終了
//       });
//     });
//   }

//   // 自動スライド開始
//   function startAutoSlide() {
//     autoSlideInterval = setInterval(function() {
//       const nextIndex = (currentIndex + 1) % total;
//       changeSlide(nextIndex);
//     }, 4000);
//   }

//   // 自動スライド停止
//   function stopAutoSlide() {
//     if (autoSlideInterval) {
//       clearInterval(autoSlideInterval);
//     }
//   }

//   // サムネイルクリック時の処理
//   $tabs.on('click', function() {
//     console.log('クリックされました');
    
//     const clickedId = $(this).data('id');
//     console.log('data-id: ' + clickedId);
    
//     const clickedIndex = clickedId - 1;
//     console.log('インデックス: ' + clickedIndex);

//     // 自動スライドを一旦停止
//     stopAutoSlide();

//     // クリックされたスライドに切り替え
//     changeSlide(clickedIndex);

//     // 自動スライドを再開
//     startAutoSlide();
//   });

//   // 初回の自動スライド開始
//   startAutoSlide();
// });

//Topページのお品書きランチ、お品書き詳細ページの逸品料理(スマホ表示)
jQuery(function($) {
  if ($(window).width() <= 768) {
    $(window).on("scroll", function() {
      $(".lunch-desc").each(function() {
        var $this = $(this);

        // まだ .show が付いていない要素だけ処理
        if (!$this.hasClass("show")) {
          var elemTop = $this.offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();

          if (scroll > elemTop - windowHeight * 2 / 3) {
            // setTimeout(function() {
              $this.addClass("show");
            // }, 300); // 遅延時間も自由に変更可能
          }
        }
      });
    });
  }
});

jQuery(function($) {
  // ・menuページ > モーダルウィンドウ：その他の逸品料理
  // モーダル要素を取得
  const modal = document.getElementById("myModal");
  // const modal = document.getElementsByClassName(".simeModal , .ippinModal");
  
  const openBtn = $('.js-openModal');
  // モーダルを開くボタンを取得
  // const open = document.getElementById("openModal");
  // モーダルを閉じるアイコン（×）を取得
  // const close = document.getElementById("closeModal");
  
  // // ボタンがクリックされた時にモーダルを表示
  // open.onclick = function() {
  //   modal.style.display = "block"; // モーダルのdisplayスタイルを"block"にして表示
  // }
  
  // // 閉じるボタンがクリックされた時にモーダルを非表示
  // close.onclick = function() {
  //   modal.style.display = "none"; // モーダルのdisplayスタイルを"none"にして非表示
  // }
  
  // // モーダルの外側がクリックされた時にモーダルを非表示
  // window.onclick = function(event) {
  // // クリックされた箇所がモーダル自体（外側）であれば
  //   if (event.target == modal) {
  //     modal.style.display = "none"; // モーダルのdisplayスタイルを"none"にして非表示
  //   }
  // }

  // // ★ 変更点1: IDセレクタではなく、クラスセレクタで全てのボタンを取得し、jQueryのイベントを設定
  // // ボタンがクリックされた時にモーダルを表示
  // $('.js-openModal').on('click', function() { // <- ここが変更されました
  //   if (modal) { // エラー防止のため null チェック
  //     modal.style.display = "block"; 
  //   }
  // });
  
  // // ★ 変更点2: 閉じる処理は、要素が存在する場合のみ実行するように安全性を高める
  // if (close) {
  //   close.onclick = function() {
  //     if (modal) {
  //       modal.style.display = "none";
  //     }
  //   }
  // }
  
  // // モーダルの外側がクリックされた時にモーダルを非表示 (変更なし)
  // window.onclick = function(event) {
  //   if (modal && event.target === modal) {
  //     modal.style.display = "none";
  //   }
  // }
  // モーダルを開く処理 (class="js-openModal" を使用)
  $('.js-openModal').on('click', function() {
    if (modal) {
      // jQueryを使ってDOM操作を行う
      $(modal).css('display', 'block'); 
    }
  });
  
  // ★ 変更点1: モーダルを閉じる処理 (class="js-closeModal" を使用)
  // document.getElementById("closeModal") の代わりにクラスセレクタを使用
  $('.js-closeModal').on('click', function() {
    $('#myModal')
    .attr('aria-hidden', 'true')
    .hide();
  });
  
  // ★ 変更点2: 閉じるボタンの取得処理は不要になったため削除
  // const close = document.getElementById("closeModal"); // 削除
  
  // モーダルの外側がクリックされた時にモーダルを非表示 (変更なし)
  window.onclick = function(event) {
    // クリックされた要素が modal 要素（外側）と一致するかをチェック
    // jQueryオブジェクトとDOM要素の比較が混在しないよう、$()で統一するか、DOM要素で比較を続ける
    if (modal && event.target === modal) {
      modal.style.display = "none";
    }
  }
});

// メニューページ > 選べる〆メニュー
// {
//   const simeleft = document.getElementById('sime-left');
//   const simeright = document.getElementById('sime-right');
//   const thumbleft = document.querySelectorAll('.thumb-left');
//   const thumbright = document.querySelectorAll('.thumb-right');

//   thumbleft.forEach(function(thumnail){
//      // クリックしたサムネイルのソース属性を取得して、変数に代入する
//     thumnail.addEventListener('click',function(){
//       let boxes = thumnail.getAttribute('src');
//       simeleft.src = boxes;
//     })
//   });

//   thumbright.forEach(function(thumnail){
//      // クリックしたサムネイルのソース属性を取得して、変数に代入する
//     thumnail.addEventListener('click',function(){
//       let boxes = thumnail.getAttribute('src');
//       simeright.src = boxes;
//     })
//   });
// }


// $(document).ready(function() {
//   $('.simebtn').on('click', function() {
//             // 全てのボタンからactiveクラスを削除
//             $('.simebtn').removeClass('active');
            
//             // クリックされたボタンにactiveクラスを追加
//             $(this).addClass('active');
            
//             // data-image属性から画像URLを取得
//             var imageUrl = $(this).data('image');
            
//             // メイン画像を切り替え（フェード効果なしで即座に変更）
//     $('.mainvisual').attr('src', imageUrl);
//   });
// });


// お品書きページ > 選べる〆メニュー（ボタンを押すとメイン画像が切り替わる）
jQuery(function($){
  // サムネイルクリック共通処理
  $('.js-thumb').on('click', function(){
    const newImg = $(this).data('image');   // 変更後の画像パス
    const target = $(this).data('target');  // 左か右か（#mainLeft / #mainRight）

    // 該当の大画像を差し替え
    $(target).attr('src', newImg);

    // active クラス切り替え（同じ target を持つサムネだけ）
    $('.js-thumb[data-target="' + target + '"]').removeClass('active');
    $(this).addClass('active');

  });

});
