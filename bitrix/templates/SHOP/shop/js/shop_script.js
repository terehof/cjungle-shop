$(document).ready(function () {

  $('#shop-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    nextArrow: '#shop-arrow-right',
    prevArrow: '#shop-arrow-left',
  });

  $('.shop-items__item').on('click', function () {
    var $this = $(this);
    $this.find('.order-btn').click();
  });
  $('.order-btn').magnificPopup({
    removalDelay: 500,
    mainClass: 'mfp-fade',
    callbacks: {
      open: function() {
        console.log('popup opened!!!');
        console.log('toggleBtnOffset',$('.toggle-form-btn').offset().top);
        console.log('sendFormBtnOffset', $('.send-form-btn').offset().top);
      }
    }
  });
  $('.header-order-btn').magnificPopup({
    removalDelay: 500,
    mainClass: 'mfp-fade'
  });

  $('.order-form-btn').click(function(event) {
    $(this).closest('.order-form__row').find('.order-form__row__col').toggleClass( "form" );
  });


  $('#order-form-send').submit(function() {
      

      $.magnificPopup.open({
        items: {
          src: '#order-complate'
        },
        type: 'inline'
      });


    return false;
  });

  $('#order-complate-close').click(function() {
    $.magnificPopup.close();
  });

});