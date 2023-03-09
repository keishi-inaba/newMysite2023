/*--------------------------------
 * 画面遷移
--------------------------------*/

function screenTransition() {
  setTimeout(function() {
    jQuery('#js-splash_logo').fadeOut('slow');
  }, 1500);

  setTimeout(function() {
    jQuery('#js-splash').fadeOut('slow', function() {
      jQuery('body').addClass('appear');
    });
  }, 1200);
}


/*--------------------------------
 * ハンバーガーメニュー
--------------------------------*/

function openMenu() {
  const openBtn = document.querySelector('.js-open_btn');
  const gNav = document.querySelector('#g-nav');

  openBtn.addEventListener('click', function() {
    this.classList.toggle('active');
    gNav.classList.toggle('panel-active');
  });

  document.addEventListener('click', function(event) {
    const target = event.target;
    if (target.closest('#g-nav a')) {
      openBtn.classList.remove('active');
      gNav.classList.remove('panel-active');
    }
  });
}



/*--------------------------------
 * textTyping
--------------------------------*/

function textTypingAnime() {
  jQuery('.js-textTyping').each(function() {
    var elemP = jQuery(this).offset().top - 100;
    var scroll = jQuery(window).scrollTop();
    var windowH = jQuery(window).height();
    var thisChild = "";

    if(scroll >= elemP - windowH) {
      thisChild = jQuery(this).children();
      thisChild.each(function(i) {
         var time = 190;
         jQuery(this).delay(time * i).fadeIn(time);
      });
    } else {
      thisChild = jQuery(this).children();
      thisChild.each(function() {
        jQuery(this).stop();
        jQuery(this).css("display", "none");
      });
    }
  });
}

// 画面読み込み後直ぐ関数を呼び出す
jQuery(window).on('load', function() {
  var element = jQuery(".js-textTyping");
  element.each(function() {
    var text =jQuery(this).html();
    var textbox = "";
    text.split('').forEach(function(t) {
      if(t !== "") {
        textbox += '<span>' + t + '</span>';
      } else {
        textbox += t;
      }
    });
    jQuery(this).html(textbox);
  });
  textTypingAnime();
})


/*--------------------------------
 * 要素がランダムに出現
--------------------------------*/

function moveAnimetion() {

  // 読み込まれたら直ぐにランダムに出現
  var randomElm = jQuery(".js-randomBox");  // 親要素取得
  var randomElmChild = jQuery(randomElm).children();  // 親の子要素を取得
  if(!jQuery(randomElm).hasClass("play")) {  // 親要素に play クラスが付いていなければ処理する
    randomAnime();
  }

  function randomAnime() {
   jQuery(randomElm).addClass("play");  // 親要素に play クラスを付与
   var rnd = Math.floor(Math.random() * randomElmChild.length);  // 配列数からランダムで数値を取得
   var moveData = "fadeUp";  // アニメーション名 = CSSのクラス名を指定
   jQuery(randomElmChild[rnd]).addClass(moveData);  // アニメーションのクラスを追加
   randomElmChild.splice(rnd, 1);  // アニメーション追加となった要素かを配列から削除
   if(randomElmChild.length == 0) {  // 配列の残りがあるか確認
    jQuery(randomElm).removeClass("play");  // 無くなった場合は親要素の playクラス を削除
   } else {
    setTimeout(function() {
      randomAnime();
    }, 1200);  // 1秒間隔でアニメーションをスタート。※ランダムスピード調整はこの数字を変更する。
   }
  }
}




/*--------------------------------
 * text animetion
--------------------------------*/

function BlurTextAnime() {
 jQuery(".js-blurTrigger").each(function() {
  var elemPos = jQuery(this).offset().top - 50;
  var scroll = jQuery(window).scrollTop();
  var windowH = jQuery(window).height();

  if(scroll >= elemPos - windowH) {
    jQuery(this).addClass('blur');
  } else {
    jQuery(this).removeClass('blur');
  }
 });
}


/*--------------------------------
 * swiper
--------------------------------*/

document.addEventListener('DOMContentLoaded', function() {
  const hero = new HeroSlider('.swiper');
  hero.start({delay: 2500});
});

class HeroSlider {
  constructor(el) {
    this.el = el;
    this.swiper = this._initSwiper();
  }

  _initSwiper() {
    return new Swiper(this.el, {
      loop: true,
      effect: 'coverflow',
      speed: 1000,
      centeredSlides: true,
      slidesPerView: 1,
      gravCursor: true,
    });
  }

  start(options = {}) {
    options = Object.assign({
      delay: 4000,
      disableOnInteraction: false
    }, options);
    this.swiper.params.autoplay = options;
    this.swiper.autoplay.start();
  }

  stop() {
    this.swiper.autoplay.stop();
  }
}


/*--------------------------------
 * スクロール時に関数を呼び出す
--------------------------------*/

jQuery(window).on('scroll', function() {
  moveAnimetion();
  BlurTextAnime();
});


/*--------------------------------
 * ロード時に関数を呼び出す
--------------------------------*/

jQuery(window).on('load', function() {
  openMenu();
  screenTransition();
  moveAnimetion();
  BlurTextAnime();
});
