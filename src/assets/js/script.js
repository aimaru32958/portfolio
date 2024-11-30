
jQuery(function ($) {


  // jQuery(function ($) {
  //     alert('jQuery is ready.');
  // });



/*=====================================
wow 導入
=====================================*/
  
    new WOW().init();

/*=====================================
drawer
=====================================*/

  jQuery('.l-drawer').click(function(e) {
    e.preventDefault()

    jQuery('.l-drawer').toggleClass('is-active');
    jQuery('.l-header__menu').toggleClass('is-active');
    jQuery('#js-to-top').toggleClass('is-active');

    return false;
  });


/*=====================================
header メニュー サブメニュー表示
=====================================*/
jQuery(function ($) {
  let timeoutId = {};
  jQuery('.l-header__nav > li').hover(function() {
    const key = $(this).index(); // 各要素のインデックスをキーとして使用
    clearTimeout(timeoutId[key]); // 前回の遅延処理をキャンセル
    jQuery(this).find('.sub-menu').slideDown();
  }, 
  function () {
    // マウスが離れたら遅延してslideUp
    const key = $(this).index(); // 各要素のインデックスをキーとして使用
    timeoutId[key] = setTimeout(() => {
      jQuery(this).find('.sub-menu').stop().slideUp();
    }, 1000);
  });
});




/*=====================================
form 必須項目 入力確認(ContactForm7仕様)
=====================================*/

  let $submit = jQuery('#js-submit')
  jQuery('#js-form input,#js-form textarea').change(function(){
    if(
      jQuery('#js-form input[name="your-name"]').val() !== "" &&
      jQuery('#js-form input[name="your-email"]').val() !== "" &&
      jQuery('#js-form textarea[name="your-message"]').val() !== "" &&
      document.querySelectorAll('input[name="checkbox[]"]:checked').length !== 0  &&
      document.querySelectorAll('input[name="checkbox-privacy[]"]:checked').length !== 0
      ) {
      //全て入力されたとき
        $submit.prop('disabled',false)
        $submit.addClass('is-active');
      } else {
      //入力が不足しているとき
        $submit.prop('disabled',true)
        $submit.removeClass('is-active');
      }
  });


/*=====================================
ページ内移動
=====================================*/
  jQuery(function ($) {
    jQuery('a[href^="#"]').click(function () {
      let id = jQuery(this).attr('href');
      let header = jQuery('.header').innerHeight();
      let position = 0;
      if(id != '#'){
        position = jQuery(id).offset().top - header;
      }
      jQuery('html, body').animate({
        'scrollTop': position
      }, 500);

      return false;
    });
  });


/*=====================================
to-topボタンの表示
=====================================*/
  jQuery(function ($) {
    jQuery(window).scroll(function(){
      if(jQuery(this).scrollTop() > 80){
        jQuery("#js-to-top").fadeIn(300);
      } else {
        jQuery("#js-to-top").fadeOut(300);
      }
    });
  });

/*=====================================
アンカー付ページ遷移の場合にheader以下で表示
=====================================*/

  // ページ外のアンカーへ遷移
  jQuery(function ($) {
    // URLのアンカー（#以降の部分）を取得
      let urlHash = location.hash;
      // headerの高さを取得
      let header = jQuery('.header').innerHeight();
      // URLのアンカーが存在する時
      if(urlHash) {
        // リンク先をURLのアンカーに指定
        let target = jQuery(urlHash);
        // リンク先の位置から固定ヘッダー分の高さを引く（重なり防止）
        let position = target.offset().top - header;
        // リンク先からヘッダー分の高さを引いた位置に遷移
        jQuery('body,html').stop().scrollTop(position);
      } 
  });

  // ページ内のアンカーへの遷移
  jQuery('a[href*="/#"]').click(function () {
    // headerの高さを取得
    let header = $('.header').innerHeight();
    // href取得
    let href = jQuery(this).attr('href');
    // hrefの#以降を削除
    let url = href.split('#', 1);
    // URLのアンカー（#以降の部分）を取得
    let urlHash = href.substr(href.indexOf('#'));
    // リンク先の位置から固定ヘッダー分の高さを引く（重なり防止）
    let position = jQuery(urlHash).offset().top - header;
    
    // 遷移先が現在のページと同ページか条件分岐
    if(document.URL.match(url)) {
        // リンク先からヘッダー分の高さを引いた位置に遷移
        jQuery('html, body').animate({
          'scrollTop': position
        }, 500);
    } 
  });



/*=====================================
見積り service
=====================================*/

  /*=====================================
  数量計算
  =====================================*/
  // 小計
  let totals = [];

  jQuery('tr').change(function () {
    // 選択された数量
    let count = jQuery(this).find('select').val();
    // 希望金額
    let price = parseFloat(jQuery(this).find('.js-price').text());
    // 計算結果
    let total = count * price;
    // 結果を表示するセルにセット
    let toralTd = jQuery(this).find('.js-total');
    if(total == 0) {
      toralTd.text('');
    } else {
      toralTd.text(total.toLocaleString() + '円');
    }
  
  
  /*=====================================
  合計計算
  =====================================*/
    // 小計表示
    // 計算結果を配列に追加
    let index = jQuery(this).index('.js-tr'); // 現在の行のインデックス
    totals[index] = total;
    // 合算
    let subTotal = totals.reduce(function(sum, element){
    return sum + element;
    }, 0);
    // 結果を表示するセルにセット
    if(subTotal == 0) {
      jQuery('#subTotal').text('');
    } else {
      jQuery('#subTotal').text(subTotal.toLocaleString() + '円');
    }

    // 消費税
    let tax = subTotal * 0.1
    if(subTotal == 0) {
      jQuery('#tax').text('');
    } else {
      jQuery('#tax').text(tax.toLocaleString() + '円');
    }

    // 合計
    let mainTotal = subTotal * 1.1
    if(subTotal == 0) {
      jQuery('#mainTotal').text('');
    } else {
      jQuery('#mainTotal').text(mainTotal.toLocaleString() + '円');
    }
    
  });


  /*=====================================
  NEWS 一覧表示
  =====================================*/

  jQuery('.p-service-news__btn').click(function(e) {
    e.preventDefault()

    jQuery('.p-service-news__itemWrap:nth-child(n+4)').slideToggle();
    jQuery(this).toggleClass('is-active');
    if(jQuery(this).hasClass('is-active')) {
      jQuery(this).find('button').text('お知らせ一覧を閉じる');
    } else {
      jQuery(this).find('button').text('お知らせ一覧を表示する');
    };
 
    return false;
  });


  /*=====================================
  skill itme   hover
  =====================================*/


  let skillTimer = {};
  jQuery('.p-frontPage-service__skiiItem').hover(function() {

    const key = jQuery(this).index();
    clearTimeout(skillTimer[key]);
    jQuery(this).find('.p-frontPage-service__skillImg').css('transform','rotateY(360deg)')
    if(jQuery(this).hasClass('is-honne')){
      // 本音の扉開門中
      jQuery(this).find('path').css('fill','#ffff00')
      jQuery(this).css('color','#ffff00')
    } else {
      // 通常時（閉門中）
      jQuery(this).find('path').css('fill','#ED1A3D')
      jQuery(this).css('color','#ED1A3D')
    }

  }, 
  function () {
    const key = jQuery(this).index();
    skillTimer[key] = setTimeout(() => {
      jQuery(this).find('.p-frontPage-service__skillImg').css('transform','rotateY(0deg)')
      if(jQuery(this).hasClass('is-honne')){
        // 本音の扉開門中
        jQuery(this).find('path').css('fill','#FFF')
        jQuery(this).css('color','#FFF')
      } else {
        // 通常時（閉門中）
        jQuery(this).find('path').css('fill','#1E3050')
        jQuery(this).css('color','#1E3050')
      }
    }, 1000);



  });


        /*=====================================
        改良中
        =====================================*/

        // let skillTimer = {};
        // jQuery('.p-frontPage-service__skiiItem').hover(function() {
          
        //   // クリックしたときは動くな
        //   if(jQuery(this).find('.p-frontPage-service__skillImg').hasClass('is-active')  == false) {
        //     // console.log('トゥルー');

        //     const key = jQuery(this).index();
        //     clearTimeout(skillTimer[key]);
        //     jQuery(this).find('.p-frontPage-service__skillImg').css('transform','rotateY(360deg)')
        //     if(jQuery(this).hasClass('is-honne')){
        //       // 本音の扉開門中
        //       jQuery(this).find('path').css('fill','#ffff00');
        //       jQuery(this).css('color','#ffff00');
        //     } else {
        //       // 通常時（閉門中）
        //       jQuery(this).find('path').css('fill','#ED1A3D');
        //       jQuery(this).css('color','#ED1A3D');
        //     }

        //   }

        // }, 
        // function () {

        //   // クリックしたときは動くな
        //   if(jQuery(this).find('.p-frontPage-service__skillImg').hasClass('is-active')  == false) {

        //     const key = jQuery(this).index();
        //     skillTimer[key] = setTimeout(() => {
        //       jQuery(this).find('.p-frontPage-service__skillImg').css('transform','rotateY(0deg)')
        //       if(jQuery(this).hasClass('is-honne')){
        //         // 本音の扉開門中
        //         jQuery(this).find('path').css('fill','#FFF');
        //         jQuery(this).css('color','#FFF');
        //       } else {
        //         // 通常時（閉門中）
        //         jQuery(this).find('path').css('fill','#1E3050');
        //         jQuery(this).css('color','#1E3050');
        //       }
        //     }, 1000);

        //   }

        // });


      

  
  /*=====================================
  skill クリックアニメーション
  =====================================*/


  jQuery('.p-frontPage-service__skiiItem').click(function() {
    jQuery(this).removeClass('hover');
    jQuery(this).find('.p-frontPage-service__skillImg').addClass('is-active');
    
    const key = jQuery(this).index();
    clearTimeout(skillTimer[key]);
  });
  

  /*=====================================
  改良中↓
  =====================================*/
//   jQuery('.p-frontPage-service__skiiItem').click(function() {
//     jQuery(this).find('.p-frontPage-service__skillImg').addClass('is-active');

//     if(jQuery(this).hasClass('is-honne')){
//       // 本音の扉開門中
//       jQuery(this).find('path').css('fill','#FFF');
//       jQuery(this).css('color','#FFF');
//     } else {
//       // 通常時（閉門中）
//       jQuery(this).find('path').css('fill','#1E3050');
//       jQuery(this).css('color','#1E3050');
//     }
// });



  /*=====================================
  本音の扉 open
  =====================================*/

  // // テスト用
  // jQuery('#js-honne').click(function() {
  //   jQuery(this).toggleClass('is-honne');
  //   jQuery('.u-change').toggleClass('is-honne');
  //   jQuery('.u-front').toggleClass('is-honne');
  //   jQuery('.u-back').toggleClass('is-honne');
 
  // });
  // jQuery('.l-footer__doorItem').click(function() {

  //   jQuery(this).toggleClass('is-honne');
  //   jQuery('.u-change').toggleClass('is-honne');
  //   jQuery('.u-front').toggleClass('is-honne');
  //   jQuery('.u-back').toggleClass('is-honne');
 
  // });

  

  // 本音の扉クリック
  jQuery('#js-honne').click(function() {

    // ダイアログの表示
    jQuery('#js-dialog').fadeIn();
    // どの状態でも暗転を解除
    jQuery('#js-dialog').removeClass('is-active');
    
  });

  // YES
  jQuery('#yes').click(function() {
    if(jQuery('#js-honne').hasClass('is-honne')) {
      // 本音状態の時

      // 通常仕様に変換
      // ページリロード
      location.reload();
      
    } else {
      // 通常状態の時

      // 選択後背景を暗転
      jQuery('#js-dialog').addClass('is-active');
      // topに移動
      jQuery('html, body').scrollTop(0);
      // 本音仕様に変換
      jQuery('#js-honne').addClass('is-honne');
      jQuery('.u-change').addClass('is-honne');
      jQuery('.u-front').addClass('is-honne');
      jQuery('.u-back').addClass('is-honne');
      // ダイアログ非表示
      setTimeout(() => {
        jQuery('#js-dialog').fadeOut();
      }, 2000);
      // ダイアログテキスト変更
      setTimeout(() => {
        jQuery('#js-text').html("<span>【 本音の扉 】</span>を閉じますか？");
      }, 2500);

      // skill hoverアニメーションのリセット
      jQuery('.p-frontPage-service__skiiItem').find('path').css('fill','#FFF')
      jQuery('.p-frontPage-service__skiiItem').css('color','#FFF')

    }
  });

  // NO
  jQuery('#no').click(function() {
    jQuery('#js-dialog').fadeOut();
  });

  // 開門中で閉門
  jQuery('.l-footer__doorItem').click(function() {
    // ダイアログの表示
    jQuery('#js-dialog').fadeIn();
    // どの状態でも暗転を解除
    jQuery('#js-dialog').removeClass('is-active');
  });




/*=====================================
ボタン hoverアニメーション
=====================================*/

/*=====================================
鳥 bird
=====================================*/

// 画像用変数
let bird = jQuery('#js-bird');
// 画像切替タイマー
let birdTimer;
let birdTimer2;
let birdTimer3;

// 画像切替用関数(再スタート用)
function changeImage(imageUrl) {
    bird.css('background-image', 'url(' + imageUrl + ')');
}

jQuery('.c-btn--brown a').hover(function() {
  // 起動中タイマーリセット
  clearTimeout(birdTimer);
  clearTimeout(birdTimer2);
  clearTimeout(birdTimer3);
  // start画像開始
  bird.fadeIn();
  // hover時の時間取得(gif画像をhoverする度に最初からはじめるため)
  let timestamp = new Date().getTime();
  // 関数で'background-image'書換(gif画像を最初から始めるために、「+ '?' + timestamp」で内容を変化)
  changeImage('/wp-content/themes/Aimaru%27s%20Portfolio/assets/img/top/bird1.gif' + '?' + timestamp);
  // hover画像に切替
  birdTimer = setTimeout(() => {
    changeImage('/wp-content/themes/Aimaru%27s%20Portfolio/assets/img/top/bird2.gif' + '?' + timestamp);
  }, 2000);
}, 
function () {
  // hover解除時の時間取得
  let timestamp = new Date().getTime();
  // end画像に切替
  birdTimer2 = setTimeout(() => {
    changeImage('/wp-content/themes/Aimaru%27s%20Portfolio/assets/img/top/bird3.gif' + '?' + timestamp);
  }, 2000);
  // 終了後画像の非表示
  birdTimer3 = setTimeout(() => {
    bird.fadeOut();
  }, 4000);

});



/*=====================================
蛇 snake
=====================================*/

// 画像用変数
let snake = jQuery('#js-snake');
// 画像切替タイマー
let snakeTimer;
let snakeTimer2;
let snakeTimer3;

// 画像切替用関数(再スタート用)
function changeImage2(imageUrl) {
    snake.css('background-image', 'url(' + imageUrl + ')');
}

jQuery('.c-btn--navy a').hover(function() {
  // 起動中タイマーリセット
  clearTimeout(snakeTimer);
  clearTimeout(snakeTimer2);
  clearTimeout(snakeTimer3);
  // start画像開始
  snake.fadeIn();
  // hover時の時間取得(gif画像をhoverする度に最初からはじめるため)
  let timestamp = new Date().getTime();
  // 関数で'background-image'書換(gif画像を最初から始めるために、「+ '?' + timestamp」で内容を変化)
  changeImage2('/wp-content/themes/Aimaru%27s%20Portfolio/assets/img/top/snake1.gif' + '?' + timestamp);
  // hover画像に切替
  snakeTimer = setTimeout(() => {
    changeImage2('/wp-content/themes/Aimaru%27s%20Portfolio/assets/img/top/snake2.gif');
  }, 2000);
}, 
function () {
  // hover解除時の時間取得
  let timestamp = new Date().getTime();
  // end画像に切替
  snakeTimer2 = setTimeout(() => {
    changeImage2('/wp-content/themes/Aimaru%27s%20Portfolio/assets/img/top/snake3.gif' + '?' + timestamp);
  }, 2000);
  // 終了後画像の非表示
  snakeTimer3 = setTimeout(() => {
    snake.fadeOut();
  }, 4000);

});


/*=====================================
リス risu
=====================================*/

// 画像用変数
let risu = jQuery('#js-risu');
// 画像切替タイマー
let risuTimer;
let risuTimer2;
let risuTimer3;

// 画像切替用関数(再スタート用)
function changeImage3(imageUrl) {
    risu.css('background-image', 'url(' + imageUrl + ')');
}

jQuery('.c-btn--red a').hover(function() {
  // 起動中タイマーリセット
  clearTimeout(risuTimer);
  clearTimeout(risuTimer2);
  clearTimeout(risuTimer3);
  // start画像開始
  risu.fadeIn();
  // hover時の時間取得(gif画像をhoverする度に最初からはじめるため)
  let timestamp = new Date().getTime();
  // 関数で'background-image'書換(gif画像を最初から始めるために、「+ '?' + timestamp」で内容を変化)
  changeImage3('/wp-content/themes/Aimaru%27s%20Portfolio/assets/img/top/risu1.gif' + '?' + timestamp);
  // hover画像に切替
  risuTimer = setTimeout(() => {
    changeImage3('/wp-content/themes/Aimaru%27s%20Portfolio/assets/img/top/risu2.gif');
  }, 2000);
}, 
function () {
  // hover解除時の時間取得
  let timestamp = new Date().getTime();
  // end画像に切替
  risuTimer2 = setTimeout(() => {
    changeImage3('/wp-content/themes/Aimaru%27s%20Portfolio/assets/img/top/risu3.gif' + '?' + timestamp);
  }, 2000);
  // 終了後画像の非表示
  risuTimer3 = setTimeout(() => {
    risu.fadeOut();
  }, 3000);

});


/*=====================================
キノコ mush
=====================================*/

// 画像用変数
let mush = jQuery('#js-mush');
// 画像切替タイマー
let mushTimer;
let mushTimer2;
let mushTimer3;

// 画像切替用関数(再スタート用)
function changeImage4(imageUrl) {
    mush.css('background-image', 'url(' + imageUrl + ')');
}

jQuery('.c-btn--green a').hover(function() {
  // 起動中タイマーリセット
  clearTimeout(mushTimer);
  clearTimeout(mushTimer2);
  clearTimeout(mushTimer3);
  // start画像開始
  mush.fadeIn();
  // hover時の時間取得(gif画像をhoverする度に最初からはじめるため)
  let timestamp = new Date().getTime();
  // 関数で'background-image'書換(gif画像を最初から始めるために、「+ '?' + timestamp」で内容を変化)
  changeImage4('/wp-content/themes/Aimaru%27s%20Portfolio/assets/img/top/mush1.gif' + '?' + timestamp);
  // hover画像に切替
  mushTimer = setTimeout(() => {
    changeImage4('/wp-content/themes/Aimaru%27s%20Portfolio/assets/img/top/mush2.gif');
  }, 2000);
}, 
function () {
  // hover解除時の時間取得
  let timestamp = new Date().getTime();
  // end画像に切替
  mushTimer2 = setTimeout(() => {
    changeImage4('/wp-content/themes/Aimaru%27s%20Portfolio/assets/img/top/mush3.gif' + '?' + timestamp);
  }, 2000);
  // 終了後画像の非表示
  mushTimer3 = setTimeout(() => {
    mush.fadeOut();
  }, 3000);

});







  

});