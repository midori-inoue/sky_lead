$('.JS_ScrollItem').each(function(){
    let $item = $(this);
    $(window).on('scroll', function(){
      let top = $item.offset().top; // ターゲットの位置取得
      let position = top - $(window).height();  // イベントを発火させたい位置
      if($(window).scrollTop() > position){
        $item.addClass('isShow');
      }
    });
  });// JavaScript Document