$(document).ready(function() {


  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {

    var currentScrollPos = window.pageYOffset,
      //hEvent = document.getElementById('hAnimation');
    navEvent = document.getElementById('subNavPos');
    floatEvent = document.getElementById('leftFloating');

    if (prevScrollpos > currentScrollPos) {
      //hEvent.style.top = "0";
      //navEvent.classList.add('fixed2');
      //floatEvent.classList.add('fixed2');

    } else {
      //hEvent.style.top = "-110px";
      //navEvent.classList.remove('fixed2');
      //floatEvent.classList.remove('fixed2');
    }
    prevScrollpos = currentScrollPos;
  }

  $(window).scroll(function() {
    var secTop = $(document).scrollTop(),
      hvisual = $('.mainVisual').outerHeight(),
      hsubvisual = $('.subVisual').outerHeight();

    if (secTop >= hvisual) {
      $('#hAnimation').addClass('scrollBG');
      $('#hAnimation').removeClass('hFixed');
    } else if (secTop >= hsubvisual) {
      $('#hAnimation').addClass('scrollBG');
      $('#hAnimation').removeClass('hFixed');
    } else {
      $('#hAnimation').removeClass('scrollBG');
      $('#hAnimation').addClass('hFixed');
    }
  });

  $('.navDepth01').mouseenter(function() {
    $('.headerWrap').addClass('open');
    $('.navDepthWrap , .navFamilySite').slideDown();
  });


  $('.leftMenu').mouseleave(function() {
    $('.headerWrap').removeClass('open');
    $('.navDepthWrap , .navFamilySite').hide();
    $('.depthArrow').removeClass('open');
    $('.navDepth2').hide();
  });


  $('.navDepthWrap li').has('.navDepth2').addClass('depthArrow');

  $('.depthArrow').click(function() {
    $(this).toggleClass('open');
    $(this).children('.navDepth2').slideToggle();
    $(this).siblings('.depthArrow').removeClass('open');
    $(this).siblings('.depthArrow').children('.navDepth2').slideUp();
  });


  $('.selectStyle1').click(function() {
    $(this).toggleClass('open');
    $(this).children('ul').slideToggle();
  });

  $('.hSearchBtn').click(function() {
    $('.hSearch-input').animate({
      'right': '0'
    });
  });

  $('.closehSearch').click(function() {
    $('.hSearch-input').animate({
      'right': '-100%'
    });
  });


  $('.navDepth01').click(function() {
    $(this).toggleClass('mOpen');
    $(this).parents('li').siblings('li').children('.navDepth01').removeClass('mOpen');
  });

  $('.menuBtn').click(function() {
    $(this).toggleClass('on');
    $(this).siblings('.leftMenu').toggleClass('menuOpen').done;
    $('body').toggleClass('hidden');

    setTimeout(function() {
      $('.h1-logo').delay(.1).toggleClass('logoBg');
    }, 1);
  });

  $('.ftSelect').click(function() {
    $(this).toggleClass('open');
    $(this).children('ul').slideToggle();
  });


  $(window).scroll(function() {
    var secTop = $(document).scrollTop(),
      hsubvisual = $('.subVisual').outerHeight();

    if (secTop >= hsubvisual) {
      //$('.subNavWrap').addClass('fixed');
      $('.leftFloating').addClass('fixed');
    } else {
      //$('.subNavWrap').removeClass('fixed');
      $('.leftFloating').removeClass('fixed');
    }
  });

  $('.subNav p').click(function() {
    $(this).parents('.subNav').toggleClass('open');
    $(this).siblings('ul').slideToggle();

    $(this).parents('.subNav').siblings('.subNav').removeClass('open');
    $(this).parents('.subNav').siblings('.subNav').children('ul').slideUp();
  });

  $('.subContent').click(function(){
      $('.subNav').removeClass('open');
      $('.subNav').children('ul').slideUp();
  });



  //레이어 팝업
  $('.layerBtn').click(function() {
    var $href = $(this).attr('href');
    layer_popup($href);
  });

  function layer_popup(el) {
    var $el = $(el);
    var isDim = $el.prev().hasClass('dimBg');
    isDim ? $('.dim-layer').fadeIn() : $el.fadeIn();


    $el.find('.btn-Close').click(function() {
      isDim ? $('.dim-layer').fadeOut() : $el.fadeOut();
      return false;
    });

    $('.layer .dimBg').click(function() {
      $('.dim-layer').fadeOut();
      return false;
    });
  }


  //TOP 버튼 관련
  $(window).scroll(function() {
    if ($(this).scrollTop() > 0) {
      $('.top-btn').fadeIn();
    } else {
      $('.top-btn').fadeOut();
    }
  });

  $(".top-btn").click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 400);
    return false;
  });


});
