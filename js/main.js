/*--------------------------------
 * 画面遷移
--------------------------------*/

function screenTransition() {
  setTimeout(function() {
    $('#js-splash_logo').fadeOut('slow');
  }, 1500);

  setTimeout(function() {
    $('#js-splash').fadeOut('slow', function() {
      $('body').addClass('appear');
    });
  }, 1200);
}


/*--------------------------------
 * ハンバーガーメニュー
--------------------------------*/

// function openMenu() {
//   $('.js-open_btn').click(function() {
//     $(this).toggleClass('active');
//     $('#g-nav').toggleClass('panel-active');
//   });

//   $(document).on('click', '#g-nav a', function() {
//     $('.js-open_btn').removeClass('active');
//     $('#g-nav').removeClass('panel-active');
//   });
// }

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
  $('.js-textTyping').each(function() {
    var elemP = $(this).offset().top - 100;
    var scroll = $(window).scrollTop();
    var windowH = $(window).height();
    var thisChild = "";

    if(scroll >= elemP - windowH) {
      thisChild = $(this).children();
      thisChild.each(function(i) {
         var time = 190;
         $(this).delay(time * i).fadeIn(time);
      });
    } else {
      thisChild = $(this).children();
      thisChild.each(function() {
        $(this).stop();
        $(this).css("display", "none");
      });
    }
  });
}

// 画面読み込み後直ぐ関数を呼び出す
$(window).on('load', function() {
  var element = $(".js-textTyping");
  element.each(function() {
    var text =$(this).html();
    var textbox = "";
    text.split('').forEach(function(t) {
      if(t !== "") {
        textbox += '<span>' + t + '</span>';
      } else {
        textbox += t;
      }
    });
    $(this).html(textbox);
  });
  textTypingAnime();
})


/*--------------------------------
 * 要素がランダムに出現
--------------------------------*/

function moveAnimetion() {

  // 読み込まれたら直ぐにランダムに出現
  var randomElm = $(".js-randomBox");  // 親要素取得
  var randomElmChild = $(randomElm).children();  // 親の子要素を取得
  if(!$(randomElm).hasClass("play")) {  // 親要素に play クラスが付いていなければ処理する
    randomAnime();
  }

  function randomAnime() {
   $(randomElm).addClass("play");  // 親要素に play クラスを付与
   var rnd = Math.floor(Math.random() * randomElmChild.length);  // 配列数からランダムで数値を取得
   var moveData = "fadeUp";  // アニメーション名 = CSSのクラス名を指定
   $(randomElmChild[rnd]).addClass(moveData);  // アニメーションのクラスを追加
   randomElmChild.splice(rnd, 1);  // アニメーション追加となった要素かを配列から削除
   if(randomElmChild.length == 0) {  // 配列の残りがあるか確認
    $(randomElm).removeClass("play");  // 無くなった場合は親要素の playクラス を削除
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
 $(".js-blurTrigger").each(function() {
  var elemPos = $(this).offset().top - 50;
  var scroll = $(window).scrollTop();
  var windowH = $(window).height();

  if(scroll >= elemPos - windowH) {
    $(this).addClass('blur');
  } else {
    $(this).removeClass('blur');
  }
 });
}


/*--------------------------------
 * slider
--------------------------------*/

function slider() {
  $('.slider').slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 4000,
    speed: 3000,
    infinite: true,
    cssEase: 'ease-in-out',
    slidesToShow: 1,
    slidesToScroll: 1,
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

$(window).on('scroll', function() {
  moveAnimetion();
  BlurTextAnime();
});


/*--------------------------------
 * ロード時に関数を呼び出す
--------------------------------*/

$(window).on('load', function() {
  openMenu();
  screenTransition();
  moveAnimetion();
  BlurTextAnime();
  slider();
});
